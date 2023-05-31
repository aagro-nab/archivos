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
        function asignar($input)
        {
            $input = (isset($_POST[$input]) && $_POST[$input] != "")? $_POST[$input] : false;
            if($input == false)
                echo 'ERROR: No has introducido un dato requerido <br>';
            return $input;
        }
        
        $tipo_archivo = asignar("tipo_archivo");
        $nombre = asignar("nombre");
        $_SESSION["Archivo"] = $nombre;

        //echo $tipo_archivo.'<br>';
        //echo $nombre.'<br>';

        /*if (!file_exists("../../statics/files"))
        {   
            mkdir("../../statics", 0700);
            mkdir("../../statics/files", 0700);
        }*/

        if($tipo_archivo == "archivo")
        {
            $archivo = "../../statics/files/$nombre.txt";
            if(file_exists($archivo))
            {
                echo "ERROR: No se puede crear el archivo porque ya existe otro archivo con ese nombre";
                echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
            }
            else
            {    
                $archivo = fopen("../../statics/files/$nombre.txt", "w+b");
                fclose($archivo);
                $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." creo el archivo: ".$nombre."</li><br></ul>");
            }   
        } 
        else 
        {
            $carpeta = "../../statics/files/$nombre";   
            if(file_exists($carpeta))
            {
                echo "ERROR: No se puede crear el directorio porque ya existe una carpeta con ese nombre";
                echo '<form action="./Pagina_principal.php" method="post" target="_self">
                        <button type="submit"> Salir </button>
                    </form>';
            }
            else
            {    
                mkdir($carpeta, 0700);
                $archivo = fopen("../../docs/registros.txt", "a+b");
                    fwrite($archivo,  "<ul>"."<li>".$_SESSION["Usuario"]." creo la carpeta: ".$nombre."</li><br></ul>");
                //rmdir es el comando para borrar directorios
            }
        }
        header("location:./Registros.php");
    ?>
</body>
</html>