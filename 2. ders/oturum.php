<?php 
require_once 'veritabani.php';
$baglanti = baglantiOlustur();

$kullanici = $_POST["kullanici"];
$sifre = $_REQUEST["parola"];

$kullaniciSor = mysqli_fetch_array(mysqli_query($baglanti, "SELECT id, isim, soyisim FROM kullanicilar WHERE kullanici_adi='$kullanici' AND parola='$sifre'"));

if(empty($kullaniciSor["id"])){
    echo "hata";
}
else {
    $_SESSION["iot1929"] = [
        "ad" => $kullaniciSor["isim"],
        "soyad" => $kullaniciSor["soyisim"],
        "adsoyad" => $kullaniciSor["isim"]." ".$kullaniciSor["soyisim"]
    ];

    echo "basarili";
}


