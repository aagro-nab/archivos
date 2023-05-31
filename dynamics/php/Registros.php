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
        
        $archivo = fopen("../../docs/registros.txt", "a+b");

        

        //ESRCIBIR
        //fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." ".$_SESSION["creoar"].$_SESSION["Archivo"]."</li><br></ul>");
        //fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." ".$_SESSION["elima"].$_SESSION["nombaeli"]."</li><br></ul>");
        //fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." ".$_SESSION["elimc"].$_SESSION["nombceli"]."</li><br></ul>");
        
        

        //IMPRIMIR
        fseek($archivo, SEEK_SET);

        while (!feof($archivo)){
            $linea = fgets($archivo);
            echo $linea;
        }
        fclose($archivo);
    ?>
    <br>
    <br>
    <form action="./Pagina_principal.php" method="post" target="_self">
    <button type="submit"> Inicio </button>
    </form>
</body>
</html>