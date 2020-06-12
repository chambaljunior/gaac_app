<?php
	
	//session_start();
    include_once("../modelo/conexao.php");

	$id = $_GET['id'];
    $queryInd = "SELECT membro.nome, membro.apelido, membro.nid, membro.dataNascimento, membro.dataPreIngresso, membro.dataIngressonogrupo, membro.partilhouestadoParceiro, membro.cargaViralStatus, estadoparceiro.Parceiro, nivel.educacao, estadocivil.estadoCivil, emprego.emprego, moracom.moracom, genero.genero, grupogaac.nomeGrupo FROM membro, estadoparceiro, nivel, estadocivil, moracom, genero, grupogaac, emprego WHERE membro.idEstadoCivil = estadocivil.id AND membro.idGrupogaac = grupogaac.id AND membro.idGenero = genero.id AND membro.idEstado = estadoparceiro.id AND membro.idEducacao = nivel.id AND membro.idMora = moracom.id AND membro.idEmprego = emprego.id AND (membro.id)=$id";
    $resultadoInd = mysqli_query($conexao,$queryInd) or die(mysqli_error($conexao));

                

?>

<div id="main">
    <div class="inner">
    <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                        
                </header>
                
                <div class="div-bt">
                	
                	<p class="titulo">Dados Completos</p>

			        <p class="titulo1">Categoria</p>
				
					<?php
				
					while ($linhaInd = mysqli_fetch_assoc($resultadoInd)) {
				        echo "<p class='titulo1'><b>Nome Completo : </b>".$linhaInd['nome']." ".$linhaInd['apelido']."</p>
				        	<p class='titulo1'><b>NID : </b>".$linhaInd['nid']."</p>
				        	<p class='titulo1'><b>Data de Nascimento : </b>".$linhaInd['dataNascimento']."</p>
				        	<p class='titulo1'><b>Data do Pre-Ingresso : </b>".$linhaInd['dataPreIngresso']."</p>
				        	<p class='titulo1'><b>Data do Ingresso : </b>".$linhaInd['dataIngressonogrupo']."</p>
				        	<p class='titulo1'><b>Parreiro sabe do Estado : </b>".$linhaInd['partilhouestadoParceiro']."</p>
				        	<p class='titulo1'><b>Carga Viral : </b>".$linhaInd['cargaViralStatus']."</p>
				        	<p class='titulo1'><b>Estado do Parceiro : </b>".$linhaInd['Parceiro']."</p>
				        	<p class='titulo1'><b>Nivel Escolar : </b>".$linhaInd['educacao']."</p>
				        	<p class='titulo1'><b>Estado Civil : </b>".$linhaInd['estadoCivil']."</p>
				        	<p class='titulo1'><b>Tem emprego : </b>".$linhaInd['emprego']."</p>
				        	<p class='titulo1'><b>Com quem mora : </b>".$linhaInd['moracom']."</p>
				        	<p class='titulo1'><b>Genero : </b>".$linhaInd['genero']."</p>
				        	<p class='titulo1'><b>Nome do Grupo : </b>".$linhaInd['nomeGrupo']."</p>
				        ";
			        }

				?>

                </div>
            </div>
        </section>
    </div>
</div>

	