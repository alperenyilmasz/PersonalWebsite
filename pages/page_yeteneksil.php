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

$sil = $code->silYetenek($yetenek_id);

if($sil){
  ?>
    <div class="alert alert-success">Yetenek bilgisi başarıyla silinmiştir.</div>
  <?php
}else{
  ?>
    <div class="alert alert-danger">Hata! Yetenek bilgisi silinemedi.</div>
  <?php
}

go("login.php?do=yeteneklerim",2);
exit;
?>
