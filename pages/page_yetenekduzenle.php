<?php 

if($rutbe!=7){
  ?>
    <div class="alert alert-danger">Yetkisiz İşlem! Log kayıtlarınız yöneticiye bildirilmiştir!</div>
  <?php
  go("login.php?do=anasayfa",3);
  exit;
}

$yetenek_id = isset($_GET["yetenek_id"]) ? (int) temizle($_GET["yetenek_id"]) : 0;
if($yetenek_id <= 0){
  ?>
    <div class="alert alert-danger">Geçersiz kayıt numarası.</div>
  <?php
  go("login.php?do=yeteneklerim",2);
  exit;
}

$yetenek = $code->getirYetenekTek($yetenek_id);
?>

<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">Yetenek Bilgileri</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
          <li class="breadcrumb-item" aria-current="page">İçerikler</li>
          <li class="breadcrumb-item" aria-current="page"><a href="login.php?do=yeteneklerim">Yetenek Bilgileri</a></li>
          <li class="breadcrumb-item active" aria-current="page">Yetenek Düzenle</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="card card-primary card-outline mb-4">
        <div class="card-header"><div class="card-title">Yetenek Düzenle</div></div>
        <?php 
          if ($_POST){
            $entity = new \Entities\YetenekEntity();
            $entity->sira = max(1, (int) temizle($_POST["sira"]));
            $entity->yetenek_adi = temizle($_POST["yetenek_adi"]);
            $entity->yetenek_orani = min(100, max(0, (int) temizle($_POST["yetenek_orani"])));
            $entity->yetenek_detayi = "";
            $entity->aktif = (int) temizle($_POST["aktif"]);
            $entity->ekleyen = $code->user->kullanici_no;

            $guncelle = $code->guncelleYetenek($entity,$yetenek_id);
            if($guncelle){
              ?>
              <div class="alert alert-success">Yetenek bilgisi başarıyla güncellendi.</div>
              <?php
              go("login.php?do=yeteneklerim",2);
            }else{
              ?>
              <div class="alert alert-danger">Hata! Yetenek bilgisi güncellenemedi.</div>
              <?php
            }
          }
        ?>

        <form method="post">
          <div class="card-body">
            <div class="mb-3">
              <label for="sira" class="form-label">Sıra</label>
              <input type="number" class="form-control" id="sira" name="sira" value="<?php echo !empty($yetenek->sira) ? (int) $yetenek->sira : 1; ?>" min="1" required />
            </div>
            <div class="mb-3">
              <label for="yetenek_adi" class="form-label">Yetenek Adı</label>
              <input type="text" class="form-control" id="yetenek_adi" name="yetenek_adi" value="<?php echo $yetenek->yetenek_adi; ?>" required />
            </div>
            <div class="mb-3">
              <label for="yetenek_orani" class="form-label">Yetenek Düzeyi (%)</label>
              <input type="number" class="form-control" id="yetenek_orani" name="yetenek_orani" min="0" max="100" value="<?php echo (int) $yetenek->yetenek_orani; ?>" required />
              <small style="color: #dc3545; font-style: italic; font-weight: 700;"> *Lütfen dikkat:</small><small>  0-100 arasında bir değer giriniz.</small>
            </div>
            <div class="mb-3">
              <label for="aktif" class="form-label">Durum</label>
              <select class="form-control" id="aktif" name="aktif" required>
                <option value="1" <?php echo ((int) $yetenek->aktif === 1) ? "selected" : ""; ?>>Aktif</option>
                <option value="0" <?php echo ((int) $yetenek->aktif === 0) ? "selected" : ""; ?>>Pasif</option>
              </select>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-warning"><i class="bi bi-plus"></i>Güncelle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
