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

    <link rel="stylesheet" href="./css/goodcss.css"/>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


</head>

<body>


    <!--Imprimim foto de perfil i nom-->

    <div class = "registerandlogin">
        <input type="button" name="login" id="login" onclick="location.href='login.php';" value="Login" />
        <input type="button" name ="register" id="register" onclick="location.href='registerform.php';" value="Registrarse" />
    </div>

   <?php
    function fotoinom($logged, $info){
        require("conexfinal.php");
        if($logged == "yes"){
            echo "<script type='text/javascript'>alert('VALE');</script>";
            $q = "SELECT * FROM `usuarios` WHERE `email` = '" . $info . "'";
            $z = mysqli_query($conexion, $q);

            if ($z && mysqli_num_rows($z) > 0) {
            $row = mysqli_fetch_assoc($z);
            echo $row['email'];
            echo "<script type='text/javascript'>alert('Logrado');</script>";
            } else {
            echo "No results found";
            }



        }


    }
    ?>



    <div class="containerimagen">
    <img src="fondo.jpg" alt="Imagen de fondo">
    <div class="contenido">
      <!-- Aquí agregarías el contenido de tu página -->
    </div>
    </div>


	<div class ="default-header-color">
    	<img src="./img/header-color.png">
	</div>

	<div class = "logo">
    	<img src="./img/logo.png">
    	<div class="header-links">
        	<ul class="lhorizontal">
          	<li class="home">
            	<a href="home.index" class="ehome">Home   </a>
          	</li>
          	<li class="otras_noticias">
            	<a href="home.index" class="ehome">Otras noticias</a>
          	</li>
        	<!--Suscribirse a la newsletter-->
          	<li class="newsletter">
          	<a href="newsletter.php" class="ehome">Newsletter</a>
        	</li>
          	<li class "example">
          	<a href="home.index" class="ehome">Example </a>
        	</li>
        	</ul>
    	</div>
	</div>

	<div class="laterali">
    	<img src="./img/laterales.PNG">
	</div>




	<div class="mandalorian">
    	<h4 class="newstitle">  ¿Cuándo se estrena el próximo capítulo de Kimetsu no Yaiba? Este es el calendario para la temporada 3 del anime  </h4>
    	<img src="./img/tanjiro2.jpg">
	</div>

	<div class="bodytext">

    	<h1> Después de un año de ausencia y espera que se ha hecho eterna, Kimetsu no Yaiba está de vuelta con su tercera temporada. Esta nueva parte contará todo el arco de la Aldea del Herrero, lugar que Tanjiro tendrá que visitar para poder arreglar su espada tras la pelea gigantesca contra las dos sextas lunas superiores, Deki y Gyutaro.

El Pilar de la Niebla, Muichiro Tokito, y el Pilar del Amor, Mitsuri Kanroji, acompañarán al cazador de demonios esta temporada del anime para evitar que lo pase mal, por lo que veremos al fin el poder de otros dos pilares bastante poderosos.

        	<br>
        	</br>
       	</h1>
    	<div class = "mandoimg">
        	<img src = "./img/kimetsu.jpg" alt="manda"> </src>
    	</div>

    	<h1>El pasado 9 de abril se estrenó el primer capítulo en exclusiva a través de Crunchyroll, con un especial de una hora repleto de momentos muy importantes para el futuro de la trama. Aún así, queda mucha tela por cortar y estamos ansiosos por saber lo que le deparará a Tanjiro y su tropa de compañeros esta temporada.

Y para que puedas disfrutar del anime sin problemas para no perderte ni un capítulo, desde 3DJuegos os ofrecemos a continuación el calendario que seguirá Ufotable para ir sacando los 10 capítulos restantes de esta tercera temporada. Estarán tachados los capítulos que ya han salido, remarcado el capítulo actual, y sin remarcar los capítulos que no han salido aún. Obviamente, las fechas están sujetas a cambios.
         	<br>
        	</br>
         	<br>
         	<table>
     	<tr>
       	<th>CAPÍTULOS</th>
       	<th>FECHA DE SALIDA</th>

     	</tr>
     	<tr>
       	<td class="overlined">CAPÍTLUO 1</td>
       	<td>Domingo 9 de abril de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 2</td>
       	<td>Domingo 16 de abril de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 3</td>
       	<td>Domingo 23 de abril de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 4</td>
       	<td>Domingo 30 de abril de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 5</td>
       	<td>Domingo 7 de mayo de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 6</td>
       	<td>Domingo 14 de mayo de 2023</td>
    	</tr>
    	<tr>
       	<td>CAPÍTULO 7</td>
       	<td> Domingo 21 de mayo de 2023 </td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 8</td>
       	<td>Domingo 28 de mayo de 2023</td>

     	</tr>
     	<tr>
       	<td>CAPÍTLUO 9</td>
       	<td>Domingo 4 de junio de 2023</td>
     	</tr>
     	<tr>
       	<td>CAPÍTULO 10</td>
       	<td> Domingo 11 de junio de 2023 </td>
     	</tr>
     	<tr>
       	<td>CAPÍTLUO 11</td>
       	<td>Domingo 18 de junio de 2023</td>
     	</tr>
     	<tr>
       	<td>CAPÍTLUO 12</td>
       	<td>Domingo 14 de mayo de 2023</td>
     	</tr>
    	<tr>
       	<td>CAPÍTULO 13</td>
       	<td> Domingo 14 de mayo de 2023 </td>
     	</tr>
   	</table>



    	</h1>

    	<div class="laterald">
        	<img src="./img/laterales.PNG">
    	</div>

      <div class="commentinput">
      <form action="mandalorian.php" method="post" name="form1">
          <h1 id="texto"> Añadir un comentario anónimo 💬 </h1>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
          <input type="text" name="comment-box" id="comment-box" placeholder="Enter comment" />
          <input type="submit" name="posting" id="posting" value="Enviar" />
      </form>
      </div>
	</div>



    <!--Caja de comentarios-->



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




    <footer>
    <div class="container">
  	<div class="row">
    	<div class="col-md-4">
      	<h3>Contacto</h3>
      	<p><i class="fa fa-envelope"></i> correo@ejemplo.com</p>
      	<p><i class="fa fa-phone"></i> +1234567890</p>
      	<p><i class="fa fa-map-marker"></i> Dirección física</p>
    	</div>
    	<div class="col-md-4">
      	<h3>Enlaces importantes</h3>
      	<ul>
        	<li><a href="#">HOME</a></li>
        	<li><a href="#">Acerca de nosotros</a></li>
        	<li><a href="#">Contacto</a></li>
      	</ul>
    	</div>
    	<div class="col-md-4">
      	<h3>Redes sociales</h3>
      	<ul>
        	<li><a href="#">
          	<img src="./img/twitter.png" alt="twitter" class="fa-twitter">
        	</i></a></li>
        	<li><a href="https://www.instagram.com/jujutsu.news/">
          	<img src="./img/insta.png" alt="instagram" class="fa-instagram">
        	</a></li>
      	</ul>
    	</div>
  	</div>
  	<div class="row">
    	<div class="col-md-12">
      	<p class="text-center">&copy; 2023 - Todos los derechos reservados</p>
    	</div>
  	</div>
    </div>
  </footer>

</body>



</html>


