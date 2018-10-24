<html>
<head>
<title>NOBEL</title>
<link rel="stylesheet" type="text/css" href="opinion.css" />
</head>
<body>
<?
if (isset($_POST[admin])) { 
	$usuario = $_POST["usuario"];
	$passwd = $_POST["passwd"];
	
	if (($usuario=="nobel1") && ($passwd=="nobel5523")) {
		setcookie("nobeladmin", "1111", time()+9000,"/","comision72.byethost10.com");
		?>
		<script type="text/javascript">
			window.location="adminopinion.php";
		</script>
		<?
	}
	else {
		?>
		<script type="text/javascript">
			window.location="admin.php";
		</script>
		<?
	}
}
$control = $_COOKIE['nobeladmin'];

if ($control != 1111) {
	?>
	<script type="text/javascript">
		window.location="admin.php";
	</script>
	<?
}

$conexion = mysql_connect("sql204.byethost10.com","b10_11894387","comision");
mysql_select_db('b10_11894387_nobel', $conexion);

$sql = "select * from comentarios order by fecha desc";

$registros = mysql_query($sql, $conexion);

echo "<h2>Comentarios</h2>";

while ($fila = mysql_fetch_array($registros)){
	$nombre = $fila["nombre"];
	$correo = $fila["correo"];
	$poblacion = $fila["poblacion"];
	$profesion = $fila["profesion"];
	$comentario = $fila["comentario"];
	$fecha = $fila["fecha"];
	
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
	echo "<span id='fecha'><b>" . substr($fecha, 0, -9) . "</b></span>";
	echo "<form action='eliminaropinion.php' name='eliminar' method='post'>
			<input type='hidden' name='eliminarfecha' value='" . $fecha . "' />
			<input type='submit' name='eliminar' value='Eliminar' />
		</form>";
	echo "</div>";
}
?>

</body>
</html>