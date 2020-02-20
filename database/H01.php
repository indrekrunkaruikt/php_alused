<?php
//andmebaasi ühendus
require_once "config.php";
//sql päring
$koik_koolid = 'SELECT Kool,Kokku FROM koolid2015';
//päring andmebaasi
$result = $conn->query($koik_koolid);
//päringu tulemusi kokku
$numrows = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
<h1>Harjutus 01</h1>
<?php
echo "<p>Ridu kokku: $numrows</p>";
?>
<table>
    <tr><th>Kooli nimi</th><th>2012</th></tr>
    <?php
    //väljastame päringu kõik read
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['Kool']."</td><td>".$row['Kokku']."</td></tr>";
    }
    $result->free();
    ?>
</table>
<?php $conn->close(); ?>
</body>
</html>