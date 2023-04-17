
<?php
    #Hacemos la conexion
    #include_once('conexBDyunai.php'); 


    $url = "newsletter.css";
    echo "<link rel='stylesheet' href='{$url}'>";
?>



<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="newsletter.css">
</head>

<!--Headers de la pagina por defecto-->
<body>
    <div class ="default-header-color">
            <img src="./img/header-color.png">
        </div>
        
        <div class = "logo">
            <img src="./img/logo.png">
        </div>

        <div class="laterales">
            <img src="./img/laterales.PNG">
        </div>
    </div>

    <div class="header-links">
        <br>
        <a href="home.index">Home </a>
        <br>
        <br>
        <a href="home.index">Otras noticias</a> 
        <br>
        <br>
        <!--Suscribirse a la newsletter-->
        <a href="newsletter.php">Newsletter</a>
        <br>
        <br>
        <a href="home.index">Example </a>
        <br>
    </div>





<!--------------------------------------------------------------->


<!--Hacemos el formulario-->

    <div class = "formu">
        <h1> Suscríbete a nuestra newsletter! </h1>
        <form action="insertar.php" method="post" name="form1">
            <table border = "1">
                <tr>
                    <td>Nombre</td><td><input name='name' type='varchar' value = " " required/> </td>
                </tr>
                <tr>
                    <td>Correo electronico</td><td><input name='address' type= 'varchar' value=" " required/> </td>
                </tr>
            </table>
            <input name="enviat" type="hidden" value="1" />
            <input name="enviar" type="submit" value="inserir" />
            <input name="Enviar" type="reset" value="reset" />
        </form>            
    <div> 


    <div class = "imagenbbyd">
        <img src = "img/Baby-Yoda-Transparent-Images-PNG.png">
    </div>
    <div class = "imagenjett">
        <img src = "img/vc0h1votsdv41.png.webp">
    </div>

</body>

