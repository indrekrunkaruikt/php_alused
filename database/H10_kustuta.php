<?php
require_once "config.php";
?>

<h1>Harjutus 10</h1>
<?php
//muutmise kuvamine
if (isset($_GET['kustuta']) && isset($_GET['id'])) {
    $query= 'DELETE FROM kliendid WHERE id=?';
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
        $viga=$stmt->error;
    } else {
        $stmt->bind_param('i', $_GET['id']);
        $stmt->execute();
        header("Location: H10.php");
    }
}else{
    echo "Probleem muutmisega";
}
?>
<?php $conn->close(); ?>