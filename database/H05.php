
<?php

require_once 'config.php';
$conn->set_charset('utf8');
//$sql_koolid = 'SELECT Kool,Kokku FROM koolid2015 limit 10';
//$sql_koolid = 'SELECT * FROM koolid2015 WHERE Kool LIKE "%haapsalu%"';
//$sql_koolid = 'SELECT * FROM koolid2015 ORDER BY `2012` DESC';
$sql_koolid = 'SELECT * FROM koolid2015 LIMIT 6,10';
//$sql_koolid = 'SELECT AVG(Kokku), COUNT(Kokku), MAX(Kokku) FROM koolid2015';

$result = $conn->query($sql_koolid);
echo '<h1>Harjutus 2</h1>';
echo 'Erinevate sorteerimis võimaluste katsetamine<br><br>'
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
<?php

$conn->close();