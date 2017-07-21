<html>
<head>
<link href="css/ubuland.css" rel="Stylesheet" type="text/css" />
<script>
var slideIndex = 0;
var alreadyCar = false;
function Sh (MyName)
{
	MyObj = document.getElementById(MyName);
	MyObj.style.display = 'block';
}
function Hd (MyName)
{
	MyObj = document.getElementById(MyName);
	MyObj.style.display = 'none';
}
function carousel() 
{
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000); 
}
// carousel()
function MundoShow()
{
	if (alreadyCar)
		return;
	alreadyCar = true
	slideIndex = 0;
    carousel();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(".divpres").hide();
	$(".Parti").hide();
	$(".Sistema").hide();
	$(".Mundo").hide();
	$(".Usuario").hide();
	$(".Combat").hide();
    $(".Presen").click(function(){
        $(".Parti").fadeOut("slow");
        $(".Sistema").fadeOut("slow");
        $(".Mundo").fadeOut("slow");
	    $(".Usuario").fadeOut();
	    $(".Combat").fadeOut();
        $(".divpres").fadeToggle("slow");
    });
    $(".Subig").click(function(){
        $(".divpres").fadeOut("slow");
        $(".Sistema").fadeOut("slow");
        $(".Mundo").fadeOut("slow");
	    $(".Usuario").fadeOut();
	    $(".Combat").fadeOut();
        $(".Parti").fadeToggle("slow");
    });
    $(".Dwarf").click(function(){
        $(".divpres").fadeOut("slow");
        $(".Parti").fadeOut("slow");
        $(".Mundo").fadeOut("slow");
	    $(".Usuario").fadeOut();
	    $(".Combat").fadeOut();
        $(".Sistema").fadeToggle("slow");
    });
    $(".Draco").click(function(){
        $(".divpres").fadeOut("slow");
        $(".Parti").fadeOut("slow");
        $(".Sistema").fadeOut("slow");
	    $(".Usuario").fadeOut();
	    $(".Combat").fadeOut();
        $(".Mundo").fadeToggle("slow");
		MundoShow();
    });
    $(".Gnome").click(function(){
        $(".divpres").fadeOut("slow");
        $(".Parti").fadeOut("slow");
        $(".Sistema").fadeOut("slow");
        $(".Mundo").fadeOut("slow");
	    $(".Combat").fadeOut();
	    $(".Usuario").fadeToggle();
    });
    $(".Undead").click(function(){
        $(".divpres").fadeOut("slow");
        $(".Parti").fadeOut("slow");
        $(".Sistema").fadeOut("slow");
        $(".Mundo").fadeOut("slow");
	    $(".Usuario").fadeOut();
	    $(".Combat").fadeToggle();
    });
});
</script>
</head>
<body>
<img class='Presen' src='img/hsign3.gif'alt="Participar" onmouseover='return Sh("P2");' onmouseout='return Hd("P2");'>
<img class='Subig' src='img/subi.gif' alt="Participar" onmouseover='return Sh("P1");' onmouseout='return Hd("P1");'>
<img class='Dwarf' src='img/dwarf.gif' alt="Sistema" onmouseover='return Sh("P3");' onmouseout='return Hd("P3");'>
<img class='Draco' src='img/draco.gif' alt="Mundo" onmouseover='return Sh("P4");' onmouseout='return Hd("P4");'>
<img class='Gnome' src='img/gnome.gif' alt="Nuestro servidor" onmouseover='return Sh("P5");' onmouseout='return Hd("P5");'>
<img class='Undead' src='img/undead.gif' alt="Foro" onmouseover='return Sh("P6");' onmouseout='return Hd("P6");'>>
<div class='divpres' >
<pre>
 &iquest;QUE ES UBULANDS?
 
 En pocas palabras: Somos un servidor de rol basado en el mundo Warcraft.
 
 En UBULANDS tenemos la ilusi&oacute;n de crear y sostener un servidor 
 fundamentado en el motor Trinity core, manteniendo el nivel m&aacute;ximo de
 versi&oacute;n posible. Aprovechando asi las m&aacute;ximas ventajas en cuanto a
 gr&aacute;ficos y zonas que nos brinda la plataforma de software libre. 
 
 En definitiva, somos un grupo de amigos, aficionados al juego de rol que  
 disfrutamos montando todo tipo de situaciones comprometidas para  
 nuestros personajes. Nos gusta ver como nuestras creaciones evolucionan
 en un mundo fant&aacute;stico y sorprendente.
</pre>
</div>
<div id=P1 name=P1 class='PartiPRE'>
<pre class='prebann'>
 &iquest;COMO PUEDO PARTICIPAR?
</pre> 
</div>
<div id=P2 name=P2 class='PartiPRE'>
<pre class='prebann'>
 &iquest;QUE ES UBULANDS?
</pre> 
</div>
<div id=P3 name=P3 class='PartiPRE'>
<pre class='prebann'>
 NUESTRO SISTEMA DE ROL
</pre> 
</div>
<div id=P4 name=P4 class='PartiPRE'>
<pre class='prebann'>
 EL MUNDO DE UBULANDS
</pre> 
</div>
<div id=P5 name=P5 class='PartiPRE'>
<pre class='prebann'>
 COMUNIDAD UBULANDS
</pre> 
</div>
<div id=P6 name=P6 class='PartiPRE'>
<pre class='prebann'>
 NO TODO ES COMBATIR
</pre> 
</div>

<div class='Parti'>
<pre>
 &iquest;COMO PUEDO PARTICIPAR?
 
 Tanto si te introduces en el mundo del juego de rol como si eres un experimentado rolero 
 debes ajustarte a los est&aacute;ndars de UBULANDS. No son muy complicados, pero son 
 necesarios para mantener un estado coherente y arm&oacute;nico de historia (Lore) del servidor. 
 
 El dise&ntilde;o del personaje debe adecuarse a las lineas de rol ya existentes en el servidor, 
 a no ser que se justifique adecuadamente, puesto que el motor historiogr&aacute;fico es seguir 
 el Lore lo mas fielmente posible.
 
 Si quieres participar en este proyecto sigue estas <a href=javascript:void()>Instrucciones</a>. Se trata de informarte 
 de las reglas de rol de nuestro servidor y de un sencillo cuestionario para que 
 conozcamos un poco tus aspiraciones y podamos orientarte en cuanto al tipo de 
 personaje que puedes crearte.
 
 Tambi&eacute;n disponemos de una cuenta de correo electr&oacute;nico corporativa donde puedes 
 dirigir tus dudas o sugerencias: ubulands@gmail.com
 
 Basicamente requerimos tres cualidades: buen rollo, imaginaci&oacute;n e ilusi&oacute;n.
</pre>
</div>
<div class='Sistema'>
<pre>
 NUESTRO SISTEMA DE ROL - GSIadd Addon del servidor
 
 En UBULANDS damos mucha importancia al tema interpretativo por lo que en todo momento los
 personajes se encuentran en 'estado de rol' si hay alguna cuesti&oacute;n a abordar off-rol siempre se
 resuelve por susurro o bien en la zona de inicio.
 
 Aunque no por ello olvidamos el sistema de talentos, aptitudes, conocimientos y dem&aacute;s caracter&iacute;sticas
 que constituyen la es&eacute;ncia de un personaje. Bas&aacute;mos el sistema en seis atributos base: Fuerza,
 Intelecto, Agilidad, Esp&iacute;ritu, Resistencia y Carisma, de ellos derivan las dem&aacute;s habilidades del personaje.
 Para poder asimilar de forma &oacute;ptima el sistema disponemos de un Addon exclusivo desarrollado por
 nuestro staff - GSIAdd - para que te sea mucho mas f&aacute;cil implementar una ficha de rol, sin tener que 
 profundizar en complicados c&aacute;lculos a la hora de usar tus habilidades.
 
 GSIAdd proporciona tanto la parte social como estad&iacute;stica de tu personaje, adem&aacute;s, conforme tu pj
 'crezca' ir&aacute; aprendiendo hechizos y habilidades, bien por eventos o bien por rol de aprendizaje, estos se
 a&ntilde;adir&aacute;n a la barra de acci&oacute;n de GSIAdd para que puedas usarlos en el momento adecuado. Por 
 supuesto el uso de dichos 'hechizos' no es gratuito, suponen un cansancio en el personaje, el Addon 
 tambi&eacute;n refleja el 'estado' los personajes: cansancio, salud, etc. por medio de barras de estado. 
 
 Al igual que en algunos servidores de rol, en UBULANDS decidimos prescindir del sistema de 'clases' al 
 estilo del Wow est&aacute;ndard, entendemos que eso limita al jugador a la hora de dise&ntilde;ar personajes.
 
</pre>
</div>
<div class='Combat'>
<pre>
 SISTEMAS NO COMBATIVOS
 
 Estad&iacute;sticamente el porcentaje de jugadores de rol que centran el crecimiento de sus pj
 en el combate es elevado. 
 Sin embargo queremos que nuestros personajes posean algo m&aacute;s que caracteres
 monodimensionales que son meras 'maquinas de matar', estimamos como mucho m&aacute;s 
 rico y atrayente un rol basado en otras habilidades que no son solo de combate, 
 como pueden ser artesanas, de mando, art&iacute;sticas, etc.

 Estos aspectos los hemos dividido en cuatro ramas fundamentales: 
	- Econom&iacute;a: Donde se rige todo lo que ata&ntilde;e a las posesiones materiales,
		bien sean tierras o bienes.
	- Reputaci&oacute;n: Aqui se mide la dimensi&oacute;n social de nuestros personajes. 
		Abarca desde el prestigio social en cierto territorio hasta las dotes 
		de mando.
	- Profesiones: Sistemas de habilidad para desempe&ntilde;ar diversas profesiones, 
		no solo las cl&aacute;sicas de Wow, los jugadores tienen libertad para escogerlas 
		dentro de la coherencia.
	- Religi&oacute;n: Si bien hoy en dia se vive en una sociedad eminentemente laica no es
		asi en el mundo Warcraft, hay todo un tejido de creencias diversas, que 
		nuestro personaje debe abrazar y practicar seg&uacute;n su raza o historia personal.
 
</pre>
</div>
<div class='Mundo' > 
   <img class="mySlides" src="img/car10.jpg">
   <img class="mySlides" src="img/car11.jpg">
   <img class="mySlides" src="img/car12.jpg">
   <img class="mySlides" src="img/car13.jpg">
   <img class="mySlides" src="img/car14.jpg">
   <img class="mySlides" src="img/car1.jpg">
   <img class="mySlides" src="img/car2.jpg">
   <img class="mySlides" src="img/car3.jpg">
   <img class="mySlides" src="img/car4.jpg">
   <img class="mySlides" src="img/car5.jpg">
   <img class="mySlides" src="img/car6.jpg">
   <img class="mySlides" src="img/car7.jpg">
   <img class="mySlides" src="img/car8.jpg">
   <img class="mySlides" src="img/car9.jpg">
<pre>
 EL MUNDO DE UBULANDS
 
 Aunque el contenido est&aacute; altamente customizado en UBULANDS no usamos
 un cliente de juego espec&iacute;fico. Tan solo unos peque&ntilde;os ajustes en 
 el cliente Wow est&aacute;ndard y listos!. 
 
 En cuanto a linea temporal UBULANDS arranca tras la fuga de Garrosh 
 en su juicio (novela: Cr&iacute;menes de guerra), avanzando en WoD hasta 
 Legion. Aunque tambi&eacute;n es nuestra intenci&oacute;n recrear todo tipo de 
 historias del mundo Warcraft, bien sea en linea temporal, bien en forma 
 de 'flashback'.
 
</pre>
</div>
<div class='Usuario' > 
 <iframe width=500 height=150 src='https://82.223.34.196/UBULANDS/ingres.php'>
 </iframe>
 <pre>   
 Introduce los datos de tu cuenta 
 
 &iquest;No dispones de una cuenta todavia? -> <a href=javascript:void()>Registrate</a>
 </pre>
</div>
</body>
</html>