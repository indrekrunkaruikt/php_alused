<?php
?>
<html>


<head>

</head>
<body>

<form action="#" method="GET">
    Ülesanne 1 <input type="text" name="eesnimi" value="roBInsOn"><br>
    Ülesanne 2 <input type="text" name="perenimi" value="stalker"><br>
    Ülesanne 3 <input type="text" name="tekst3" value="HaHa räige noob"><br>
    Ülesanne 4 <input type="text" name="eesnimi2" value="Ülle"><br>
    Ülesanne 4 <input type="text" name="perenimi2" value="Doos"><br>
    <br>
    <input type="submit" value="Saada"><br>
</body>
</html>


<?php

//ülesanne 1
$eesnimi = $_GET['eesnimi'];

echo 'Tere: '.ucfirst(strtolower($eesnimi)).'<br><br>';


//ülesanne 2
$str = $_GET['perenimi'];
$arr1= str_split(strtoupper($str));
foreach ($arr1 as $key=>$item){
    echo "$item .";
}

//ülesanne 3

$tekst =  $_GET['tekst3'];
$ropudSonad = 'noob';
$asenda = '***';
echo '<br><br>' .str_replace($ropudSonad, $asenda, $tekst);

//ülesanne 4

$eesnimi2 =  strtolower($_GET['eesnimi2']);
$perenimi2 =  strtolower($_GET['perenimi2']);
$email= $perenimi2.'.'.$eesnimi2.'@khk.edu.ee';
$otsi2 = array('õ', 'ä', 'ü');
$asenda2 = array('o', 'a', 'y');
echo '<br><br>'.str_replace($otsi2, $asenda2, $email);


