
<?php
include_once("correo.php");








?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/mailcss.css">

    <title>
    </title>

</head>

<body>
    <div id="email">
        <form method="post">
            <input type="text" placeholder="Nombre" name="name" required="">
            <input type="email" placeholder="Correo" name="email" required="">
            <input type="text" placeholder="Asunto" name="asunto" required="">
            <textarea placeholder="Escribe aqui tu mensaje.." name="msg"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        
        </form>
    </div>





</body>

</html>


