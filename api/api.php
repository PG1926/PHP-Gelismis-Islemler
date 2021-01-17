<?php 

// https://api.flightplandatabase.com/plan/{id}
// https://api.flightplandatabase.com/search/plans?fromICAO=LTFM&toICAO=EGLL&limit=1


$kalkisHavaLimani = 'LTCB';
$inisHavaLimani = 'LTAC';
$limit = 3;

$verileriGetir = file_get_contents("https://api.flightplandatabase.com/search/plans?fromICAO=".$kalkisHavaLimani."&toICAO=".$inisHavaLimani."&limit=".$limit);
// var_dump($verileriGetir);

$coz = json_decode($verileriGetir, true);

foreach($coz AS $anahtar => $yaz){
    // var_dump($yaz);
    echo "Sistem Sıra No: ".$yaz["id"]."<br>
    Kalkış Meydanı: ".$yaz["fromName"]."<br>
    İniş Meydanı: ".$yaz["toName"]."
    <hr>";
}

