<?php 
require_once 'veritabani.php';
$baglanti = baglantiOlustur();

?><html>
<head>
    <title>PG1926 Form İşlemleri</title>
</head>
<body>
<?php 
if(isset($_POST["gonder"])){
    // var_dump( $_POST["kullanici_adi"] );
    
    $kullanici_adi = $_POST["kullanici_adi"];
    $sifre = $_POST["parola"];
    $ad = $_POST["isim"];
    $soyad = $_POST["soyisim"];
    $tarih = date("Y-m-d H:i:s");
    // echo $kullanici_adi." ".$tarih;

    $yeniSifre = md5(base64_encode(md5(md5($sifre))));

    $kayit_ekle = mysqli_query($baglanti, "INSERT INTO kullanicilar (kullanici_adi, parola, isim, soyisim, olusturulma_tarihi) VALUES ('$kullanici_adi','$yeniSifre','$ad','$soyad','$tarih')");
    
    if($kayit_ekle == TRUE){
        echo '<h3 style="color:green;">Kayıt işlemi başarılı</h3>';
    }
    else {
        echo '<h3 style="color:red;">Olmadı beee :/</h3>';
    }

}
else {
?>
<form action="?" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" autocomplete="off">
    <br>
    <input type="password" name="parola" placeholder="Parola" autocomplete="off">
    <br>
    <input type="text" name="isim" placeholder="Adınız" autocomplete="off">
    <br>
    <input type="text" name="soyisim" placeholder="Soyadınız" autocomplete="off">
    <br><br>
    <button type="submit" name="gonder">GÖNDER</button>
</form>
<?php } ?>

</body>
</html>