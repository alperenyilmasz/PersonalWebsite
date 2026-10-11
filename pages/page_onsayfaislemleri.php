<?php
if($rutbe!=7){
  ?>
    <div class="alert alert-danger">Yetkisiz İşlem! Log kayıtlarınız yöneticiye bildirilmiştir!</div>
  <?php
  go("login.php?do=anasayfa",3);
  exit;
}

$ayar = $code->getirOnsayfaAyarlari();

if ($_POST){
  $entity = new \stdClass();
  $entity->ad_soyad = temizle($_POST["ad_soyad"]);
  $entity->profil_foto = temizle($_POST["profil_foto"]);
  $entity->hakkimda_yazi = strip_tags(trim($_POST["hakkimda_yazi"] ?? ""), '<p><br><strong><b><em><i><u><span><ul><ol><li>');
  $entity->ogrenim_baslik = temizle($_POST["ogrenim_baslik"]);
  $entity->yetenek_baslik = temizle($_POST["yetenek_baslik"]);
  $entity->email = temizle($_POST["email"]);
  $entity->telefon = temizle($_POST["telefon"]);
  $entity->instagram_url = temizle($_POST["instagram_url"]);
  $entity->twitter_url = temizle($_POST["twitter_url"]);
  $entity->facebook_url = temizle($_POST["facebook_url"]);
  $entity->linkedin_url = temizle($_POST["linkedin_url"]);
  $entity->github_url = temizle($_POST["github_url"]);
  $entity->footer_yazi = temizle($_POST["footer_yazi"]);

  if(isset($_FILES["profil_foto_dosya"]) && !empty($_FILES["profil_foto_dosya"]["name"])){
    $dosya = $_FILES["profil_foto_dosya"];
    if($dosya["error"] === UPLOAD_ERR_OK){
      $izinliUzantilar = ["jpg","jpeg","png","webp","gif"];
      $uzanti = strtolower(pathinfo($dosya["name"], PATHINFO_EXTENSION));
      if(in_array($uzanti, $izinliUzantilar, true)){
        $hedefKlasor = dirname(__DIR__) . DIRECTORY_SEPARATOR . "upload";
        if(!is_dir($hedefKlasor)){
          @mkdir($hedefKlasor, 0777, true);
        }
        $yeniAd = "profil_" . time() . "_" . mt_rand(1000,9999) . "." . $uzanti;
        $hedefTamYol = $hedefKlasor . DIRECTORY_SEPARATOR . $yeniAd;
        if(move_uploaded_file($dosya["tmp_name"], $hedefTamYol)){
          $entity->profil_foto = "upload/" . $yeniAd;
        } else {
          echo '<div class="alert alert-danger">Profil fotoğrafı yüklenemedi.</div>';
        }
      } else {
        echo '<div class="alert alert-danger">Sadece jpg, jpeg, png, webp, gif uzantıları kabul edilir.</div>';
      }
    } else {
      echo '<div class="alert alert-danger">Dosya yükleme sırasında bir hata oluştu.</div>';
    }
  }

  if($code->guncelleOnsayfaAyarlari($entity)){
    ?>
    <div class="alert alert-success">Ön sayfa ayarları güncellendi.</div>
    <?php
    $ayar = $code->getirOnsayfaAyarlari();
  } else {
    ?>
    <div class="alert alert-danger">Hata! Ön sayfa ayarları güncellenemedi.</div>
    <?php
  }
}
?>

<style>
  .onsayfa-form .card-header {
    background: #fff;
    color: #2575fc;
  }
  .onsayfa-form .card-title { color: #2575fc; font-weight: 600; }
  .onsayfa-section {
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 16px;
    margin-bottom: 16px;
    background: #fff;
  }
  .onsayfa-section h6 {
    color: #2575fc;
    font-weight: 600;
    margin-bottom: 12px;
  }
  .onsayfa-form .form-label { font-weight: 600; }
</style>

<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Ön Sayfa İşlemleri</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
          <li class="breadcrumb-item">İçerikler</li>
          <li class="breadcrumb-item active">Ön Sayfa İşlemleri</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="card card-primary card-outline mb-4 onsayfa-form">
        <div class="card-header"><div class="card-title">İçerik Düzenleme</div></div>
        <form method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="onsayfa-section">
              <h6>Temel Bilgiler</h6>
              <div class="mb-3">
                <label class="form-label">Ad Soyad</label>
                <input type="text" class="form-control" name="ad_soyad" value="<?php echo $ayar->ad_soyad ?? 'Alperen YILMAZ'; ?>" required />
              </div>
              <div class="row">
                <div class="col-md-7 mb-3">
                  <label class="form-label">Profil Fotoğrafı Dosya Adı</label>
                  <input type="text" class="form-control" id="profil_foto" name="profil_foto" value="<?php echo $ayar->profil_foto ?? 'me1.png'; ?>" required />
                </div>
                <div class="col-md-5 mb-3">
                  <label class="form-label">Profil Fotoğrafı Dosya Seç</label>
                  <input type="file" class="form-control" id="profil_foto_dosya" name="profil_foto_dosya" accept=".jpg,.jpeg,.png,.webp,.gif" />
                </div>
              </div>
              <small class="text-muted">Dosya seçersen dosya adı otomatik güncellenir.</small>
            </div>

            <div class="onsayfa-section">
              <h6>Başlık ve Açıklama</h6>
              <div class="mb-3">
                <label class="form-label">Hakkımda Yazısı</label>
                <input type="hidden" id="hakkimda_yazi" name="hakkimda_yazi" value="<?php echo htmlspecialchars($ayar->hakkimda_yazi ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                <div id="hakkimda_editor" style="height: 260px; background:#fff;"><?php echo $ayar->hakkimda_yazi ?? ''; ?></div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Öğrenim Başlığı</label>
                  <input type="text" class="form-control" name="ogrenim_baslik" value="<?php echo $ayar->ogrenim_baslik ?? 'Öğrenim Bilgileri'; ?>" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label">Yetenek Başlığı</label>
                  <input type="text" class="form-control" name="yetenek_baslik" value="<?php echo $ayar->yetenek_baslik ?? 'Yeteneklerim'; ?>" required />
                </div>
              </div>
            </div>

            <div class="onsayfa-section">
              <h6>İletişim ve Sosyal Medya</h6>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                  <input type="text" class="form-control" name="email" value="<?php echo $ayar->email ?? 'alperenyilmasz38@gmail.com'; ?>" required />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                  <input type="text" class="form-control" name="telefon" value="<?php echo $ayar->telefon ?? '+90 507 903 2778'; ?>" required />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                  <input type="text" class="form-control" name="instagram_url" value="<?php echo $ayar->instagram_url ?? 'https://www.instagram.com/alperenyilmasz/'; ?>" />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-twitter-x"></i></span>
                  <input type="text" class="form-control" name="twitter_url" value="<?php echo $ayar->twitter_url ?? 'https://x.com/alperenyilmasz'; ?>" />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                  <input type="text" class="form-control" name="facebook_url" value="<?php echo $ayar->facebook_url ?? ''; ?>" />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                  <input type="text" class="form-control" name="linkedin_url" value="<?php echo $ayar->linkedin_url ?? 'https://www.linkedin.com/in/alperenyilmasz/'; ?>" />
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-github"></i></span>
                  <input type="text" class="form-control" name="github_url" value="<?php echo $ayar->github_url ?? 'https://github.com/alperenyilmasz'; ?>" />
                </div>
              </div>
            </div>

            <div class="onsayfa-section">
              <h6>Footer</h6>
              <div class="mb-0">
                <label class="form-label">Footer Yazısı</label>
                <input type="text" class="form-control" name="footer_yazi" value="<?php echo $ayar->footer_yazi ?? 'Tüm hakları saklıdır.'; ?>" required />
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-warning"><i class="bi bi-save"></i>Kaydet</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
<script>
  var quill = new Quill('#hakkimda_editor', {
    theme: 'snow',
    modules: {
      toolbar: [
        ['bold', 'italic', 'underline'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'align': [] }],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        ['clean']
      ]
    }
  });

  var form = document.querySelector('.onsayfa-form form');
  var fotoInput = document.getElementById('profil_foto_dosya');
  var fotoYolInput = document.getElementById('profil_foto');

  if (fotoInput && fotoYolInput) {
    fotoInput.addEventListener('change', function () {
      if (this.files && this.files[0]) {
        fotoYolInput.value = 'upload/' + this.files[0].name;
      }
    });
  }

  if (form) {
    form.addEventListener('submit', function () {
      document.getElementById('hakkimda_yazi').value = quill.root.innerHTML;
    });
  }
</script>
