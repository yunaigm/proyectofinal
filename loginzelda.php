<?php
    include_once ("conexfinal.php");
?>


<!DOCTYPE html>
    <head> <link rel ="stylesheet" href="./css/logingoodcss.css"/> </head>
        
    <body id = "loginzelda">
        <!--Creem el formulari de registre-->
        <div id ="registerformu">
            <h1 id ="titulo"> Inicio de sesión </h1>
            <form action="loginzelda.php" method ="post" name="form3">
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
                <input type="submit" id ="logenviado" name="logenviado" value="Enviar" />
             
            
            </form>
        </div>


    </body>


</html>


<?php
#Vamos a obtener los datos de la database para ver si haya algun correo y contraseña que coincidan con el especificado.

 if(isset($_POST['logenviado'])){

    $q = "SELECT * FROM `usuarios` WHERE `email` = '" . $_POST['email'] . "' AND `contrasena` = '" . $_POST['contrasena'] . "'";
  
    $z= mysqli_query($conexion, $q);

    if (mysqli_num_rows($z) == 0) {

        echo 'El usuario o contraseña es incorrecto';

    }else{

        echo 'Logged succesfully';
    

        $info=$_POST['email'];

        $zz="yes";

        #Le pasamos a la página de logins el usuario logged y la confirmación del loggin.

        loginfc3($zz, $info);
    }
        

    exit(); 


    
}

      
function loginfc3($zz, $info){
    if($zz == "yes"){
        $msg="hola2";
        include("zelda.php");
        echo "<script> document.getElementById('registerformu').style.display = 'none'; </script>";
        
        echo '<script> document.getElementById("registerformu").style.visibility = "hidden"; </script>';
        echo '<script> document.getElementById("login").style.visibility = "hidden"; </script>';
        echo '<script> document.getElementById("register").style.visibility = "hidden"; </script>';
        echo '<script> document.getElementById("registerformu").style.display = "none"; </script>';


      
        fotoinombo($zz, $info);
       
    } else {
        $msg="hola3";
       
        echo ".";
    }
}

           
     






















  #  function redir($op){
   # #    if $op="yes"{
   #         header("Location: mandalorian.php");
   #     }
   #     else{
    #        echo "mal"
   #     }
   # }
#

?>