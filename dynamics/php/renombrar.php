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
        $nombre_act=(isset($_POST["nombre_act"]) && $_POST["nombre_act"]!="")? $_POST["nombre_act"]: false;
        $nombre_new=(isset($_POST["nombre_new"]) && $_POST["nombre_new"]!="")? $_POST["nombre_new"]: false;
        $tipo_archivo=(isset($_POST["tipo_archivo"]) && $_POST["tipo_archivo"]!="")? $_POST["tipo_archivo"]: false;
       // $nombren= $nombre_act;
       //$
        $actual="../../statics/files/$nombre_act";
        $nuevo="../../statics/files/$nombre_new";
       

        if($tipo_archivo == "archivo")
        {
            
            $nombreact=$actual.".txt";
            $nombrenue=$nuevo.".txt";
            if(!file_exists($nombreact))
            {
                echo "ERROR: El archivo no existe.";
                echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
            }
            else
                if(file_exists($nombreact))
                {
                    rename($nombreact,$nombrenue);
                    $_SESSION["sirenoma"] = "renombro el archivo: ";
                    $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." "."renombro el archivo ".$nombre_act." a ".$nombre_new."</li><br></ul>");
                    header("location:./Registros.php");
                }
        } 

        
        if($tipo_archivo == "carpeta")
        {
            $actual;
            $nuevo;
            if(!file_exists($actual))
            {
                echo "ERROR: El archivo no existe.";
                echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
            }
            else
                if(file_exists($actual))
                {
                    rename($actual,$nuevo);
                    $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." "."renombro la carpeta ".$nombre_act." a ".$nombre_new."</li><br></ul>");
                    header("location:./Registros.php");
                }
        }
    ?>
</body>
</html>