<?php 

if($rutbe!=7){
  ?>
    <div class="alert alert-danger">Yetkisiz İşlem! Log kayıtlarınız yöneticiye bildirilmiştir!</div>
  <?php
  go("login.php?do=anasayfa",3);
  exit;
}
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
          <li class="breadcrumb-item active" aria-current="page">Yeni Yetenek Ekle</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="card card-primary card-outline mb-4">
        <div class="card-header"><div class="card-title">Yeni Yetenek Ekle</div></div>
        <?php 
          if ($_POST){
            $entity = new \Entities\YetenekEntity();
            $entity->sira = max(1, (int) temizle($_POST["sira"]));
            $entity->yetenek_adi = temizle($_POST["yetenek_adi"]);
            $entity->yetenek_orani = min(100, max(0, (int) temizle($_POST["yetenek_orani"])));
            $entity->yetenek_detayi = "";
            $entity->aktif = (int) temizle($_POST["aktif"]);
            $entity->ekleyen = $code->user->kullanici_no;

            $ekle = $code->ekleYetenek($entity);
            if($ekle){
              ?>
              <div class="alert alert-success">Yetenek bilgisi başarılı bir şekilde eklenmiştir.</div>
              <?php
              go("login.php?do=yeteneklerim",2);
            }else{
              ?>
              <div class="alert alert-danger">Hata! Yetenek bilgisi eklenemedi.</div>
              <?php
            }
          }
        ?>

        <form method="post">
          <div class="card-body">
            <div class="mb-3">
              <label for="sira" class="form-label">Sıra</label>
              <input type="number" class="form-control" id="sira" name="sira" value="1" min="1" required />
              <small class="text-muted">1 en üstte görünür.</small>
            </div>
            <div class="mb-3">
              <label for="yetenek_adi" class="form-label">Yetenek Adı</label>
              <input type="text" class="form-control" id="yetenek_adi" name="yetenek_adi" required />
            </div>
            <div class="mb-3">
              <label for="yetenek_orani" class="form-label">Yetenek Düzeyi (%)</label>
              <input type="number" class="form-control" id="yetenek_orani" name="yetenek_orani" min="0" max="100" required />
              <small style="color: #dc3545; font-style: italic; font-weight: 700;"> *Lütfen dikkat:</small><small>  0-100 arasında bir değer giriniz.</small>
            </div>
            <div class="mb-3">
              <label for="aktif" class="form-label">Durum</label>
              <select class="form-control" id="aktif" name="aktif" required>
                <option value="1" selected>Aktif</option>
                <option value="0">Pasif</option>
              </select>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-warning"><i class="bi bi-plus"></i>Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
