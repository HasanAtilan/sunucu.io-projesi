<?php

class NEPİXSOFTWARE
{
    public $nepix_siteadresi = 'https://sunucu.io/api/'; // API Linki

    public $erisimkodu = ''; // APİ Erişim Anahtariniz

    public function sunucularilistele($veri) { // sunuculari listeler
        $veri = array_merge(array('erisimkodu' => $veriler->erisimkodu, 'sunucular' => 'aktar'), $veri);
        return json_decode($veriler->giris($veri));
    }

    public function sunucudurumu($sunucunumarasi) { // sunucu durumu
        return json_decode($veriler->giris(array(
            'erisimkodu' => $veri->erisimkodu,
            'yonetim' => 'aktif',
            'numara' => $sunucunumarasi
        )));
    }



    public function bildirimsistemi() { // Bildirim Yönetimi
        return json_decode($veriler->giris(array(
            'yonetim' => $veri->erisimkodu,
            'bildirimler' => 'sms',
        )));
    }

}

// Örnek

$apigetir = new Api();

$sunucular = $apigetir->sunucularilistele(); # tüm sunuculari listele

?>
