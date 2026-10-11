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
 var_dump($gelenKullanici);
exit;
$sil=$code->silKullanicilar($gelenKullanici);
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
                  <li class="breadcrumb-item active" aria-current="page"><a href="login.php?do=kullanicisil">Kullanıcı Sil</a></li>
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
              <?php if($sil){ ?>
              <div class="alert alert-success">Kullanıcı Başarılı bir şekilde silinmiştir.</div>
              <?php 
               go("login.php?do=kullanicilar",3);
              }else{ ?>
                <div class="alert alert-danger">Hata! Kullanıı silinememiştir lütfen tekrar deneyeniz.</div>
              <?php
              go("login.php?do=kullanicilar",3);
              } ?>
              
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>