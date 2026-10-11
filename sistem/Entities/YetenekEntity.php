<?php

namespace Entities;

class YetenekEntity {
    public $yetenek_id;
    public $sira;
    public $yetenek_adi;
    public $yetenek_orani;
    public $yetenek_detayi;
    public $aktif;
    public $ekleyen;
    public $ekleme_tarihi;
    public $sil;

    const silindi = 1;
    const silinmedi = 2;
    const pasif = 0;
    const aktif = 1;
}

?>
