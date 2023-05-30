<?php
//====== Información recibida ======//
    $opcion=(isset($_POST["opcion"]) && $_POST["opcion"]!="")? $_POST["opcion"]: false;
    $usuario = "Julieta";

//====== Casos ======//
    function crear($usuario)
    {
        //$usuario = "Julieta";
        echo "<p> Especifica que archivo vas a crear ".$usuario."</p>";
        echo"<p><br> ¿Archivo o carpeta? </p>
        <form class='form' method='post' enctype='multipart/form-data' target='_self'>

            <label for='tipo_archivo'><br>Archivo</label>
            <input type='radio' name='tipo_archivo' value='archivo'/>

            <br>   

            <label for='tipo_archivo'><br>Carpeta</label>
            <input type='radio' name='tipo_archivo' value='carpeta'/>
                
            <br>

            <label for='nombre_archivo'><br>Nombre del archivo o carpeta<br><br></label>
            <input type='text' name='nombre'/>

            <br><br>

            <button type='submit'> Aceptar </button>
        </form>";

        function asignar($input)
        {
            $input = (isset($_POST[$input]) && $_POST[$input] != "")? $_POST[$input] : false;
            if($input == false)
                echo 'ERROR: No has introducido un dato requerido <br>';
            return $input;
        }
        
        $tipo_archivo = asignar("tipo_archivo");
        $nombre = asignar("nombre");

        //echo $tipo_archivo.'<br>';
        //echo $nombre.'<br>';

        if (!file_exists("./statics/files"))
        {   
            mkdir("./statics", 0700);
            mkdir("./statics/files", 0700);
        }

        if($tipo_archivo == "archivo")
        {
            $archivo = "$nombre.txt";
            if(file_exists($archivo))
                echo "ERROR: No se puede crear el archivo porque ya existe otro archivo con ese nombre";
            else
                $archivo = fopen("$nombre.txt", "w+b");
        } 
        else 
        {
            $carpeta = "./statics/files/$nombre";   
            if(file_exists($carpeta))
                echo "ERROR: No se puede crear el directorio porque ya existe una carpeta con ese nombre";
            else
                mkdir($carpeta, 0700);
                //rmdir es el comando para borrar directorios
        }
    }


    function renombrar($usuario)
    {
        
        echo "<p> Especifica que archivo vas a renombrar ".$usuario."</p>";
        echo "<p><br> ¿Archivo o carpeta? </p>
        <form class='form' method='post' enctype='multipart/form-data' target='_self'>

            <label for='nombre_act'><br>Nombre actual:</label>
                <input type='text' name='nombre_act'/>

            <br>   

            <label for='nombre_new'><br>Nombre nuevo:</label>
                <input type='text' name='nombre_new'/>
                
            <br><br>

            <button type='submit'> Renombrar </button>
        </form>";

        $nombre_act=(isset($_POST["nombre_act"]) && $_POST["nombre_act"]!="")? $_POST["nombre_act"]: false;
        $nombre_new=(isset($_POST["nombre_new"]) && $_POST["nombre_new"]!="")? $_POST["nombre_new"]: false;

        $actual="./files/$nombre_act.txt";
        $nuevo="./files/$nombre_new.txt";
        if(!file_exists($actual))
            echo "ERROR: El archivo no existe.";
        else
            if(file_exists($actual))
            {
                rename($actual,$nuevo);
            }

    }

    function eliminar($usuario)
    {
        echo "<p> Especifica que archivo vas a eliminar ".$usuario."</p>";
        echo "
        <form class='form' method='post' enctype='multipart/form-data' target='_self'>
            <label for='tipo_archivo'><br>Archivo</label>
                <input type='radio' name='tipo_archivo' value='archivo'/>
            <br>
            <label for='tipo_archivo'><br>Carpeta</label>
                <input type='radio' name='tipo_archivo' value='carpeta'/>
            <br>
            <label for='nombre_arch'><br>Nombre del archivo a eliminar:</label>
                <input type='text' name='nombre_arch'/>
                
            <br><br>
            <button type='submit'> Eliminar </button>
        </form>";

        $tipo_archivo=(isset($_POST["tipo_archivo"]) && $_POST["tipo_archivo"]!="")? $_POST["tipo_archivo"]: false;
        $nombre_arch=(isset($_POST["nombre_arch"]) && $_POST["nombre_arch"]!="")? $_POST["nombre_arch"]: false;
        $nombrea="../../files/$nombre_arch.txt";
        $nombrec="../../files/$nombre_arch";

        
        if($tipo_archivo == "archivo")
        {
            if(!file_exists($nombrea))
                echo "ERROR: El archivo no existe.";
            else
                if(file_exists($nombrea))
                {
                    unlink($nombrea);
                    echo "Archivo eliminado";
                }
        } 

        
        if($tipo_archivo == "carpeta")
        {
            if(!file_exists($nombrec))
                echo "ERROR: La carpeta no existe.";
            else
                if(file_exists($nombrec))
                {
                    rmdir($nombrec);
                    echo "Carpeta eliminada";
                }
        }
            
    }

    if($opcion=='crear')
        crear($usuario);
    else
        if($opcion=='renombrar')
            renombrar($usuario);
        else
            if($opcion=='eliminar')
                eliminar($usuario);
?>
