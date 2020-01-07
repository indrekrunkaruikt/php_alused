<?php

date_default_timezone_set('Europe/Tallinn');

echo '<h1> Kuupaeva ülesanded.</h1><br><h3>Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31</h3>';

echo 'ülesanne 1<br><br>';
echo date('d.m.Y G:i' , time());

echo '<br><br>';
echo 'ülesanne 2 <br><br> Kuva tänane eestikeelne nädalapäev, N: kolmapäev <br><br>';
$paevaNumber = date ('d');
$nadal = array(
    1=> 'Esmaspaev',
    2=>'Teisipaev',
    3=>'Kolmapaev',
    4=>'Neljapaev',
    5=>'Reede',
    6=>'Laupaev',
    7=>'Pühapaev');

foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number];
    }
}

echo 'Siia tuleb tänane kuupäev:', $nadal ,' <br><br>';

echo 'Ülesanne 3<br><br> Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev<br><br>';
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo $paev.'.'.$kuu.' '.$aasta, $nadal, '<br><br>';

echo 'Ülesanne 4 <br><br> Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!<br<br>';

$nyyd = time();
$jaanipaev = strtotime("2020-06-24");
$datediff = $nyyd - $jaanipaev;

// Saan esmalt sekundite vahe ja sealt tuletan päevade vahe mille korrutan -1 et saada positiivne arv päevade vaheks.
$paevadeArv = round($datediff / (60 * 60 * 24))* -1;

echo '<bn><br><br> Jaanipäevani on veel '.$paevadeArv.' päeva! <br><br>';
echo 'ülesanne 5 <br><br> Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.<br><br>';

$synnipaev1 = strtotime("1980-06-11");
$synnipeav2 = strtotime("1993-06-18");

$datediff2 = $nyyd - $synnipaev1;
$vanus1 = round(round(($datediff2 / (60 * 60 * 24))* -1)/365)* -1;

$datediff3 = $nyyd - $synnipeav2;
$vanus2 = round(round(($datediff3 / (60 * 60 * 24))* -1)/365) *-1;

echo 'Sina oled umbes '. $vanus1.' aastat vana ja mina olen umbes '.$vanus2.' aastat vana';

echo '<br><br>ülesanne 6 Maailmalõpp saabub 29.02.2016! Las PHP otsustab, kas see on võimalik.<br><br>';

$maailmalopp =  strtotime("2016-02-28");
$ajavahe= $nyyd - $maailmalopp;
$paevadeArv2 = round($ajavahe / (60 * 60 * 24));
echo '<br>Maailmalopp pole toimunud sest sellest on '.$paevadeArv2.' päeva möödas<br><br>';


echo 'Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”';

$tund  = date('H');
$tundminut =  date('H/i');
echo  '<br><br>Kell on : '.$tundminut;

if ($tund > 8){
    echo '<br>Tere õhtust';
} elseif ($tund > 13){
    echo '<br>Tere päevast';
}elseif ($tund > 17) {
    echo '<br>tere hommikust';
}