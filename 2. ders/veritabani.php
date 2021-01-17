<?php
session_start();

function baglantiOlustur(){
    // $sunucu_adi = 'localhost';
    $kullaniciAdi = 'root';
    $parola = '';
    $veritabani = 'iot1929';

    $baglanti = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);

    if(!$baglanti){
        die("Bağlantı Hatası: ".mysqli_connect_error());
    }
    $baglanti->set_charset("utf8");
    
    return $baglanti;
}

