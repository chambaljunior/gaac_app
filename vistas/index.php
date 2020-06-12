<?php
	
	include_once("../modelo/conexao.php");

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>GAAC - Saude Movel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/modal.css" />
		<link rel="icon" type="image/png" href="../images/nnema.png" />
		<script src="https://kit.fontawesome.com/9be7b95cd0.js" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">
		<div id="wrapper">
		<?php

			$link = filter_input(INPUT_GET, 'link', FILTER_SANITIZE_NUMBER_INT);			

			//links para as paginas do sistema
		    $pag[1] = "paginaInicial.php";
		    $pag[2] = "registoGrupogaac.php";
		    $pag[3] = "registoMembro.php";
		    $pag[4] = "clinica.php";
		    $pag[5] = "Entrevista.php";
		    $pag[6] = "aldeia.php";
		    $pag[7] = "grupos-dados.php";
		    $pag[8] = "individual.php";
		    
		    // validacao do link para redirecionar para pagina desejada
		    if(!empty($link)){
		      if(file_exists($pag[$link])){
		        include $pag[$link];
		      }else{
		        include "paginaInicial.php";
		      }
		    }else{
		      include "paginaInicial.php"; 
		    }
			include_once("menu.php");
		    //include_once("vistas/rodape.php");

		?>
		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../assets/js/modal.js"></script>

	</body>
</html>