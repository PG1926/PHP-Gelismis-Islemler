<?php 
require_once 'veritabani.php';
$baglanti = baglantiOlustur();

if(empty($_SESSION["iot1929"])){
    // header("refresh:0; url:index.php ");
    echo '<meta http-equiv="refresh" content="0; URL=girisyap.php" />';
    die();
}

?><html>
<head>
    <title>Anasayfa</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<h3 style="text-align:center;">Anasayfa</h3>

<?php 

$veriler = mysqli_query($baglanti, "SELECT * FROM kullanicilar ORDER BY id");

while($ekranaYaz = mysqli_fetch_object($veriler)){
    echo "id: ".$ekranaYaz->id."<br>";
    echo "Ad: ".$ekranaYaz->isim."<br>";
    echo "Soyad: ".$ekranaYaz->soyisim."<br>";
    
    var_dump($ekranaYaz);
    echo '<hr>';
}

?>
</body>
</html>