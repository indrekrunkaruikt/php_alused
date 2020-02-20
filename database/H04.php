<?php
if(isset($_GET['enimi']) && isset($_GET['pnimi'])){
    require_once "config.php";
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];
    //loome päringu
    $paring = "INSERT INTO kliendid(enimi, pnimi,kontakt) 
                VALUES ('".$enimi."', '".$pnimi."', '".$kontakt."')";
    //saadame päringu teele
    $conn->query($paring);

    if($conn->error){
        $viga = $conn->error;
        echo "<p>$viga</p>";
    }

    echo "Lisatud ridu: ".$conn->affected_rows."<br>";
    echo "Viimati lisatud ID".$conn->insert_id;
    $conn->close();
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
<h1>Harjutus 04</h1>
<form action="" method="get">
    Eesnimi <input type="text" name="enimi">
    Perenimi <input type="text" name="pnimi">
    Kontakt <input type="text" name="kontakt">
    <input type="submit" value="Salvesta">
</form>
</html>