<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {

if (!empty($_GET['$leht'])) [
    include($_GET['$leht'] . '.php')];}

?>
<html>

    <menu>
        <a href="index.php">avaleht</a>
        <a href="index.php?leht=portfoolio">portfoolio</a>
        <a href="index.php?leht=Kontakt">kontakt</a>
        <a href="index.php?leht=kaart">kaart</a>
    </menu>


        <h1>Avaleht</h1>
        <p>>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.

        </p>
</html>

