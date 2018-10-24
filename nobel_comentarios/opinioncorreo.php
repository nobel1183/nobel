<html>
<head>
<title>NOBEL Correo</title>
<link rel="stylesheet" type="text/css" href="opinion.css" />
</head>
<body>
<?
if(isset($_POST['comentario'])){
	
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$poblacion = $_POST["poblacion"];
	$profesion = $_POST["profesion"];
	$comentario = $_POST["comentario"];
	
  	$header=$header. "X-Mailer:PHP/".phpversion()."\n"; 
	$header=$header. "Mime-Version: 1.0\n"; 
	$header=$header. 'From: Nobel <nobel@gmail.com>' . "\r\n";
	$header=$header. 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$message="
		<html>
		<head>
		<title>Nobel</title>
		</head>
		<body>
		<div>
			<b>Nombre:</b> $nombre <br/>
			<b>Correo:</b> $correo <br/>
			<b>Población:</b> $poblacion <br/>
			<b>Profesión:</b> $profesion <br/>
			<b>Mensaje:</b> $comentario </br>
		<div>
		</body>
		</html>";
	$direccion = "comisionnobel@gmail.com";
	mail($direccion,"Correo Nobel",$message,$header);
	?>
	<script type="text/javascript">
		window.location="mailok.php";
	</script>
	<?
}
?>
<h1>Colaboración</h1>
<form name="comentario" method="post" action="opinioncorreo.php">
	<label>Nombre y Apellidos: </label><input type="text" name="nombre" required="required"/>
	<label>Población y País: </label><input type="text" name="poblacion"/>
	<label>Profesión: </label><input type="text" name="profesion"/>
	<label>Correo: </label><input type="text" name="correo"/>
	<label>Colaboración que ofrezco o propongo: </label><textarea name="comentario" cols="50" rows="5" required="required"></textarea>
	<input type="submit" name="button" value="Enviar"/>
</form>

<center>
						<a href="http://twitter.com/home?status=Leyendo http://comision72.byethost10.com/ " title="Compartir en Twiter" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/twitter.png" style="border-style: none; vertical-align: bottom; ">Twitter</a>
						<a href="http://www.facebook.com/share.php?u=http://comision72.byethost10.com/" title="Compartir en FaceBook" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/facebook.png" style="border-style: none; vertical-align: bottom; ">FaceBook</a>
						<a href="http://www.tuenti.com/share?url=http://comision72.byethost10.com/" title="Compartir en Tuenti" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/tuenti.png" style="border-style: none; vertical-align: bottom; ">Tuenti</a>
						<a href="http://meneame.net/submit.php?url=http://comision72.byethost10.com/" title="Compartir en Meneame" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/meneame.png" style="border-style: none; vertical-align: bottom; ">Meneame</a>
						<a href="http://del.icio.us/post?url=http://comision72.byethost10.com/" title="Compartir en del.icio.us" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/delicious.png" style="border-style: none; vertical-align: bottom; ">del.icio.us</a>
						<div id="___plusone_0" style="height: 20px; width: 32px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial; "><iframe allowtransparency="true" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="width: 32px; margin: 0px; border-style: none; height: 20px; position: static; left: 0px; top: 0px; visibility: visible; " tabindex="0" vspace="0" width="100%" id="I0_1339493677090" name="I0_1339493677090" src="https://plusone.google.com/_/+1/fastbutton?bsv=pr&amp;url=http://comision72.byethost10.com/" title="+1"></iframe></div>
					</center>


</body>
</html>