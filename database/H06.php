<?php
require_once "config.php";
//Andmete kuvamine
$koik_kliendid = 'SELECT * FROM kliendid';
$result = $conn->query($koik_kliendid);
?>
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Harjutus 06</h1>
<table>
    <tr>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>Kontakt</th>
        <th>Kustuta</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['enimi']."</td>
               <td>".$row['pnimi']."</td>
               <td>".$row['kontakt']."</td>
               <td><a href='?kustutaID=".$row['id']."'>kustuta</a></td>
               </tr>";
    }
    ?>
</table>
<?php $conn->close(); ?>
</body>
</html>