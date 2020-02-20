<?php


?>
<!doctype html>
<html>
    <head>
        <title>Tellimisevorm</title>
        <style>

            form{
                background-color: aquamarine;
                padding: 20px;
                width: 230px;
                margin: auto;
                border: 2px solid chartreuse;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
        <form action="burgerid2.php" method="POST">
        <h1>Telli burger!</h1>

            <select name="burger">
                <option value = "burks1">Argiburger</option>
                <option value = "burks2">Kahekihiline</option>
                <option value = "burks3">Vega burger</option>
                <option value = "burks4">Lux burger koos friikate ja cocaga</option>
            </select>
            <br>
            Tomat
            <input type="checkbox" value = "lisand1">
            <br>
            Hapukurk
            <input type="checkbox" value = "lisand2">
            <br>
            Redis
            <input type = "checkbox" value = "lisand3">
            <br>
            Muna
            <input type = "checkbox" value = "lisand4">
            <br>
            <button type="submit">Osta!</button>
        </form>
    </body>
</html>
