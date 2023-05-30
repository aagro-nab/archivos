<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\statics\styles\archivos.css">
    <title>Escoger Tipo de Archivo</title>
</head>
<body>
    <?php
        $usuario = "Julieta";
        echo "<div class=\"subtitulo\"> Especifica que archivo vas a crear, ".$usuario."</div>";
    ?>
        <section class="cuerpo"> 
            
            <div class="formulario"><p> ¿Archivo o carpeta? </p>
            <form class="form" action="./crear_archivo.php" method="post" enctype="multipart/form-data" target="_self">

                <div class = "opciones">
                    <div class = "opcion">
                        <div> <label for="tipo_archivo">Archivo</label> </div>
                        <div> <input type="radio" name="tipo_archivo" value="archivo"/> </div>
                    </div>
                    
                    <div class = "opcion">
                        <div> <label for="tipo_archivo">Carpeta</label> </div>
                        <div> <input type="radio" name="tipo_archivo" value="carpeta"/> </div>
                    </div>
                </div>

                <label for="nombre_archivo"><p>Nombre del archivo o carpeta</p></label>
                <div class = "opciones"> <input type="text" name="nombre"/> </div>

                <br><br>

                <div class = "opciones"> <button type="submit"> Aceptar </div>
            </form></div>
        </section>
</body>
</html>