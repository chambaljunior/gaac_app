<div id="main">
	<div class="inner">
	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
					<center><h3>MEMBRO GAAC</h3></center>
				</header>
                <div class="div-bt">
                <center><button id="myBtn">REGISTAR MEMBRO</button></center><hr>
                
                <table border="2" width="100%">
                        <tr style="border-bottom: 1px solid black;">
                            <td align="center">NOME COMPLETO</td>
                            <td align="center">NID</td>
                            <td align="center">DATA DE NASCIMENTO</d>
                            <td align="center">DATA DE INGREDO</td>
                            <td align="center">GRUPO GAAC</td>
                        </tr>
                        <hr>
                        <tr>
                        <?php
                            $query = "SELECT membro.apelido, membro.nome, membro.nid, membro.dataNascimento, membro.dataIngressonogrupo, membro.dataPreIngresso, membro.partilhouestadoParceiro, estadocivil.estadocivil, emprego.emprego, grupogaac.nomeGrupo, genero.genero, estadoparceiro.Parceiro, nivel.educacao, moracom.moracom FROM membro, estadocivil, emprego, grupogaac, genero, estadoparceiro, nivel, moracom WHERE membro.idGrupogaac=grupogaac.id AND membro.idEstadoCivil=estadocivil.id AND membro.idEmprego=emprego.id AND membro.idGenero = genero.id AND membro.idEstado = estadoparceiro.id AND membro.idMora = moracom.id AND membro.idEducacao = nivel.id";
                            $resultado = mysqli_query($conexao,$query);
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                                echo "<tr><td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linha['nome']." ".$linha['apelido']."</td>
                                <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linha['nid']."</td>
                                <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linha['dataNascimento']."</td>
                                <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linha['dataIngressonogrupo']."</td>
                                <td align='center' style='border-bottom: 1px solid black;'>".$linha['nomeGrupo']."</td></tr>";
                            }
                        ?>
                    </tr>
                </table>
                
            </div>

<div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2>Registar Membro</h2>
            </div>
            <div class="modal-body">
              <form method="POST" action="../controladora/registarMembro.php">
                <label for="grupo_gaac" class="lab">Grupo GAAC</label>
                <select id="grupo_gaac" name="grupo_gaac" required>
                    <?php
                        $resultadoGrupo = mysqli_query($conexao,"SELECT * FROM grupogaac");
                        while ($linhaGrupo=mysqli_fetch_assoc($resultadoGrupo)) {
                            echo "<option value=".$linhaGrupo['id'].">".$linhaGrupo['nomeGrupo']."</option>";
                        }
                    ?>
                </select>
                <hr>
                <p class="titulo">1. Sociodemografico</p>
                <label for="nid" class="lab">NID</label>
                <input type="text" class="nid" id="nid" name="nid" placeholder="Ex. 12345" required>
                <br/>
                <label for="Nome" class="lab">Nome</label>
                <input type="text" class="nome" id="nome" name="nome" placeholder="Nome do Membro" required>

                <label for="apelido" class="lab">Apelido</label>
                <input type="text" class="nome" id="apelido" name="apelido" placeholder="Apelido do Membro" required>

                <label for="idade" class="lab">Data de Nascimento</label><br>
                <input type="date" class="nome" id="idade" name="idade" placeholder="Data de Nascimento" required><br>

                <label for="idade" class="lab">Data do Pre-Ingresso</label><br>
                <input type="date" class="nome" id="dpi" name="dpi" placeholder="Data do Pre-Ingresso" required><br>

                <label for="genero" class="lab">Genero</label><br>
                <select id="genero" class="nome" name="genero" required>
                    <?php
                        $resultadoGenero = mysqli_query($conexao,"SELECT * FROM genero");
                        while ($linhaGenero=mysqli_fetch_assoc($resultadoGenero)) {
                            echo"<option value=".$linhaGenero['id'].">".$linhaGenero['genero']."</option>";
                        }
                    ?>
                </select><br>

                <label for="scivil" class="lab">Estado Civil</label><br>
                <select id="scivil" class="nome" name="scivil" required>
                    <?php
                        $resultadoEsCivil = mysqli_query($conexao,"SELECT * FROM estadocivil");
                        while ($linhaSCivil = mysqli_fetch_assoc($resultadoEsCivil)) {
                            echo "<option value=".$linhaSCivil['id'].">".$linhaSCivil['estadoCivil']."</option>";
                        }
                    ?>
                </select><br>

                <label for="cqmora" class="lab">Com quem mora?</label><br>
                <select id="cqmora" class="nome" name="cqmora" required>
                    <?php
                        $resultadoMoracom = mysqli_query($conexao,"SELECT * FROM moracom");
                        while ($linhaMoracom = mysqli_fetch_assoc($resultadoMoracom)) {
                            echo "<option value=".$linhaMoracom['id'].">".$linhaMoracom['moracom']."</option>";
                        }
                    ?>
                </select><br>

                <label for="educacao" class="lab">Educacao</label><br>
                <select id="educacao" class="nome" name="educacao" required>
                    <?php
                        $resultadoNivel = mysqli_query($conexao,"SELECT * FROM nivel");
                        while ($linhaEducacao=mysqli_fetch_assoc($resultadoNivel)) {
                            echo "<option value=".$linhaEducacao['id'].">".$linhaEducacao['educacao']."</option>";
                        }
                    ?>
                </select><br>

                <label for="emprego" class="lab">Emprego</label><br>
                <select id="emprego" class="nome" name="emprego" required>
                    <?php
                        $resultadoEmprego = mysqli_query($conexao,"SELECT * FROM emprego");
                        while ($linhaEmprego=mysqli_fetch_assoc($resultadoEmprego)) {
                            echo "<option value=".$linhaEmprego['id'].">".$linhaEmprego['emprego']."</option>";
                        }
                    ?>
                </select>


                <hr>
                <p class="titulo">2. Sicosocial</p>

                
                <label for="sParceiro" class="lab">Estado do Parceiro</label><br>
                <select id="sParceiro" class="nome" name="sParceiro" required>
                    <?php
                        $resultadoSParceiro = mysqli_query($conexao,"SELECT * FROM estadoparceiro");
                        while ($linhaSParceiro = mysqli_fetch_assoc($resultadoSParceiro)) {
                            echo "<option value=".$linhaSParceiro['id'].">".$linhaSParceiro['Parceiro']."</option>";
                        }
                    ?>
                </select><br>

                <label for="pSParceiro" class="lab">Partilhou Estado com Parceiro?</label><br>
                <select id="pSParceiro" class="nome" name="pSParceiro" required>
                    <option value="Sim">Sim</option>
                    <option value="Nao">Nao</option>
                </select><br>

                <hr>
                <input type="submit" value="Gravar">

            </form>
            </div>
            <div class="modal-footer">
              <!--<h3><button>Fechar</button></h3>-->
            </div>
          </div>

        </div>


		        
			</div>
		</section>

	</div>
</div>

