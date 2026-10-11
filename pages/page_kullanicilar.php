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
                <h3 class="mb-0">Kullanıcılar</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">Kullanıcılar</li>
                  <li class="breadcrumb-item active" aria-current="page">Kullanıcıların Listesi</li>
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

            <div class="col-md-12">

              <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Kullanıcıların Listesi</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th style="width: 10px">Id</th>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>E-postası</th>
                          <th>Cinsiyet</th>
                          <th>Rolü</th>
                          <th>Kayıt Tarihi</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        $kullanicilar=$code->GetirKullanicilar();

                        //var_dump($kullanicilar)
                        ?>
                        <?php 
                        foreach($kullanicilar as $kSatir):
                        ?>

                        <tr class="align-middle">
                          <td><?php echo temizle($kSatir->kullanici_no); ?></td>
                          <td><?php echo temizle($kSatir->kullanici_adi); ?></td>
                          <td><?php echo temizle($kSatir->kullanici_soyadi); ?></td>
                          <td><?php echo temizle($kSatir->kullanici_eposta); ?></td>
                          <td><?php echo temizle($kSatir->kullanici_cinsiyet); ?></td>
                          <td>
                            <?php 
                              if ($kSatir->kullanici_rutbe=="Yönetici"){
                                echo "<span class='badge text-bg-primary'>".
                                $kSatir->kullanici_rutbe. "</span>";
                              } 
                              else if ($kSatir->kullanici_rutbe=="Kullanıcı"){
                                echo "<span class='badge text-bg-secondary'>".
                                $kSatir->kullanici_rutbe. "</span>";
                              }
                          ?>
                          </td>
                          <td><?php 
                           echo date("d/m/Y" , strtotime($kSatir->kayit_tarih));
                          ?>
                          </td>
                          <td>
                          <a href="login.php?do=kullaniciduzenle&kullanici_no=<?php echo $kSatir->kullanici_no; ?>" class="btn btn-outline-primary"><i class="bi bi-pencil"></i></a>
                          <a href="login.php?do=kullanicisil&kullanici_no=<?php echo $kSatir->kullanici_no; ?>" class="btn
                           btn-outline-danger" onclick="return confirm('Bu kaydı silmek istediğinize emin misiniz?')"><i class="bi bi-trash"></i></a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>


            </div>
        
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>