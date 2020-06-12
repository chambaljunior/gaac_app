<?php

	include_once("../modelo/conexao.php");

	$membro = $_POST['membro'];

	/*
		Data Diagnostico HIV, data Inicio Tarv e Data da Ultima Consulta?
	*/

	$ddhiv = $_POST['ddhiv'];
	$dit = $_POST['dit'];
	$duc = $_POST['duc'];
	$cviral = $_POST['cviral'];
	$datar = $_POST['datar'];
	$cd4 = $_POST['cd4'];
	$datapc = $_POST['datapc'];
	$datarcd4 = $_POST['datarcd4'];

	//$clinicaQuery = "INSERT INTO consulta(data, dataInicioTARV, dataUltimaConsulta, cargaViral, dataRealizacaoCV, valorCD4, dataRealizacaoCD4, idMembro) values('$ddhiv','$dit','$duc',$cviral','$datar','$cd4','$datarcd4','$membro')";


	$clinicaQuery = "INSERT INTO consulta(data, dataInicioTARV, dataUltimaConsulta, cargaViral, dataRealizacaoCV, valorCD4, dataRealizacaoCD4, idMembro, proximaData) values('$ddhiv','$dit','$duc','$cviral','$datar','$cd4','$datarcd4','$membro','$datapc')";
	$resultado = mysqli_query($conexao,$clinicaQuery) or die(mysqli_error($conexao));
	//$resultadoClinica = mysqli_query($conexao, $clinicaQuery) or die(mysqli_error("Erro ".$conexao));

	if(!empty($resultado)){
		header("Location: ../vistas/index.php?link=1");
	}else{
		header("Location: ../vistas/index.php?link=4");
	}

?>