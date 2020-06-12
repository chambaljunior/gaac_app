<?php
	
	include_once("../modelo/conexao.php");

	$estadoCV = $_POST['estado'];
	$id = $_POST['id'];
	$query = "UPDATE membro SET cargaViralStatus='$estadoCV' WHERE id=$id";
	$resultado = mysqli_query($conexao,$query);
	if (!empty($resultado)) {
		header("LOCATION: ../vistas/index.php?link=2");
	}else{
		header("LOCATION: ../vistas/index.php?link=2");
	}


?>