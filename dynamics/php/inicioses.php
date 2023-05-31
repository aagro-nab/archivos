<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $usu = (isset($_POST["usu"]) && $_POST["usu"] !="")? $_POST["usu"] : "Falta tu usuario";
    $casa = (isset($_POST["casa"]) && $_POST["casa"] !="")? $_POST["casa"] : "Falta tu usuario";

    session_start();
    $_SESSION["Usuario"] = $usu;
    $_SESSION["Casa"] = $casa;
    echo "Hola ".$_SESSION["Usuario"]." de los ".$_SESSION["Casa"].", ¿que quieres hacer?"; 
?> 
<h1 align="center">¿</h1>
<form action="./escoger_archivo.php" method="post" target="_self">
        <h2>Acciones</h2>
        <label> 
            <input name="opcion" type= "radio" value="crear"> Crear: 
        </label>
        <br><br>
        <label>
            <input name="opcion" type= "radio" value="renombrar"> Renombrar: 
        </label>
        <br><br>
        <label>
            <input name="opcion" type= "radio" value="eliminar"> Eliminar: 
        </label>
        <br><br>
        <label>
                <input type="submit" value="Continuar">
        </label>
</form>
<br>
<br>
<form action="./Registros.php" method="post" target="_self">
    <button type="submit"> Registros </button>
</form>
<br>
<br>
<form action="./salir.php" method="post" target="_self">
    <button type="submit"> Salir </button>
</form>
</body>
</html>

