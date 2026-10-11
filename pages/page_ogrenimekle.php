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
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Öğrenim Bilgileri</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">İçerikler</li>
                  <li class="breadcrumb-item " aria-current="page"><a href="login.php?do=ogrenim">Öğrenim Bİlgileri</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="login.php?do=kullaniciduzenle">Yeni Öğrenim Bilgisi Ekle</a></li>
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
                  <div class="card-header"><div class="card-title">Yeni Öğrenim Bilgisi Ekle</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                    <?php 
                      if ($_POST){
                          $entity=new \Entities\OgrenimBilgisiEntity();
                          $ekleyen = $code->user->kullanici_no;
                          $entity->mezuniyet_yil=temizle($_POST["mezuniyet_yili"]);
                          $entity->sira=(int) temizle($_POST["sira"]);
                          $entity->ogrenim_seviyesi=temizle($_POST["seviye"]);
                          $entity->ogrenim_kurumadi=temizle($_POST["ogrenim_kurumadi"]);
                          $entity->ekleyen=$ekleyen;
                          

                            $ekle=$code->ekleOgrenimBilgisi($entity);

                            if($ekle){?>
                              <div class="alert alert-success">Öğrenim Bilgisi başarılı bir şekilde güncellenmiştir.</div>
                              <?php 
                              go("login.php?do=ogrenim",3);
                              }else{ ?>
                                <div class="alert alert-danger">Hata! Öğrenim Bilgisi güncellenememiştir lütfen tekrar deneyeniz.</div>
                              <?php
                              
                              } 
                          }
                      ?>
                      
                  <form method="post">
                    <!--begin::Body-->
                    <div class="card-body">

                     <div class="mb-3">
                        <label for="mezuniyet" class="form-label">Mezuniyet Yılı  </label>
                        <select name="mezuniyet_yili" id="mezuniyet" class="form-control" required>
                          <?php 
                              for ($yil=1990; $yil <= 2040; $yil++){
                                echo "<option value='$yil'>$yil</option>"; 
                              }
                          ?>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="seviye" class="form-label">Öğrenim Seviyesi</label>
                        <select name="seviye" id="seviye" class="form-control" required>
                          <option value="1">İlkokul</option>
                          <option value="2">Ortaokul</option>
                          <option value="3">Lise</option>
                          <option value="4">Önlisans</option>
                          <option value="5">Lisans</option>
                          <option value="6">Yüksek Lisans</option>
                          <option value="7">Doktora</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="sira" class="form-label">Sıra</label>
                        <input type="number" class="form-control" id="sira" name="sira" value="999" min="1" required />
                        <small class="text-muted">1 en üstte görünür.</small>
                      </div>

                      <div class="mb-3">
                        <label for="ogrenim_kurumadi" class="form-label">Kurum Adı</label>
                        <input type="text" class="form-control" id="ogrenim_kurumadi" name="ogrenim_kurumadi" value="" required />
                      </div>

                      
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer text-end" >
                      <button type="submit" class="btn btn-warning"><i class="bi bi-plus"></i>Ekle</button>
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