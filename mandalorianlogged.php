<?php
require("conexfinal.php");


  if (isset($_POST["posting"])) {
    # Inyeccion de comentarios en la database
    $querysend = "INSERT INTO `comentarios` (`nombre`, `comentario`) VALUES ('".$_POST['nombre']."','".$_POST['comment-box']."')";
    $z = mysqli_query($conexion, $querysend);

    # Redireccionar a la misma pagina despues de enviar el comentario
    header("Location: mandalorian.php");
    exit();
  }





?>




<!DOCTYPE html>
<head>
    
    <link rel="stylesheet" href="./css/style.css"/>
    

</head>

<body>
    <?php
        function fotoinombo($logged, $info){
            require("conexfinal.php");
            if($logged == "yes"){
                $q = "SELECT * FROM `usuarios` WHERE `email` = '" . $info . "'";
                
                $z = mysqli_query($conexion, $q);
                if ($z && mysqli_num_rows($z) > 0) {
                $row = mysqli_fetch_assoc($z);
                echo "ID: " . $row['email'] . "<br>";
                echo "<img src='" . $row['img'] . "' />";
                
                } else {
                echo "No results found";
                }



            }
            

        }

        ?>
    
    
  

    <!--Imprimim foto de perfil i nom-->    





    <div class = "registerandlogin">
        <input type="button" name="login" id="login" onclick="location.href='login.php';" value="Login" />
        <input type="button" name ="register" id="register" onclick="location.href='registerform.php';" value="Registrarse" />
    </div>
    
  
    <script>
            document.getElementById("register").style.visibility = "hidden";
            document.getElementById("login").style.visibility = "hidden";
    </script>








    <div class ="default-header-color">
        <img src="./img/header-color.png">
    </div>
    
    <div class = "logo">
        <img src="./img/logo.png">
    </div>

    <div class="laterales">
        <img src="./img/laterales.PNG">
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


    <div class="mandalorian">
        <h4 class="newstitle"> El primer tráiler de la temporada 3 de 'The Mandalorian' viaja a Mandalore, amplia el alcance de la serie y revela fecha </h4>
        <img src="./img/the-mandalorian-tv-4k-0b-2560x1080.jpg">
    </div>

    <div class="bodytext">

        <h1>En esta nueva temporada, y por lo que revela este primer avance, tenemos a unos Din Djarin (Pedro Pascal) y Grogu como viajeros estelares que los llevará a Mandalore y a la ya conocida capital galáctica Coriscant. Vemos también a un grupo de Jedis tradicionales y a criaturas que parecen ser de la misma raza que el recordado Babu Frik. Y, por supuesto, a Grogu demostrando que gracias a la Fuerza, su tamaño no es algo que se deba subestimar.
            <br>
            </br>
            En esta nueva temporada, y por lo que revela este primer avance, tenemos a unos Din Djarin (Pedro Pascal) y Grogu como viajeros estelares que los llevará a Mandalore y a la ya conocida capital galáctica Coriscant. Vemos también a un grupo de Jedis tradicionales y a criaturas que parecen ser de la misma raza que el recordado Babu Frik. Y, por supuesto, a Grogu demostrando que gracias a la Fuerza, su tamaño no es algo que se deba subestimar.
            Jon Favreau ha destacado de esta nueva temporada la importancia de su desarrollo argumental, y sin duda parece que así será, una vez dejada atrás de forma definitiva la estructura casi episódica de sus primeros episodios.   
        </h1>
        <div class = "mandoimg">
            <img src = "./img/baby-yoda-1578436356.png" alt="manda"> </src>
        </div>

        <h1>
            También parece que conoceremos en profundidad a la sociedad mandaloriana, desde las posiciones más integristas a los más tolerantes. "Ser un mandaloriano no es solo aprender a pelear" dice el personaje de Pedro Pascal, y parece que ahondaremos en esa filosofía.
            Entre los directores que tiene esta nueva temporada destaca Lee Isaac Chung, cineasta que estuvo nominado este año al Oscar por 'Minari'. A él se suman Rick Famuyiwa, Rachel Morrison, Carl Weathers, Peter Ramsey y Bryce Dallas Howard, actriz que ya ha despuntado como directora en algunos de los episodios más notorios 'El libro de Boba Fett', donde reaparecía Din Djarin.
            <br>
            </br>
            En su relativamente corta vida, 'The Mandalorian' ha dado ya unos cuantos tumbos: arrancó con una primera temporada que sorprendió por funcionar de forma absolutamente ajena al laberinto de continuidades de 'Star Wars'. Sacaba buen partido, por supuesto, de la abundante mitología de la franquicia, sobre todo la que está vinculada en torno a Tatooine, pero respiraba a su propio ritmo.
            <br>
            La esencia de esa primera temporada era Grogu, a quien conocimos como Baby Yoda durante tanto tiempo. Su físico recordaba a uno de los personajes indiscutiblemente más memorables de la trilogía original, pero estaba dotado de una personalidad única, lo que que le convirtió a su vez en un icono por derecho propio. Y todo reforzado por un tono a medio camino entre el western desértico y las historias de espada y brujería de Robert E. Howard con el que la saga había experimentado puntualmente, pero que nunca había eclosionado con tan buen tino.


        </h1>

        
    </div>
     
    <!--Caja de comentarios-->
        
    <div class="commentinput">
    <form action="mandalorian.php" method="post" name="form1">
        <h1 id="texto"> Añadir un comentario 💬 </h1>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
        <input type="text" name="comment-box" id="comment-box" placeholder="Enter comment" />
        <input type="submit" name="posting" id="posting" value="Enviar" />
    </form>
    </div>

    <!--Impresion de comentarios en la pagina-->

    <?php
        $query = "SELECT * FROM `comentarios` ";
        $ejecucion = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($ejecucion)) {
            print '<p style="color: white; font-weight: bold;">' .$row ['nombre'] . ":" ;

            print '<p style="color: white; font-weight: normal;">' .$row ['comentario'];
            print "<br> </br>";
        }

        if($imprimirlog = true){
            echo'hola';
        }






        include("functions.php");

        mysqli_close($conexion);
    ?>
   
    

 

</body>



</html>