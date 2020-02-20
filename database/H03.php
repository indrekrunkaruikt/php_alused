<?php

if(isset($_GET['otsi'])){
    require_once "config.php";
    //keelame vormi erimärkide kasutamise
    $otsi = $conn->real_escape_string($_GET['otsi']);
    //lisame otsingusõna päringusse
    $koik_koolid = 'SELECT Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
    $result = $conn->query($koik_koolid);

    if($conn->error){
        $viga = $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
<h1>Harjutus 03</h1>
<h2>Sisesta kooli nimi mida sa otsid.</h2>
<form action="" method="get">
    <input type="text" name="otsi">
    <input type="submit" value="Otsi">
</form>
<?php
if (isset($viga)){
    echo "<p>$viga</p>";
} elseif(isset($result) && $result->num_rows) {
    //kuvame andmed, kui need vastavad otsingutulemusele
    while($row = $result->fetch_assoc()){
        echo '#'.$row['2015'].' '.$row['Kool'].'<br>';
    }
    $result->free();
    $conn->close();
}
?>
</body>
</html>