<?php

$username = "runkarui_php";
$password = "paroolqwerty";
$database = "runkarui_php_alused";
define()

$conn = new mysqli("localhost", $username, $password, $database);

if(!$conn)
{
    echo 'ei ole yhendatud serveriga';
}

if(!mysqli_select_db($conn, 'runkarui_php_alused')){
    echo 'viga andmabaasiga yhendamisel';
}
?>