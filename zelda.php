<?php
require("conexfinal.php");


  if (isset($_POST["posting"])) {
    # Inyeccion de comentarios en la database
    $querysend = "INSERT INTO `comentarios` (`nombre`, `comentario`) VALUES ('".$_POST['nombre']."','".$_POST['comment-box']."')";
    $z = mysqli_query($conexion, $querysend);

    # Redireccionar a la misma pagina despues de enviar el comentario
    header("Location: kimetsu.php");
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
        <input type="button" name="login" id="login" onclick="location.href='loginzelda.php';" value="Login" />
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
          	<li class="contactar">
          	<a href="../sendemail/index.php" class="ehome">Contacto</a>
        	</li>
        	</ul>
    	</div>
	</div>

	<div class="lateralizelda">
    	<img src="./img/laterales.PNG">
	</div>




	<div class="mandalorian">
    	<h4 class="newstitle">  Guía The Legend of Zelda: Breath of the wild, trucos, consejos y secretos </h4>
    	<img src="./img/zelda.jpg">
	</div>

	<div class="bodytext">

    	<h1> Bienvenidos a la guía de The Legend of Zelda: Breath of the Wild, la nueva entrega una saga mítica con más de 30 años de historia, que en esta ocasión nos lleva hasta un gigantesco mundo abierto, uno de los más grandes que hemos visitado nunca en un videojuego.
        	<br>
        	</br>
          Para que la sensación sea de aventura total, a diferencia de la gran mayoría de juegos actuales en esta aventura no te llevan de la mano, no hay demasiadas indicaciones, consejos o tutoriales, por lo que creemos que esta guía es más útil y necesaria que de costumbre.
       	</h1>

      <h2 class="indice">Índice </h2>
        <div class="indicecontenido">
          <br>
          1.
          <a href="#Historia_y_misiones_principales">Historia y misiones principales</a>
        </br>
          <br>
            2.
          <a href="#misiones_secundarias">Misiones secundarias</a>
          </br>
          <br>
            3.
          <a href="#consejos_y_trucos">Consejos y trucos básicos para principiantes</a>
          </br>
          <br>
            4.
          <a href="#controles">Los controles</a>
          </br>
          <br>
            5.
          <a href="#combate_defensa_y_sigilo">Combate, Defensa y Sigilo</a>
          </br>
          <br>
            6.
          <a href="#espada_maestra">Conseguir espada maestra</a>
          </br>


        </div>
      </ol>
    	<div class = "mandoimg">
        	<img src = "./img/zeldas1.jpg" alt="manda"> </src>
    	</div>
      <div class="hist">
        <strong>Historia y misiones principales<strong>
    	   <a name="Historia_y_misiones_principales"></a>
    </div>
        <h1 class="subt"> El reino de Hyrule vuelve a encontrarse bajo el terror del poderoso Ganon. Link, el protagonista de la historia, será el encargado de derrotarle una vez más para salvar al reino y la princesa Zelda. Te contamos paso a paso cómo progresar por el modo principal.</h1>
        <h1 class="masalla"> <strong>Más allá de la meseta:</strong> El anciano con el que habías hablado ha resultado ser el rey Rhoam; y paraece que la hermosa voz que escuchaste era la de la princesa Zelda. Todo apunta a que sigue atrapada dentro del castillo, luchando contra Ganon. El rey te ha pedido que venzas a Ganon y rescates a la princesa. Acto seguido, te ha dado la paravela y se ha desvanecido. </h1>

        <h1 class="impa"> <strong>Habla con Impa:</strong> Impa, la actual líder de la aldea Kakariko, te ha contado lo que ocurrió hace cien años y te ha transmitido un mensaje de la princesa Zelda: Libera a las cuatro bestias divinas. Además, resulta que la piedra sheikah que posees está incompleta. Visita el laboratorio de la aldea Hatelia para que te la arreglen.</h1>
        <h1 class="bestias"> <strong> Las cuatro bestias divinas:</strong> En esta misión principal comienza nuestra búsqueda de las cuatro razas y sus cuatro bestias. Esta misión se consigue de forma automática tras hablar con Impa durante la misión principal Habla con Impa. En esta misión el objetivo es derrotar a las cuatro bestias divinas, cada una de ellas en una de las cuatro principales tribus del juego.
        <h1> <strong> Los recuerdos perdidos</strong> Has informado a Impa de que has reparado la piedra sheikah y le has preguntado sobre las fotos del álbum. Parece que las hizo Zelda hace cien años. Impa cree que, si visitas los lugares que figuran en ellas, podrás recuperar tus recuerdos.

        <h1> <strong> Misión de infiltración:</strong> Has oído el rumor de que un hombre consiguió entrar en la Ciudadela Gerudo. Debería de estar por el bazar Sekken. Habla con la gente por si alguien lo ha visto.
        <h1><strong> Vah Rudania, bestia divina de fuego:</strong>  Gorobu, el jefe de Ciudad Goron, quiere poner freno a la terrible bestia divina Vah Rudania, pero sus dolores de espalda se lo impiden.
        <h1><strong>Derrota a Ganon:</strong> La misión final del juego, que nos proponen nada más comenzar. El fantasma del rey Rhoam te ha dicho que su reino está a punto de desaparecer.

      <div class="hist">
      Misiones Secundarias
      <a name="misiones_secundarias"></a>
    </div>
      <h1> Hay varias decenas de misiones secundarias distribuidas por zonas. Te mostramos cuáles son: <br></br>

Necluda: Los cucos perdidos, Las recetas de Koko, Las recetas de Koko 2, Las recetas de Koko 3, Las recetas de Koko 4, Jugando con Rika, Una petición fogosa, Mejora la piedra sheikah, Sensor sheikah y cámara, Habla con Rotver, El tesoro de Nambod, Hogar, dulce hogar, La estatua maligna, El joven entusiasta, Los deseos del ser amado, Las maracas de Obab, El récord del domador, A la luz de las luciérnagas, Ladrones de ovejas, El tesoro del héroe, Expansión inmobiliaria.
<br></br>Lanayru: Un tesoro sumergido, Carta en una botella, Colección de gemas, La lluvia llama a la rana, La belleza definitiva, En busca del centaleón, A la caza del gigante, Un mar de lágrimas, Los monumentos zora.
<br></br>Farone: La cena de hoy, Un tesoro bajo el mar, La playa invadida, Un amor sigiloso, ¡Rayos!, ¡A por los gamberros! y Captura al caballo gigante.
<div class="secundaria">
  <img src="./img/secundaria.jpg"> </src>
</div>
<br></br>Gerudo: ¡Véndeme tu caballo!, Setas a raudales, Los desaparecidos, Elixir contra el calor, La octava heroína, La espada olvidada, Una piedra muy apreciada, Un club muy secreto, A por el moldora, El orgullo de la tribu, Falta de riego, En busca de Byrta.

<br></br>Hebra: Una ofrenda para el hada, Un remedio contra el frío, Manzanas para los males, Luna de miel amarga, ¡Busca a Kumeli!, A por el glaciarok, El caballo tímido.
<br></br>Gran Bosque de Hyrule: Vuela alto, globito, Los fósiles de ballenas, El poder del hielo, Las pruebas Kolog, El conejo legendario, Acertijos sobre Hyrule.
<br></br>Eldin: Misión a prueba de fuego, Cuestión de respeto, El secreto de la montaña, Un negocio redondo.
<br></br>Akkala: Amor de madre, Caprichos de nuevo rico, Todo por mi hermanita, Un individuo sospechoso.
<br></br>Centro de Hyrule: La cruda realidad, A por el caballo blanco, ¡Mi héroe!, Recetas de la realeza, Las armas secretas </h1>

         	<br>
  <div class="hist">
  Consejos y trucos básicos para principiantes
  <a name="consejos_y_trucos"></a>
  </div>

<h1>
  A pesar de que el juego te invita a explorar y perderte por su mundo, te recomendamos que en los primeros minutos sigas la historia, hasta llegar a la primera aldea, y allí si activen los cuatro objetivos principales. Una vez superado este trámite, siéntete libre de disfrutar de su enorme mundo abierto.
<br></br>Observa el entorno con atención; unas piedras en el suelo formando un círculo, un brillo en lo alto de un arco, un jarrón dentro de un árbol, o cualquier elemento colocado sospechosamente en el escenario puede esconder un kolog. Estas criaturas nos premian con unas semillas que son necesarias para ampliar nuestro inventario y así poder llevar más objetos. Para conocer más detalles de los kolog, visita la sección de la guía 'Los kolog ocultos: necesarios para ampliar el inventario'.
<br></br>Aprende a utilizar cuanto antes el movimiento Carrera frenética, que se realiza esquivando en el momento oportuno, y nos permite realizar una serie de golpes letales a cámara lenta. Es una acción muy exigente y difícil de dominar, pero merece la pena, ya que nos permitirá enfrentarnos a los enemigos más duro con garantías. Para conocer más detalles de este movimiento, visita la sección de la guía 'El combate').
<br></br>Recoge todos los recursos que te encuentres a tu paso, ya sean ingredientes de la naturaleza, cazando animales o derrotando enemigos. Con estos se pueden elaborar todo tipo de platos de comida y elixires, que vas a necesitar en muchas situaciones.
<br></br>Supera todos los santuarios que puedas (hay 120), ya que de esta manera consigues los símbolos de valía, y con cuatro de ellos puedes mejorar la salud o la resistencia.
<br></br>Si entras en un santuario y te quedas atascado y no eres capaz de superarlo no te preocupes, una vez que has entrado ya has activado un punto de viaje rápido, y podrás volver en cualquier momento.
</h1>

  <iframe width="560" height="315" src="https://www.youtube.com/embed/268n8-4JUos" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<div class="hist">
  Los controles
<a name="controles"></a>
</div>

<h1> El siguiente esquema de controles es válido tanto para la versión de Switch como la de Wii U.<h1>
  <div class="controles">
    <img src="./img/controles.jpg"> </src>
  </div>
  <ol class="listacon">
    <li>Stick izquierdo: mover a Link, desplazarte por los menús.</li>
<li>Stick derecho: controla la cámara y moverte por las páginas de los menús.</li>
<li>Apretar stick izquierdo: agacharse.</li>
<li>Cruceta: sirve para seleccionar el arma, escudo, flecha o módulo, manteniendo pulsado una dirección y seleccionando con el stick derecho. Si apretamos a bajo, silbas para llamar a tu caballo.</li>
<li>B: Mantenlo pulsado para esprintar. Enfundar tu arma actual o guardar la paravela. Cancelar los ataques cargados o cuando vas a lanzar una flecha.</li>
<li>Y: atacar con el arma. Mantenlo pulsado para hacer un ataque cargado.</li>
<li>R: empuñar el arma cuerpo a cuerpo que tengas seleccionada. Mantenlo pulsado para apuntar, y suéltalo para lanzar el arma. También sirve para lanzar otros objetos, como rocas o bombas.</li>
<li>ZR: sacar el arco. Mantenlo pulsado para apuntar y cargar, y suelta para disparar.</li>
<li>ZL: alinear la cámara en la dirección que está mirando Link. Mantenlo pulsado para fijar un objetivo cercano y empuñar el escudo. Pulsa varias veces para cambiar de objetivo si hay varios blancos disponibles.</li>
<li>Menos (-): muestra la piedra sheikah, donde puedes consultar el mapa.</li>
</ol>

<div class="hist">
  Combate, defensa y sigilo
<a name="combate_defensa_y_sigilo"></a>
</div>


<h1>Los combates en Breath of the Wild son más elaborados que en anteriores entregas de la saga, y conviene aprender rápidamente unas nociones básicas.</h1>
<p class="ataque"> Combate</p>
<h1><br></br>Fijar/centrar enemigos: puedes fijar un objetivo al que estés mirando pulsando ZL, así moverte a su alrededor con comodidad. Para cambiar entre varios objetivos, pulsa ZL consecutivamente. Los objetivos marcados quedan señalizado con una flecha roja.
<br></br>Ataques y combos cuerpo a cuerpo: las ataques normales se realizan pulsando Y. Cada vez que pulses el botón realizarás un ataque, aunque también puedes pulsarlo rápidamente varias veces para realizar un combo.
<br></br>Ataques cargados: mantén pulsado Y para iniciar un ataque cargado, que se realizará cuando sueltes el botón. El proceso de carga agota tu medidor de resistencia, una vez se haya agotado realizarás el ataque, aunque no hayas soltado el botón. El proceso de carga se puede cancelar pulsando el botón B.
<br></br>El tipo de ataque de cargado depende del arma que estés utilizando. Con armas a una mano, realizarás un ataque giratorio de 360 grados. Con las armas a dos manos, Link empezará a dar vueltas y golpear a los objetivos varias veces, hasta asestar un golpe final sobre el suelo.
<br></br>Ataque en salto: si pulsas el botón de ataque cuando Link está en el aire a suficiente altura, se lanzará en picado y caerá de golpe, creando una onda expansiva proporcional a la distancia de la caída.
<br></br>Carrera frenética: si estás esquivando con el botón ZL pulsado, y un momento antes de que te vayan a golpear saltas hacia un lado o hacia atrás, activarás carrera frenética, una acción a cámara lenta que te permite asestar una serie de golpes especialmente potentes. Un movimiento muy importante de dominar para hacer frente a los enemigos más duros del juego.
<br></br>Guardia perfecta: mientras tienes desenfundado el escudo encarando a un enemigo con ZL, si pulsas el botón A en el momento oportuno, justo cuando te van a golpear, rechazarás el golpe, y el enemigo se tambaleará, quedando vulnerable durante unos segundos.
<br></br>Ataques con arco: para disparar una flecha mantén pulsado ZR, apunta al enemigo u objetivo y suéltalo. Cuando vayas a disparar a blancos lejanos tienes que tener en cuenta la caída de la flecha, apuntando por encima del blanco. Los disparos en la cabeza realizan daño crítico en los enemigos, y sirven para eliminar a la mayoría de animales a la primera. Si cuando estás en el aire a una altura considerable pulsas el botón ZR para desenfundar el arco, se activará una cámara lenta, que te <br></br>permite apuntar con comodidad, aunque mientras tanto tu resistencia de agota a gran velocidad.
<br></br>Lanzar armas: puedes lanzar cualquier arma cuerpo a cuerpo manteniendo pulsado R y después soltándolo. Si aciertas a tus enemigos siempre realizas daño crítico de esta manera, por lo que cuando un arma está a punto de romperse, lanzarla puede ser un buen uso.</h1>
<br></br> <p class="denfensa">Defensa</p>
<h1>Bloqueo: puedes bloquear los ataques enemigos manteniendo ZL con un escudo equipado. De esta manera puedes detener casi todos los ataques, menos los más poderosos, aunque debes de tener en cuenta que cada vez que tu escudo recibe un golpe este se ve dañado, hasta que llegue un momento que se rompa. Puedes conseguir escudos cada vez más resistentes a lo largo de la aventura.
<br></br>Desplazamiento lateral y esquivar: para esquivar ataques enemigos mantén presionado ZL, y apretando el salto hacia un lado (izquierda o derecha) o hacia atrás, realizarás un movimiento de esquiva. Si realizas este movimiento en el momento adecuado, justo antes de que te golpeen, realizarás la llamada "carrera frenética", unos segundos durante los cuales el tiempo se ralentiza y ejecutas unos ataques especialmente dañinos.
<br></br>Esprintar: correr siempre es una buena solución, manteniendo apretado el stick izquierdo. Si ves un peligro para el que no estás preparado para enfrentarte, lo mejor es echar a correr, aunque sin perder de vista tu medidor de resistencia, ya que cuando este se agota, Link se queda parado unos valiosos segundos hasta que se recupera.
<br></br>Guardia perfecta: como os explicamos en el apartado de ataque, consiste en pulsar el botón A con un botón desenfundado justo cuando vas a recibir un ataque, repeliéndolo y dejando al enemigo grogui unos segundos. Es algo que podemos hacer tanto con las flechas, e incluso con los rayos láser de los guardianes, que podemos devolverles.
<br></br><p class="sigilo">Sigilo</p>
<h1>Los enemigos por defecto no son conscientes de tu presencia hasta que te ven o te oyen, algo que se advierte con un icono sobre su cabeza. Para evitar hacer ruido y que te vean mueve a Link suavemente con el stick izquierdo, e intenta caminar agachado apretando el stick. También utilizar el entorno para ocultarte, caminando entre la hierba alta.

Cuando asaltes un campamento ten cuidado con los centinelas, que están subidos en unas torres de observación y atentos a todo el que se acerca. Aunque de noche los enemigos están durmiendo, siempre dejan al menos a un centinela despierto y vigilando. Si te ven o te oyen de lejos, un signo de interrogación aparecerá encima de su cabeza, que irá cambiando de color hasta ponerse totalmente rojo, momento en el que te habrán visto definitivamente y darán la voz de alerta.

Si consigues ponerte detrás de un enemigo lo suficientemente cerca sin que te vea, aparecerá en pantalla el icono de "ataque furtivo", que te permitirá realizar un ataque letal y muy dañino, que casi siempre acaba con los enemigos de un solo golpe.

También antes de asaltar un campamento conviene observar muy bien el entorno, ya que muchas veces podemos hacer estallar barriles explosivos con una flecha de fuego, que causan un daño enorme, o también puedes cortar con flechas candelabros que al caer pueden detonar barriles.</h1>

<div class="hist">
  Como conseguir la espada maestra
   <a name="espada_maestra"></a>
</div>
<h1> En Breath of the Wild podemos conseguir un arma mítica dentro de la saga: la Espada Maestra Para obtenerla debemos realizar la misión principal "La espada del héroe", pero esta misión no se activa siguiendo el curso de la historia principal, por lo que a continuación os vamos a explicar cómo conseguirla.</h1>
<div class="espada">
  <img src="./img/espada.jpg"> </src>
</div>

<h1> Esta misión se puede comenzar en cualquier momento del juego, una vez que hayamos superado el prólogo, aunque ya os advertimos que necesitaremos tener un número elevado de corazones para conseguir la Espada Maestra (13 corazones) Primero debemos dirigirnos al lugar que os marcamos en el mapa, la entrada al Bosque perdido.</h1>

<div class="bosque">
  <img src="./img/bosque.jpg"> </src>
</div>

<h1> El Bosque Perdido es una especie de laberinto que tiene un camino invisible, y si te sales de él la niebla de envuelve y te devuelve a la entrada.

En la primera sección para guiarte tienes que seguir el fuego de las antorchas, así que intenta ir de una a otra observando atentamente el escenario. Si fallas alguna vez no te preocupes, el camino es siempre el mismo, por lo que tras equivocarte dos o tres veces al final hallarás la ruta correcta.

Al final llegarás al Bosque Kolog, y en el centro verás la Espada Maestra, clavada en la piedra. Para poder sacarla necesitarás tener 13 corazones.
<div class="estatua">
  <img src="./img/estatua.jpg"> </src>
</div>
<br></br>Si al utilizar los símbolos de valía en las estatuas de las diosas te has centrado más en mejorar la resistencia que la salud, y ahora te faltan corazones para poder extraer la espada, no te preocupes, ya que hay un pequeño truco.

En Aldea Hatelia, debajo de la banderola gigante, hay una estatua de la diosa corrupta, que te permite cambiar los puntos de resistencia por corazones, y viceversa.
Primero tendremos que entregarle contenedores de salud o resistencia (nos paga 100 rupias por ellos), y después por una módica cantidad (120 rupias) nos los devolverá en la forma que queramos, ya sean corazones o resistencia.

Así si llegamos al Bosque Kolog sin corazones suficientes para extraer la Espada Maestra (13 corazones), podremos sacrificar algunos puntos de resistencia para conseguirla.</h1>

<br></br><h1>La Espada Maestra no es ni mucho menos una de las mejores armas que podemos encontrar en el juego, y tiene 30 de daño y 40 de durabilidad, aunque tiene varias peculiaridades.

La primera es que no se puede romper, y cuando se agota su durabilidad comienza un periodo de recuperación de 10 minutos, durante el cual no podemos usarla.

Además causa el doble daño contra Ganon y sus esbirros, por lo que nos vendrá genial para el asalto al Castillo de Hyrule y enfrentarnos a Ganon.

Por último también puede lanzar un rayo cuando tenemos la salud completa, si mantemos pulsado el botón R y después lo soltamos, un clásico en la saga.</h1>


    	<div class="lateraldzelda">
        	<img src="./img/laterales.PNG">
    	</div>

      <div class="commentinput">
      <form action="kimetsu.php" method="post" name="form1">
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













