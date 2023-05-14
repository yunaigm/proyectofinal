<?php
require("conexfinal.php");


  if (isset($_POST["posting"])) {
    # Inyeccion de comentarios en la database
    $querysend = "INSERT INTO `comentarios` (`nombre`, `comentario`) VALUES ('".$_POST['nombre']."','".$_POST['comment-box']."')";
    $z = mysqli_query($conexion, $querysend);

    # Redireccionar a la misma pagina despues de enviar el comentario
    header("Location: mario.php");
    exit();
  }






?>







<!DOCTYPE html>
<head>

    <link rel="stylesheet" href="./css/mariocss.css"/>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


</head>

<body>


    <!--Imprimim foto de perfil i nom-->

    <div class = "registerandlogin">
        <input type="button" name="login" id="login" onclick="location.href='loginmario.php';" value="Login" />
        <input type="button" name ="register" id="register" onclick="location.href='registerform.php';" value="Registrarse" />
    </div>

	<div id="output-container">
		<?php
			function fotoinombo($logged, $info){
				require("conexfinal.php");
				if($logged == "yes"){
					$q = "SELECT * FROM `usuarios` WHERE `email` = '" . $info . "'";
					$z = mysqli_query($conexion, $q);

					if ($z && mysqli_num_rows($z) > 0) {
					$row = mysqli_fetch_assoc($z);
					echo $row['email'];
					} else {
					echo "No results found";
					}



				}


			}
			?>

	</div>


    <div class="containerimagen">
    <img src="fondo.jpg" alt="Imagen de fondo">
    <div class="contenido">
      <!-- Aquí agregarías el contenido de tu página -->
    </div>
    </div>


	<div class ="default-header-color">
    	<img src="./img/header-color.png">
	</div>

	<div class="containerimagen">
    <img src="fondo.jpg" alt="Imagen de fondo">
    <div class="contenido">
      <!-- Aquí agregarías el contenido de tu página -->
    </div>
    </div>





<div class="logo">
    <img src="./img/logo.png">
    <div class="header-links">
        <ul class="lhorizontal">
            <li class="home">
                <a href="home.index" class="ehome">Home</a>
            </li>
            <li class="otras_noticias">
                <a href="home.index" class="ehome">Otras noticias</a>
            </li>
            <!--Suscribirse a la newsletter-->
            <li class="newsletter">
                <a href="newsletter.php" class="ehome">Newsletter</a>
            </li>
            <li class="contactar">
                <a href="../sendemail/index.php" class="ehome">Contacto</a>
            </li>
        </ul>
    </div>
</div>


	<div class="laterali">
    	<img src="./img/laterales.PNG">
	</div>




	<div class="mandalorian">
    	<h4 class="newstitlemario">  Super Mario Bros, de videojuego legendario a película del año </h4>
    	<img src="./img/mariopr.jpg">
	</div>

	<div class="bodytext">

    	<h1> Nintendo ha presentado estos días el balance de resultados del último trimestre. En la ronda de preguntas con los accionistas, ha hecho un balance muy positivo de la recaudación de Super Mario Bros La Película, y confirmó que habrá más películas de Nintendo Pictures.
        <br>
        	</br>
        Las ventas de la consola Nintendo Switch han caído un 21%, algo normal teniendo en cuenta que ya tiene 6 años de vida, y su hardware se está quedando muy anticuado. Sería interesante saber si en este descenso ha tenido algo que ver la Steam Deck y similares, bastante más potentes.
        <br></br>Para compensar, Nintendo ha encontrado una nueva mina de oro sin explotar: el cine. La primera película de su estudio Nintendo Pictures (en colaboración con Illumination), Super Mario Bros La Película, ha sido un inmenso éxito. </h1>
        <div class = "mandoimg">
          	<img src = "./img/mariogalactico.jpg" alt="manda"> </src>
      	</div>
      <h2 class="indice">Nintendo opina sobre la película </h2>

        <div class="indicecontenido">
          <h1> Ya lleva recaudados 1.175 millones de dólares en poco más de un mes. Es la película más taquillera del año, doblando a la segunda, la adaptación de un videojuego más exitosa, y la quinta película de animación que más ha recaudado de la historia. El podio está <span class="subrayar">menos de 100 millones de dólares.</span>
          <br></br>Además aún le queda por ganar unos cuantos cientos de millones con los derechos de su emisión en streaming, ventas en formatos físicos, etc.</h1>
          <h1> Como decíamos al principio, Nintendo ha hablado sobre la película en la junta de accionistas. Poco, pero algo ha dicho. En concreto, que Super Mario Bros La Película ha sido <span class="exito">"un éxito absoluto".</span>

            <br></br><h1 class="separac">También confirmó que Nintendo Pictures producirá más películas sobre las franquicias de Nintendo en el futuro. ¿Alguien lo dudaba?
              La película de Mario Bros también ha logrado hacerse con el mejor estreno de una película de videojuegos, superando a “Warcraft” (2016) y el más exitoso del año, por encima de “Ant-Man and The Wasp: Quantumania”.

              Además, es también el mejor estreno de la compañía Illumination arrebatándole el puesto a “Despicable Me 2” (2013), y ha superado la recaudación de sagas de renombre como “Jurassic World Dominion” o “Fast and Furious 9”.
            </h1>

        </div>
      </ol>

      <div class="hist">
        <br></br><h1>Del arcade a la pantalla</h1>
       </div>
       <div class = "img64">
           <img src = "./img/mario64.jpg" alt="manda"> </src>
       </div>
        <h1 class="subt"> Pero la historia de Super Mario se remonta a muchos años atrás. Y es que Nintendo ya ha vendido más de 825 millones de copias de videojuegos protagonizados por el fontanero italiano.


Todo empezó el siglo pasado. Mario Bros fue creado por el legendario diseñador de videojuegos japonés, Shigeru Miyamoto. Inicialmente, era conocido como “Jumpman” y su primera aparición fue en el juego “Donkey Kong” en 1981.

<br></br> Un par de años después tuvo su propio juego, “Mario Bros” que salió primero para arcade en 1983 y poco más tarde para la consola Nintendo Entertainment System (NES), cosechando una gran acogida.


Sin embargo, fue con el lanzamiento de “Super Mario Bros” en 1985 cuando Mario se convirtió en todo un fenómeno. Solo este título ya ha vendido más de 40 millones de copias. No es el más exitoso de la saga (ese fue “Mario Kart 8” con 60 millones) pero sí el que catapultó la leyenda.

<br></br>Desde entonces, ha protagonizado una gran cantidad de juegos en diversas consolas de Nintendo, como “Super Mario World”, “Super Mario Land”, “Super Mario World”, “Super Mario 64”, “Super Mario Sunshine”, “Super Mario Galaxy” y muchos otros.</h1>


      <div class="expect">
      <strong>Más alla de las expectativas</strong>

    </div>
      <h1> “Tenía ciertas expectativas de que a esta película le fuera bien, pero estoy muy sorprendido porque ha ido allá de lo que podría haber imaginado cuando se estrenó”, dijo a la prensa nipona Shigeru Miyamoto, el creador de Super Mario.

Eso sí, Miyamoto también cree que “hace falta algo de suerte para que una película alcance un éxito de este calibre”. Y más, teniendo en cuenta que la crítica no había apostado por el filme: Apenas lograba el aprobado en Rotten Tomatoes con un 55% y se quedaba a las puertas de lograrlo con un 47% en Metacritic.

<br></br>“Aunque muchos críticos extranjeros puntuaron la cinta con calificaciones relativamente bajas, creo que esto también ha contribuido a la notoriedad y el revuelo en torno a ella”, ha expresado al respecto Miyamoto.

Chris Pratt, actor que da vida al protagonista y al que no le importaría volver a encarnarlo, explicó a The Gamer que “Mario es parte de todas nuestras infancias”. Por ello, dijo: “si alguien metiera la pata con Mario, yo también estaría muy enojado”.

<br></br>“Estoy agradecido de formar parte del equipo tras este proyecto y orgulloso de decir que no lo arruinamos”, dijo. En cuanto a Charlie Dalie, que puso voz a Luigi, también cree que “hicieron un gran trabajo”.
Mientras esperan a saber si habrá o no nuevas películas sobre Mario, pueden volver a escuchar “Peaches”, la canción que en voz de Jack Black interpreta el malvado Bowser en la película, y que se ha vuelto viral: ya saben, si tienen la estrella, no habrá error.
Por Nora Cifuentes.
<div class = "final">
    <img src = "./img/mariofinal.jpg" alt="manda"> </src>
</div>
</h1>

  </h1>
    	<div class="laterald">
        	<img src="./img/laterales.PNG">
    	</div>

      <div class="commentinput">
      <form action="mario.php" method="post" name="form1">
          <h1 id="texto"> Añadir un comentario anónimo 💬 </h1>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
          <input type="text" name="comment-box" id="comment-box" placeholder="Enter comment" />
          <input type="submit" name="posting" id="posting" value="Enviar" />
      </form>
	  </div>




    <!--Caja de comentarios-->



    <!--Impresion de comentarios en la pagina-->
	<div class="printcom">
    <?php
        $query = "SELECT * FROM `comentarios` ";
        $ejecucion = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($ejecucion)) {
            print '<p style="color: black; font-weight: bolder; font-size: 20px;">' .$row['nombre'];

            print '<p style="color: black; font-weight: normal; font-size: 13px">' .$row['comentario'];
            print "<br> </br>";
        }

       

        include("functions.php");

        mysqli_close($conexion);
    ?>
</div>




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