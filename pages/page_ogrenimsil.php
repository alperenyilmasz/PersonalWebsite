<?php 

if($rutbe!=7){
  ?>
    <div class="alert alert-danger">Yetkisiz İşlem! Log kayıtlarınız yöneticiye bildirilmiştir!</div>
  <?php
  go("login.php?do=anasayfa",3);
  exit;
}

$bilgi_no = isset($_GET["bilgi_no"]) ? (int) temizle($_GET["bilgi_no"]) : 0;

if($bilgi_no <= 0){
  ?>
    <div class="alert alert-danger">Geçersiz kayıt numarası.</div>
  <?php
  go("login.php?do=ogrenim",2);
  exit;
}

$sil = $code->silOgrenimBilgisi($bilgi_no);

if($sil){
  ?>
    <div class="alert alert-success">Öğrenim bilgisi başarıyla silinmiştir.</div>
  <?php
}else{
  ?>
    <div class="alert alert-danger">Hata! Öğrenim bilgisi silinemedi.</div>
  <?php
}

go("login.php?do=ogrenim",2);
exit;
?>
