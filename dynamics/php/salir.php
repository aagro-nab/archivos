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
    session_start();
    echo '<h1>Adios'.$_SESSION["Usuario"].' esperamos verte pronto</h1>';
    session_destroy();
    ?>
    <form action="./Pagina_principal.php" method="post" target="_self">
        <button type="submit"> Salir </button>
    </form>
</body>
</html>