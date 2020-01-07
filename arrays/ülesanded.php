
<?php
//ülesanne 1
//massiivi loomine

echo 'ülesanne 1 <br><br>';
$klassid = array('Matemaatika', 'Geograafia', 'Ajalugu', 'Kehaline kasvatus', 'Eesti keel');
//masssiivi sortimine.
sort($klassid);
//massiivi kõigi elementide väljastamine
foreach($klassid as $klass){
    echo "$klass <br>";
}

//ülesanne 2
    echo '<br>Ülesanne 2<br><br>';
$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
//  osalejate arv (count)
    echo "Mitu osalejat: ", count($nimed), "<br>";
// keskmine palliviske tulemus (array_sum jt.)
$keskmine = array_sum($pallivisked)/count($pallivisked);
    echo "Keskmine:", $keskmine, "<br>";
// parim tulemus (max)
    echo 'Parim skoor:', max($pallivisked), '<br>' ;
// parima tulemuse visanud õpilase nimi (array_keys)
    echo '<br><br>';


//ülesanne 3

//mitmemõõtmelised massiivid
echo 'Ülesanne 3<br><br>';
	$raamatud = array(
        'raamat1'=>array('pealkiri'=>'Diehard 2','autor'=> 'Kadri Madri', 'žanr' => 'märul', 'ilmumisaasta' => '1990'),
        'raamat2'=>array('pealkiri'=>'Kalveipoeg','autor'=> 'Erika Naeris', 'žanr' => 'Mütoloogia', 'ilmumisaasta' => '1930'),
        'raamat3'=>array('pealkiri'=>'Norra mütoloogia','autor'=> 'Rait Linnamäe', 'žanr' => 'Mütoloogia', 'ilmumisaasta' => '2010'),
        'raamat4'=>array('pealkiri'=>'5 päevane tööpäev','autor'=> 'Liisa Piisa', 'žanr' => 'Eneseabi', 'ilmumisaasta' => '2019'),
        'raamat5'=>array('pealkiri'=>'Kuidas disainida pinke?','autor'=> 'Andrea Kärtnik', 'žanr' => 'õpik', 'ilmumisaasta' => '2017')
    );

	foreach ($raamatud as $mark=>$andmed){
        echo "$mark - ";
        foreach($andmed as $detailid){
            echo "$detailid ";
        }
        echo "<br><br><br>";

    }


        echo "Mitu raamatut on kokku:", count($raamatud);


        echo "<br>";


?>
