<?php
	//session_start();
	include_once('../modelo/conexao.php');

	$grupo = $_POST['grupo_gaac'];
	$nid = $_POST['nid'];
	$nome = $_POST['nome'];
	$apelido = $_POST['apelido'];
	$idade = $_POST['idade'];
	$dpi = $_POST['dpi'];
	$genero = $_POST['genero'];
	$scivil = $_POST['scivil'];
	$cqmora = $_POST['cqmora'];
	$educacao = $_POST['educacao'];
	$emprego = $_POST['emprego'];
	$sParceiro = $_POST['sParceiro'];
	$pSParceiro = $_POST['pSParceiro'];
	$dataIngresso = date('Y-m-d');

	//$query = "";
	//$query = "INSERT INTO membro(nome, apelido, nid, dataNascimento, idEstadoCivil, idEmprego, idGrupogaac, idGenero, idEstado, idEducacao, idMora, idRemuneracao, partilhaDeStatusParceiro) values('$nome','$apelido','$nid','$idade','$scivil','$grupo','$genero','$sParceiro','$educacao','$cqmora','$emprego','$pSParceiro')";

		$query = "INSERT INTO membro(nome, apelido, nid, dataNascimento,dataIngressonogrupo,partilhouestadoParceiro,idEstadoCivil,idEmprego,idGrupogaac,idGenero,idEstado,idEducacao,idMora,dataPreIngresso) values('$nome','$apelido','$nid','$idade','$dataIngresso','$pSParceiro','$scivil','$emprego','$grupo','$genero','$sParceiro','$educacao','$cqmora','$dpi')";
	$resultado = mysqli_query($conexao,$query) or die(mysqli_error($conexao));

	if(!empty($resultado)){
		header("Location: https://nnema.000webhostapp.com/vistas/index.php");
	}else{
		header("Location: https://nnema.000webhostapp.com/vistas/index.php");
	}

?>