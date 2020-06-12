<?php
	
	session_start();
    include_once("../modelo/conexao.php");

	$nomeUtilizador = $_POST ['utilizador'];
	$senha = $_POST ['senha'];

	if((isset($_POST['utilizador'])) && (isset($_POST['senha']))){
        $nomeUtilizador = mysqli_real_escape_string($conexao, $_POST['utilizador']); 
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    }

    $queryLogin = " SELECT * FROM utilizador WHERE  nomeUtilizador = '$nomeUtilizador' AND senha ='$senha' LIMIT 1" ;
    $resultado_login = mysqli_query($conexao, $queryLogin);
    $log = mysqli_fetch_assoc ($resultado_login) or die ("Erro.");

    if(empty($log )){
        //Mensagem de Erro		        
        $_SESSION ['loginError'] = " Usuário ou Senha Inválida. " ;

        // Mantem o usuario na pagina de Login.
         header ("location: ../index.php") ;
    }else{
        $_SESSION['id'] = $log ['id'];
        $_SESSION['nomeUtilizador'] = $log ['nome'];
        $_SESSION['senha'] = $log ['senha'];

        if (!empty($_SESSION['id'])) {
        	header("Location: ../vistas/index.php");
        }else{
        	header("Location: ../index.php");
        }
    }

	
?>