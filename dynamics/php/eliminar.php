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
    $tipo_archivo=(isset($_POST["tipo_archivo"]) && $_POST["tipo_archivo"]!="")? $_POST["tipo_archivo"]: false;
    $nombre_arch=(isset($_POST["nombre_arch"]) && $_POST["nombre_arch"]!="")? $_POST["nombre_arch"]: false;
    $nombrea="../../statics/files/$nombre_arch.txt";
    $nombrec="../../statics/files/$nombre_arch";



    
    if($tipo_archivo == "archivo")
    {
        if(!file_exists($nombrea))
        {
            echo "ERROR: El archivo no existe.";
            echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
        }
        else
            if(file_exists($nombrea))
            {
                unlink($nombrea);
                $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." elimino el archivo: ".$nombre_arch."</li><br></ul>");
                header("location:./Registros.php");
            }
    } 

    
    if($tipo_archivo == "carpeta")
    {
        if(!file_exists($nombrec))
        {
            echo "ERROR: La carpeta no existe.";
            echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
        }
        else
            if(file_exists($nombrec))
            {
                rmdir($nombrec);
                $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." elimino la carpeta: ".$nombre_arch."</li><br></ul>");
                header("location:./Registros.php");
            }
    }
    ?>
</body>
</html>