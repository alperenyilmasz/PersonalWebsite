<?php 

namespace Classes;

use Entities\AyarlarEntity;
use Entities\KullanicilarEntity;
use Entities\OgrenimBilgisiEntity;
use Entities\YetenekEntity;

class code{

    public $db;
    private $dbhost='localhost';
    private $dbname='alperen';
    private $dbuser='root';
    private $dbpass='';

    public KullanicilarEntity $user;

    public function __construct()
    {
        $this->user=$_SESSION['user'] ?? new KullanicilarEntity();
    }

    public function connect2db():void
    {
            try {
                $this->db = new \PDO("mysql:host=$this->dbhost;dbname=$this->dbname;charset=utf8", $this->dbuser, $this->dbpass);
                $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $error) {
                die($error->getMessage());
            }

            // Eski veritabanı yapıları için şema güncellemeleri (hata olursa uygulamayı durdurma)
            try { $this->db->exec("ALTER TABLE ogrenimbilgisi ADD COLUMN sira INT NOT NULL DEFAULT 999"); } catch (\PDOException $e) {}
            try {
                $this->db->exec("
                    CREATE TABLE IF NOT EXISTS yetenekler (
                        yetenek_id INT AUTO_INCREMENT PRIMARY KEY,
                        sira INT NOT NULL DEFAULT 1,
                        yetenek_adi VARCHAR(120) NOT NULL,
                        yetenek_orani INT NOT NULL DEFAULT 0,
                        yetenek_detayi VARCHAR(255) NULL,
                        ekleyen INT NULL,
                        ekleme_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        sil TINYINT NOT NULL DEFAULT 2
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
                ");
            } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN sira INT NOT NULL DEFAULT 1"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN yetenek_adi VARCHAR(120) NOT NULL"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN yetenek_orani INT NOT NULL DEFAULT 0"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN yetenek_detayi VARCHAR(255) NULL"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN aktif TINYINT NOT NULL DEFAULT 1"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN ekleyen INT NULL"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN ekleme_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP"); } catch (\PDOException $e) {}
            try { $this->db->exec("ALTER TABLE yetenekler ADD COLUMN sil TINYINT NOT NULL DEFAULT 2"); } catch (\PDOException $e) {}
            try {
                $this->db->exec("
                    CREATE TABLE IF NOT EXISTS onsayfa_ayarlar (
                        id TINYINT PRIMARY KEY,
                        ad_soyad VARCHAR(120) NOT NULL,
                        profil_foto VARCHAR(255) NOT NULL,
                        hakkimda_yazi TEXT NULL,
                        ogrenim_baslik VARCHAR(120) NOT NULL,
                        yetenek_baslik VARCHAR(120) NOT NULL,
                        email VARCHAR(150) NOT NULL,
                        telefon VARCHAR(40) NOT NULL,
                        instagram_url VARCHAR(255) NULL,
                        twitter_url VARCHAR(255) NULL,
                        facebook_url VARCHAR(255) NULL,
                        linkedin_url VARCHAR(255) NULL,
                        github_url VARCHAR(255) NULL,
                        footer_yazi VARCHAR(255) NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
                ");
            } catch (\PDOException $e) {}

    }

    public function getSettings(): AyarlarEntity
    {
        $sth=$this->db->prepare("select * from ayarlar where site_durum=?");
        $sth->execute([AyarlarEntity::silinmedi]);

        return $sth->rowCount() > 0 ? $sth->fetchObject(AyarlarEntity::class) : new AyarlarEntity();


    }

    public function checkAccess()
    {
        if(!$this->user)
            return false;

        if($this->user->sil!=KullanicilarEntity::silinmedi)
            return false;

        return true;
    }

    
    public function login($username,$sifre) : KullanicilarEntity {

        $sth=$this->db->prepare("SELECT * FROM kullanicilar WHERE kullanici_eposta=? AND kullanici_sifre=? AND sil=?");
        $sth->execute([
            $username,
            $sifre,
            KullanicilarEntity::silinmedi
        ]);
        
        return $sth->rowCount()>0 ? $sth->fetchObject(KullanicilarEntity::class) : new KullanicilarEntity();
    }

    //Session ayarlama - Oturum açma
    public function setSession($data):void{
        $_SESSION['user']=$data;
    }

    //Session silme - Oturum Kapatma
    public function logout(){

        $this->user=new KullanicilarEntity;
        unset($_SESSION['user']);
    }

     public function GetirKullanicilar(): array
     {
        $sth=$this->db->prepare("
            Select kullanici_no,
                   kullanici_adi,
                   kullanici_soyadi,
                   kullanici_eposta,
                   (Case When kullanici_cinsiyet=1 then 'Kadın' else 'Erkek' end) as kullanici_cinsiyet,
                   (Case when kullanici_rutbe=2 then 'Kullanıcı' else 'Yönetici' end) as kullanici_rutbe,
                   kayit_tarih,
                   sil
                from kullanicilar where sil=2");   
            $sth->execute();

        return $sth->rowCount()>0 ? $sth->fetchAll(\PDO::FETCH_CLASS) : [];
     }

     public function getirKullaniciyi($kullanici_no)
     {
        $sth=$this->db->prepare("
            Select kullanici_no,
                   kullanici_adi,
                   kullanici_soyadi,
                   kullanici_eposta,
                   kullanici_cinsiyet,
                   kullanici_rutbe,
                   kayit_tarih,
                   sil
                from kullanicilar where kullanici_no=? and sil=2");   
            $sth->execute([$kullanici_no]);

        return $sth->rowCount()>0 ? $sth->fetchObject(KullanicilarEntity::class) : new KullanicilarEntity;
     }

     public function guncelleKullaniciyi($entity,$kullanici_no)
     {
        $sth=$this->db->prepare("
                        UPDATE kullanicilar SET 
                            kullanici_adi=?,
                            kullanici_soyadi=?,
                            kullanici_eposta=?,
                            kullanici_cinsiyet=?,
                            kullanici_rutbe=?
                        WHERE kullanici_no=? ");
        $sth->execute([
        $entity->kullanici_adi,
        $entity->kullanici_soyadi,  
        $entity->kullanici_eposta,
        $entity->kullanici_cinsiyet,
        $entity->kullanici_rutbe,   
        $kullanici_no]);   
        
        return $sth->rowCount();

     }





    public function silKullanicilar($kullanici_no){
        $sth=$this->db->prepare(
            "UPDATE kullanicilar SET sil=1 WHERE kullanici_no=?"
        );
        $sth->execute([$kullanici_no]);

        return $sth->rowCount();
    }

    public function GetirOgrenimBilgileri(): array
    {
        $sth=$this->db->prepare("
            SELECT 
                a.bilgi_no,
                a.mezuniyet_yil,
                a.sira,
                (CASE 
                    WHEN a.ogrenim_seviyesi=1 THEN 'İlkokul'
                    WHEN a.ogrenim_seviyesi=2 THEN 'Ortaokul'
                    WHEN a.ogrenim_seviyesi=3 THEN 'Lise'
                    WHEN a.ogrenim_seviyesi=4 THEN 'Önlisans'
                    WHEN a.ogrenim_seviyesi=5 THEN 'Lisans'
                    WHEN a.ogrenim_seviyesi=6 THEN 'Yüksek Lisans'
                    WHEN a.ogrenim_seviyesi=7 THEN 'Doktora'
                    ELSE 'Belirtilmedi'
                END) AS ogrenim_seviyesi,
                a.ogrenim_kurumadi,
                a.ekleyen,
                a.ekleme_tarihi,
                b.kullanici_adi,
                b.kullanici_soyadi
            FROM ogrenimbilgisi AS a
            LEFT JOIN kullanicilar AS b ON b.kullanici_no=a.ekleyen
            WHERE (a.sil=2 OR a.sil=0 OR a.sil IS NULL)
            ORDER BY a.sira ASC, a.bilgi_no ASC
        ");
        $sth->execute();

        return $sth->rowCount()>0 ? $sth->fetchAll(\PDO::FETCH_OBJ) : [];
    }


    public function getirOgrenimBilgileriTek($bilgi_no)
     {
        $sth=$this->db->prepare("
            Select bilgi_no,
                    a.mezuniyet_yil,
                    a.sira,
                    a.ogrenim_seviyesi,
                    a.ogrenim_kurumadi,
                    a.ekleyen,
                    a.ekleme_tarihi,
                   a.sil
                from ogrenimbilgisi as a 
                where (a.sil=2 OR a.sil=0 OR a.sil IS NULL) and bilgi_no=?");   
            $sth->execute([$bilgi_no]);

        return $sth->rowCount()>0 ? $sth->fetchObject(OgrenimBilgisiEntity::class) : new OgrenimBilgisiEntity;
     }


     public function ekleOgrenimBilgisi($entity)
     {
        $sth=$this->db->prepare("
                        INSERT INTO ogrenimbilgisi SET mezuniyet_yil=?, sira=?, ogrenim_seviyesi=?, ogrenim_kurumadi=?,
                        ekleyen=?, sil=?");
        $sth->execute([
        $entity->mezuniyet_yil,
        $entity->sira,
        $entity->ogrenim_seviyesi,  
        $entity->ogrenim_kurumadi,
        $entity->ekleyen,
        OgrenimBilgisiEntity::silinmedi
        ]);   
        
        return $sth->rowCount();

     }
     public function guncelleOgrenimBilgisi($entity,$bilgi_no)
     {
        $sth=$this->db->prepare("
                        UPDATE ogrenimbilgisi SET 
                             mezuniyet_yil=?,
                             sira=?,
                             ogrenim_seviyesi=?,
                             ogrenim_kurumadi=?
                        WHERE bilgi_no=? ");
        $ok=$sth->execute([
        $entity->mezuniyet_yil,
        $entity->sira,
        $entity->ogrenim_seviyesi,
        $entity->ogrenim_kurumadi,
        $bilgi_no]);   
        
        return $ok;

     }

     public function silOgrenimBilgisi($bilgi_no)
     {
        $sth=$this->db->prepare("
                        UPDATE ogrenimbilgisi SET sil=?
                        WHERE bilgi_no=? ");
        $ok=$sth->execute([
        OgrenimBilgisiEntity::silindi,
        $bilgi_no]);

        return $ok;
     }

     public function GetirYetenekler($sadeceAktif=false): array
     {
        $aktifKosul = $sadeceAktif ? " AND a.aktif=1" : "";
        $sth=$this->db->prepare("
            SELECT
                a.yetenek_id,
                a.sira,
                a.yetenek_adi,
                a.yetenek_orani,
                a.yetenek_detayi,
                a.aktif,
                a.ekleyen,
                a.ekleme_tarihi,
                b.kullanici_adi,
                b.kullanici_soyadi
            FROM yetenekler AS a
            LEFT JOIN kullanicilar AS b ON b.kullanici_no=a.ekleyen
            WHERE (a.sil=2 OR a.sil=0 OR a.sil IS NULL) $aktifKosul
            ORDER BY a.sira ASC, a.yetenek_id ASC
        ");
        $sth->execute();

        return $sth->rowCount()>0 ? $sth->fetchAll(\PDO::FETCH_OBJ) : [];
     }

     public function getirYetenekTek($yetenek_id)
     {
        $sth=$this->db->prepare("
            SELECT
                yetenek_id,
                sira,
                yetenek_adi,
                yetenek_orani,
                yetenek_detayi,
                aktif,
                ekleyen,
                ekleme_tarihi,
                sil
            FROM yetenekler
            WHERE (sil=2 OR sil=0 OR sil IS NULL) AND yetenek_id=?
        ");
        $sth->execute([$yetenek_id]);

        return $sth->rowCount()>0 ? $sth->fetchObject(YetenekEntity::class) : new YetenekEntity;
     }

     public function ekleYetenek($entity)
     {
        $sth=$this->db->prepare("
            INSERT INTO yetenekler SET
                sira=?,
                yetenek_adi=?,
                yetenek_orani=?,
                yetenek_detayi=?,
                aktif=?,
                ekleyen=?,
                sil=?
        ");
        $sth->execute([
            max(1, (int) $entity->sira),
            $entity->yetenek_adi,
            min(100, max(0, (int) $entity->yetenek_orani)),
            $entity->yetenek_detayi,
            ((int) $entity->aktif === 1 ? 1 : 0),
            $entity->ekleyen,
            YetenekEntity::silinmedi
        ]);

        return $sth->rowCount();
     }

     public function guncelleYetenek($entity,$yetenek_id)
     {
        $sth=$this->db->prepare("
            UPDATE yetenekler SET
                sira=?,
                yetenek_adi=?,
                yetenek_orani=?,
                yetenek_detayi=?,
                aktif=?
            WHERE yetenek_id=?
        ");
        $ok=$sth->execute([
            max(1, (int) $entity->sira),
            $entity->yetenek_adi,
            min(100, max(0, (int) $entity->yetenek_orani)),
            $entity->yetenek_detayi,
            ((int) $entity->aktif === 1 ? 1 : 0),
            $yetenek_id
        ]);

        return $ok;
     }

     public function silYetenek($yetenek_id)
     {
        $sth=$this->db->prepare("
            UPDATE yetenekler SET sil=?
            WHERE yetenek_id=?
        ");
        $ok=$sth->execute([
            YetenekEntity::silindi,
            $yetenek_id
        ]);

        return $ok;
     }

     public function getirOnsayfaAyarlari()
     {
        $sth=$this->db->prepare("SELECT * FROM onsayfa_ayarlar WHERE id=1");
        $sth->execute();
        return $sth->rowCount()>0 ? $sth->fetchObject(\stdClass::class) : new \stdClass();
     }

     public function guncelleOnsayfaAyarlari($entity)
     {
        $sth=$this->db->prepare("
            INSERT INTO onsayfa_ayarlar SET
                id=1,
                ad_soyad=?,
                profil_foto=?,
                hakkimda_yazi=?,
                ogrenim_baslik=?,
                yetenek_baslik=?,
                email=?,
                telefon=?,
                instagram_url=?,
                twitter_url=?,
                facebook_url=?,
                linkedin_url=?,
                github_url=?,
                footer_yazi=?
            ON DUPLICATE KEY UPDATE
                ad_soyad=VALUES(ad_soyad),
                profil_foto=VALUES(profil_foto),
                hakkimda_yazi=VALUES(hakkimda_yazi),
                ogrenim_baslik=VALUES(ogrenim_baslik),
                yetenek_baslik=VALUES(yetenek_baslik),
                email=VALUES(email),
                telefon=VALUES(telefon),
                instagram_url=VALUES(instagram_url),
                twitter_url=VALUES(twitter_url),
                facebook_url=VALUES(facebook_url),
                linkedin_url=VALUES(linkedin_url),
                github_url=VALUES(github_url),
                footer_yazi=VALUES(footer_yazi)
        ");
        return $sth->execute([
            $entity->ad_soyad,
            $entity->profil_foto,
            $entity->hakkimda_yazi,
            $entity->ogrenim_baslik,
            $entity->yetenek_baslik,
            $entity->email,
            $entity->telefon,
            $entity->instagram_url,
            $entity->twitter_url,
            $entity->facebook_url,
            $entity->linkedin_url,
            $entity->github_url,
            $entity->footer_yazi
        ]);
     }

}
?>