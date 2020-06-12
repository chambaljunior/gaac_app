<?php

	include_once ("../modelo/conexao.php");

	$aldeia = $_POST['aldeia'];

	$query = "INSERT INTO aldeia(nomeAldeia) VALUES ('$aldeia')";

	$resultado = mysqli_query($conexao,$query) or die(mysql_error($conexao));

	if(!empty($resultado)){
		header("Location: ../vistas/index.php?link=1");
	}else{
		header("Location: ../vistas/index.php?link=6");
	}

?>