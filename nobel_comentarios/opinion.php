<html>
<head>
<title>NOBEL Opinión</title>
<link rel="stylesheet" type="text/css" href="opinion.css" />
</head>
<body>

<h1>Danos tu opinión</h1> <center>
						<a href="http://twitter.com/home?status=Leyendo http://comision72.byethost10.com/ " title="Compartir en Twiter" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/twitter.png" style="border-style: none; vertical-align: bottom; ">Twitter</a>
						<a href="http://www.facebook.com/share.php?u=http://comision72.byethost10.com/" title="Compartir en FaceBook" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/facebook.png" style="border-style: none; vertical-align: bottom; ">FaceBook</a>
						<a href="http://www.tuenti.com/share?url=http://comision72.byethost10.com/" title="Compartir en Tuenti" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/tuenti.png" style="border-style: none; vertical-align: bottom; ">Tuenti</a>
						<a href="http://meneame.net/submit.php?url=http://comision72.byethost10.com/" title="Compartir en Meneame" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/meneame.png" style="border-style: none; vertical-align: bottom; ">Meneame</a>
						<a href="http://del.icio.us/post?url=http://comision72.byethost10.com/" title="Compartir en del.icio.us" rel="nofollow" style="font-size: 8pt;  border-style: none; font-style: normal; text-decoration: none; color: black; background: white;" target="_blank"> <img src="http://compartirurlgadget.googlecode.com/files/delicious.png" style="border-style: none; vertical-align: bottom; ">del.icio.us</a>
						<div id="___plusone_0" style="height: 20px; width: 32px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial; "><iframe allowtransparency="true" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="width: 32px; margin: 0px; border-style: none; height: 20px; position: static; left: 0px; top: 0px; visibility: visible; " tabindex="0" vspace="0" width="100%" id="I0_1339493677090" name="I0_1339493677090" src="https://plusone.google.com/_/+1/fastbutton?bsv=pr&amp;url=http://comision72.byethost10.com/" title="+1"></iframe></div>
					</center>
<form name="comentario" method="post" action="opinion.php">
	<label>Nombre y Apellidos: </label><input type="text" name="nombre" required="required"/>
	<label>Población y País: </label><input type="text" name="poblacion"/>
	<label>Profesión: </label><input type="text" name="profesion"/>
	<label>Correo: </label><input type="text" name="correo"/>
	<label>Comentario: </label><textarea name="comentario" cols="50" rows="5" required="required"></textarea>
	<input type="submit" name="button" value="Subir el comentario"/>
</form>

<?
$conexion = mysql_connect("sql204.byethost10.com","b10_11894387","comision");
mysql_select_db('b10_11894387_nobel', $conexion);

if (isset($_POST[comentario])) {

	$inombre = $_POST["nombre"];
	$icorreo = $_POST["correo"];
	$ipoblacion = $_POST["poblacion"];
	$iprofesion = $_POST["profesion"];
	$icomentario = $_POST["comentario"];

	$sql = "insert into comentarios (nombre,correo,comentario,poblacion,profesion) values ('$inombre','$icorreo','$icomentario','$ipoblacion','$iprofesion')";
	mysql_query($sql, $conexion);

	
}


$sql = "select * from comentarios order by fecha asc";

$registros = mysql_query($sql, $conexion);

echo "<h2>Comentarios</h2>";

while ($fila = mysql_fetch_array($registros)){
	$nombre = $fila["nombre"];
	$correo = $fila["correo"];
	$poblacion = $fila["poblacion"];
	$profesion = $fila["profesion"];
	$comentario = $fila["comentario"];
	
	echo "<div id='comentarios'>";
	echo "<b>Nombre:</b> " . $nombre . "<br/>";
	if (strlen($correo) != 0) {
		echo "<b>Correo:</b> " . $correo . "<br/>";
	}
	if (strlen($poblacion) != 0) {
		echo "<b>Población:</b> " . $poblacion . "<br/>";
	}
	if (strlen($profesion) != 0) {
		echo "<b>Profesión:</b> " . $profesion . "<br/>";
	}
	echo "<b>Comentario:</b> " . $comentario . "<br/>";
	echo "</div>";
}

?>


</body>
</html>