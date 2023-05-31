<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../statics/pagprindis.css">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Inicio de sesion</h1>
    <br>
    <br>
    <center><div id="ContForm">
        <br>
        <h2>Bienvenid@</h2>
        <br>
        <form action="./inicioses.php" method="post" target="_self" id="formu">
            <label  for="usu">Usuario:</label>
            <br>
                <input id="nomb" type="text" name="usu" required>
            <br>
            <br>
            <label for="casa">Casa:</label>
            <br>
                <select name="casa" id="casa">
                    <option value="Ajolotes">Ajolotes</option>
                    <option value="Halcones">Halcones</option>
                    <option value="Teporingos">Teporingos</option>
                </select>
            <br>
            <br>
            <br>
            <button type="submit" id="ben" >Enviar</button>
        </form>
    </div></center>
    <br>
    <h1 id="sub">Introduce tus datos</h1>
</body>
</html>