<?php

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Pood OÜ</h1>

<form action="#" method="GET">
    Toode 1 <input type="text" name="t1"><br>
    Toode 2 <input type="text" name="t2"><br>
    Toode 3 <input type="text" name="t3"><br>
<br>
<h1>arvutused</h1>
<h3>Kera ruumala</h3>

    kera 1 <input type="number" name="kera1"><br>
    kera 2 <input type="number" name="kera2"><br>
<h3>Koonuse ruumala</h3>
    koonuse kõrgus: <input type="number" name="koonus1"><br>
    koonuse raadius: <input type="number" name="koonus2"><br>
<h3>Silindri ruumala</h3>
    kõrgus 1 <input type="number" name="silinder1"><br>
    raadius 2 <input type="number" name="silinder2"><br>
    <input type="submit" value="Saada">

</form>
</body>
</html>
<?php

//var_dump($_GET);
echo '<pre>';
print_r($_GET);
echo '<pre>';
//siia tulevad üleval sisestatud tulemused.
/*
$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode 1: '.$toode1.'tk<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';
*/
//kera ruumala
$keraRuumala = (1/3)*($_GET['kera1'] * $_GET['kera2']);
$keraRuumalaymardatult = round($keraRuumala, 2);
//koonuse ruumala
$koonusekorgus = $_GET[ 'koonus1'];
$koonuseRaadius = $_GET['koons2'];
$koonusePohjaPindala = 3.14 * ($koonuseRaadius * $koonuseRaadius);
$koonuseRuumala = (1/3) * $koonusePohjaPindala *$koonusekorgus;
$koonuseRuumalaymardatult = round($koonuseRuumala, 2);
//silindri ruumala
$silindriRaadius = $_GET['silinder2'];
$silindriKorgus = $_GET['silinder1'];
$silindriPohjaymbermoot = 3.14 * ($silindriRaadius * $silindriRaadius);
$silindriRuumala = $silindriPohjaymbermoot * $silindriKorgus;
$silindriRuumalaymardatult = round($silindriRuumala, 2);
//Esita tulemused:
if (count($_GET) !=0) {
    echo 'Kera ruumala on: ' . $keraRuumalaymardatult . '<br>';
    echo 'Koonuse ruumala on: ' . $koonuseRuumalaymardatult . '<br>';
    echo 'silindri ruumala on: ' . $silindriRuumalaymardatult . '<br>';
    echo print_r($_SERVER['php_self']);
}
?>