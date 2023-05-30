<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $usu = (isset($_POST["usu"]) && $_POST["usu"] !="")? $_POST["usu"] : "Falta tu usuario";
    $casa = (isset($_POST["casa"]) && $_POST["casa"] !="")? $_POST["casa"] : "Falta tu usuario";

    session_start();
    $_SESSION["Usuario"] = $usu;
    $_SESSION["Casa"] = $casa;
    echo "Hola ".$_SESSION["Usuario"]." de los ".$_SESSION["Casa"]." que quieres hacer?";
    
?>