<?php

	include_once ("../modelo/conexao.php");

	$ngg = $_POST['ngg'];
	$aldeia = $_POST['aldeia'];
	$data = date('Y-m-d');

	$query = "INSERT INTO grupogaac(nomeGrupo,idAldeia,dataCriacao) VALUES ('$ngg','$aldeia','$data')";

	$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));

	if(!empty($resultado)){
		header("Location: ../vistas/index.php?link=1");
	}else{
		header("Location: ../vistas/index.php?link=2");
	}

?>