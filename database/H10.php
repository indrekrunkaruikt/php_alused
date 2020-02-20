<?php
require_once "config.php";
//andmete kuvamine
$query = 'SELECT id,enimi,pnimi,kontakt FROM kliendid';
$stmt = $conn->stmt_init();
if(!$stmt->prepare($query)){
    $viga=$stmt->error;
} else {
    $stmt->bind_result($id, $enimi, $pnimi, $kontakt);
    $stmt->execute();
}
//veateade
if($conn->error){
    $viga = $conn->error;
}
?>

<h1>Harjutus 10</h1>

<?php
//kuvame päringu vastuse
while($stmt->fetch()){
    echo $enimi.' '.$pnimi.' - '.$kontakt.
        ' <strong><a href=H10_kustuta.php?kustuta=1&id='.$id.'">kustuta</a> 
            | <a href="H10_muuda.php?muuda=1&id='.$id.'">muuda</a></strong><br>';
}
?>
<?php $conn->close(); ?>
