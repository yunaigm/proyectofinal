<?php
    include_once ("conexfinal.php");
?>


<!DOCTYPE html>
    <head> <link rel ="stylesheet" href="./css/style.css"/> </head>
        
    <body>
        <!--Creem el formulari de registre-->
        <div class ="registerformu">
            <h1 id ="titulo"> Formulario de Registro </h1>
            <form action="registerform.php" method ="post" name="form3">
                <label for="nombrereg">Username:</label><br>
                <input type ="text" id="nombrereg" name="nombrereg" placeholder ="Nombre" />
                <br />
                <label for="apellidos">Apellidos:</label><br>
                <input type ="text" id="apellidos" name="apellidos"/>
                <br />
                <label for="birthday">Fecha de tu Cumpleaños:</label><br>
                <input type="date" id="birthday" name="birthday">
                <br />
                <label for="pronombre">Indica tu(s) pronombre(s):</label><br>
                <input type ="text" id ="pronombre" name="pronombre" />
                <br />
                <label for="contrasena">Contraseña:</label><br>
                <input type ="password" id ="contrasena" name="contrasena" />
                <br />
                <label for="email">Correo electrónico:</label><br>
                <input type="text" id="email" name="email">
                <br />
                <input type="submit" id ="regenviado" name="regenviado" value="Enviar" />

            
            </form>
        </div>


    </body>


</html>


<?php
#Vamos a enviar los datos del registro a la database.

   
    
    if (isset($_POST['regenviado'])){
        $q= "INSERT INTO `usuarios` (`nombrereg`, `apellidos`, `cumple`, `pronombre`, `contrasena`, `email`) VALUES ('".$_POST['nombrereg']."','".$_POST['apellidos']."','".$_POST['birthday']."','".$_POST['pronombre']."','".$_POST['contrasena']."','".$_POST['email']."')";
        $z=mysqli_query($conexion, $q);
        echo 'Registro completado correctamente';

    }


?>