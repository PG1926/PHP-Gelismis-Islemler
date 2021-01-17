<?php 
require_once 'veritabani.php';
$baglanti = baglantiOlustur();

if(!empty($_SESSION["iot1929"])){
    // header("refresh:0; url:index.php ");
    echo '<meta http-equiv="refresh" content="0; URL=anasayfa.php" />';
    die();
}

?><html>
<head>
    <title>PG1926 Form İşlemleri</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<form action="?" method="post" enctype="application/x-www-form-urlencoded">
<input type="text" name="kullanici_adi" id="kullanici_adi" placeholder="Kullanıcı Adınız" autocomplete="off" />
<input type="password" name="sifre" id="sifre" placeholder="Şifreniz" autocomplete="off" />
<button type="button" name="gonder" id="gonder">Oturum aç</button>
</form>

<script type="text/javascript">
$("#gonder").click(function(){
    var kullanici = $("#kullanici_adi");
    var sifre = $("#sifre");

    if(kullanici.val() === ""){
        alert("Lütfen kullanıcı adınızı yazınız");
    }
    else if(sifre.val() === ""){
        alert("Lütfen parolanızı yazınız");
    }
    else {
        var veriler = "kullanici=" + kullanici.val() + "&parola=" + sifre.val();
        $.ajax({
            type: "POST", url: "oturum.php", 
            data: veriler, cache: false,
            success: function(karsiSayfaninDegerleri){
                if(karsiSayfaninDegerleri === "hata"){
                    alert("Kullanıcı adı veya parolanız hatalı");
                }
                else {
                    window.location.href = 'anasayfa.php';
                }
            }
        });
    }
});
</script>
</body>
</html>