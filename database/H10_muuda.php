<?php require_once "config.php"; ?>
<!DOCTYPE html>

<h1>Harjutus 10</h1>
<?php
//muutmise kuvamine
if (isset($_GET['muuda']) && isset($_GET['id'])) {
    $query= 'SELECT id,enimi,pnimi,kontakt FROM kliendid WHERE id=?';
    $stmt = $conn->stmt_init();

    if(!$stmt->prepare($query)){
        $viga=$stmt->error;
    } else {
        $stmt->bind_param('i', $_GET['id']);
        $stmt->bind_result($id, $enimi, $pnimi, $kontakt);
        $stmt->execute();
        $stmt->fetch();
        ?>
        <h2>Andmete muutmine</h2>
        <form action="" method="get">
            <input type="text" name="id" value="<?php echo $id; ?>" hidden><br>
            Eesnimi <input type="text" name="enimi" value="<?php echo $enimi; ?>"><br>
            Perenimi <input type="text" name="pnimi" value="<?php echo $pnimi; ?>"><br>
            Kontakt <input type="text" name="kontakt" value="<?php echo $kontakt; ?>"><br>
            <input type="submit" value="Muuda" name="muudanyyd">
        </form>

        <?php
    }
    //päring andmete muutmiseks andmebaasis
} elseif (isset($_GET['muudanyyd']) && isset($_GET['id'])) {
    $query= 'UPDATE kliendid SET enimi=?,pnimi=?,kontakt=? WHERE id=?';
    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($query)){
        $viga=$stmt->error;
    } else {
        $stmt->bind_param('sssi', $_GET['enimi'],$_GET['pnimi'],$_GET['kontakt'],$_GET['id']);
        $stmt->execute();
        header("Location: 10.php");
    }
}else{
    echo "Probleem muutmisega";
}
?>
<?php $conn->close(); ?>