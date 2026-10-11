<?php 

  if($rutbe!=7){

    ?>
      <div class="alert alert-danger">Yetkisiz İşlem! Log kayıtlarınız yöneticiye bildirilmiştir!</div>
    <?php

    go("login.php?do=anasayfa",3);
    exit;
  }
?>

<?php 
$gelenKullanici=temizle($_GET["kullanici_no"]);

$gelenKullanici= (int) $gelenKullanici;

$gelenSatir=$code->getirKullaniciyi($gelenKullanici);

?>  
<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Kullanıcılar</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">Kullanıcılar</li>
                  <li class="breadcrumb-item " aria-current="page"><a href="login.php?do=kullanicilar">Kullanıcıların Listesi</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="login.php?do=kullaniciduzenle">Kullanıcı Düzenle</a></li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
</div>
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

              <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Kullanıcı Düzenle</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                    <?php 
                      if ($_POST){
                          $entity=new \Entities\KullanicilarEntity();
                          $entity->kullanici_adi=temizle($_POST["adi"]);
                          $entity->kullanici_soyadi=temizle($_POST["soyadi"]);
                          $entity->kullanici_eposta=temizle($_POST["eposta"]);
                          $entity->kullanici_cinsiyet=temizle($_POST["cinsiyet"]);
                          $entity->kullanici_rutbe=temizle($_POST["rutbe"]);

                            $guncelle=$code->guncelleKullaniciyi($entity,$gelenSatir->kullanici_no);

                            if($guncelle){?>
                              <div class="alert alert-success">Kullanıcı Başarılı bir şekilde güncellenmiştir.</div>
                              <?php 
                              go("login.php?do=kullanicilar",3);
                              }else{ ?>
                                <div class="alert alert-danger">Hata! Kullanıı güncellenememiştir lütfen tekrar deneyeniz.</div>
                              <?php
                              
                              } 
                          }
                      ?>
                      
                  <form method="post">
                    <!--begin::Body-->
                    <div class="card-body">

                     <div class="mb-3">
                        <label for="adi" class="form-label">Adı</label>
                        <input type="text" class="form-control" id="adi" name="adi" value="<?php echo temizle($gelenSatir->kullanici_adi); ?>" />
                      </div>

                      <div class="mb-3">
                        <label for="soyadi" class="form-label">Soyadı</label>
                        <input type="text" class="form-control" id="soyadi" name="soyadi" value="<?php echo temizle($gelenSatir->kullanici_soyadi); ?>"  />
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" >E-posta adresi</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                          name="eposta"
                          value="<?php echo temizle($gelenSatir->kullanici_eposta); ?>"
                        />
                        
                      </div>

                      <div class="mb-3">
                        <label for="cinsiyet" class="form-label">Cinsiyet</label>
                        <select class="form-control" name="cinsiyet" id="cinsiyet">
                          <option value="1" <?php if($gelenSatir->kullanici_cinsiyet==1){echo "selected";} ?>>Kadın</option>
                          <option value="2" <?php if($gelenSatir->kullanici_cinsiyet==2){echo "selected";} ?>>Erkek</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="rolü" class="form-label">Rütbe</label>
                        <select class="form-control" name="rutbe" id="rolü">
                          <option value="2" <?php if($gelenSatir->kullanici_rutbe==2){echo "selected";} ?>>Kullanıcı</option>
                          <option value="7" <?php if($gelenSatir->kullanici_rutbe==7){echo "selected";} ?>>Yönetici</option>
                        </select>
                      </div>

                      
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer text-end" >
                      <button type="submit" class="btn btn-warning">Güncelle</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>

            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>