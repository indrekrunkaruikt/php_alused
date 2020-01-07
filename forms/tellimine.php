<?php

//var_dump($_GET);
echo '<pre>';
print_r($_GET);
echo '<pre>';


$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode 1: '.$toode1.'tk<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';

$keraRuumala = (1/3)*($_GET['kera1'] * $_GET['kera2']);

$koonuseH = $_GET[ 'koonus1'];
$koonuseR = $_GET['koons2'];

$koonuseRuumala = ((1/3) * (3.14 * ($koonuseR * $koonuseR)) * $koonuseH);



$silindriRuumala = (($_GET['silinde2'] * $_GET['silinde2']) * $_GET['silinder1']);
if (count($_GET) !=0) {
    echo 'Kera ruumala on: ' . $keraRuumala . '<br>';

    echo 'Koonuse ruumala on: ' . $koonuseRuumala . '<br>';
    echo 'silindri ruumala on: ' . $silindriRuumala . '<br>';
    echo print_r($_SERVER['php_self']);
}
?>
<h1>Tellimine</h1>

