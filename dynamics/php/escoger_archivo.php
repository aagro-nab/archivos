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
        $opcion = (isset($_POST["opcion"]) && $_POST["opcion"] !="")? $_POST["opcion"] : "Falta tu usuario";
        $elegido=0;
    
    if($opcion=="crear")
    {
        echo "¿Que archivo o carpeta quieres crear ".$_SESSION["Usuario"]."?";
        echo '<p><br> ¿Archivo o carpeta? </p>
            <form class="form" action="./crear_archivo.php" method="post" enctype="multipart/form-data" target="_self">

                <label for="tipo_archivo"><br>Archivo</label>
                <input type="radio" name="tipo_archivo" value="archivo"/>

                <br>   

                <label for="tipo_archivo"><br>Carpeta</label>
                <input type="radio" name="tipo_archivo" value="carpeta"/>
                    
                <br>

                <label for="nombre_archivo"><br>Nombre del archivo o carpeta<br><br></label>
                <input type="text" name="nombre"/>

                <br><br>

                <button type="submit"> Aceptar </button>
            </form>';
            
    }
    if($opcion=="renombrar")
    {
        echo "¿Que archivo o carpeta quieres renombrar ".$_SESSION["Usuario"]."?";
        echo "<p><br> ¿Archivo o carpeta? </p>
        <form class='form' action='./renombrar.php' method='post' enctype='multipart/form-data' target='_self'>
            <label for='tipo_archivo'><br>Archivo</label>
                <input type='radio' name='tipo_archivo' value='archivo'/>
            <br>
            <label for='tipo_archivo'><br>Carpeta</label>
                <input type='radio' name='tipo_archivo' value='carpeta'/>
            <br>    

        <label for='nombre_act'><br>Nombre actual:</label>
            <input type='text' name='nombre_act'/>

        <br>   

        <label for='nombre_new'><br>Nombre nuevo:</label>
            <input type='text' name='nombre_new'/>
            
        <br><br>

        <button type='submit'> Renombrar </button>
        </form>";
    }
    if($opcion=="eliminar")
    {
        echo "¿Que archivo o carpeta quieres eliminar ".$_SESSION["Usuario"]."?";
        echo "
        <form class='form' action='./eliminar.php' method='post' enctype='multipart/form-data' target='_self'>
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
    }
    ?>
</body>
</html>