<?php
    include_once ("conexfinal.php");
?>


<!DOCTYPE html>
    <head> <link rel ="stylesheet" href="./css/style.css"/> </head>
        
    <body>
        <!--Creem el formulari de registre-->
        <div class ="registerformu">
            <h1 id ="titulo"> Inicio de sesión </h1>
            <form action="registerform.php" method ="post" name="form3">
                <label for="email">Indica tu correo electrónico:</label><br>
                <br />
                <input type="text" id="email" name="email">
                <br />
                <br />
                <label for="contrasena">Indica tu contraseña:</label><br>
                <br />
                <input type ="password" id ="contrasena" name="contrasena" />
                <br />
                <br />
                <input type="submit" id ="logenviado" name="regenviado" value="Enviar" />
             
            
            </form>
        </div>


    </body>


</html>


<?php
#Vamos a obtener los datos de la database para ver si haya algun correo y contraseña que coincidan con el especificado.
    if(isset($_POST['logenviado']))
    $q = "SELECT * FROM `usuarios` WHERE `email` = '" . $_POST['email'] . "' AND `contrasena` = '" . $_POST['contrasena'] . "'";
    
    if (mysqli_num_rows($q) == 0) {
           

            if($q
        }

    


?>