<html>
<head>
<title>NOBEL</title>
<link rel="stylesheet" type="text/css" href="opinion.css" />
</head>
<body>
<?
$conexion = mysql_connect("sql204.byethost10.com","b10_11894387","comision");
mysql_select_db('b10_11894387_nobel', $conexion);

if (isset($_POST[eliminar])) {

	$idfecha = $_POST["eliminarfecha"];

	$sql = "DELETE from comentarios where fecha='$idfecha'";
	
	if (mysql_query($sql, $conexion)) {
		?>
		<script type="text/javascript">
			window.location="adminopinion.php";
		</script>
		<?
	}
	else {
		echo mysql_error ();
	}
	
}

?>


</body>
</html>