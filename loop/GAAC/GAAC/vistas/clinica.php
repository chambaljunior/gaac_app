<div id="main">
	<div class="inner">
	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
					<center>
                        <h3>CLINICA HIV</h3>
                    </center>
				</header>
<center><button id="myBtn">REGISTAR DADOS HIV</button></center><hr>
                
        <table >
            <thead>
                <tr>
                    <th class="td-size">Membro</th>
                    <th class="td-size">Data Diagnostico HIV</th>
                    <th class="td-size">Data Inicio Tarv</th>
                    <th class="td-size">Data da Ultima Consulta</th>
                    <th class="td-size">Carga Viral</th>
                    <th class="td-size">Data Realizacao CV</th>
                    <th class="td-size">Valor CD4</th>
                    <th class="td-size">Data Realizacao CD4</th>
                </tr>    
            </thead>
            <tbody>
                <?php
                    $resultadAldeia = mysqli_query($conexao,"SELECT * FROM consulta, membro WHERE consulta.idMembro = membro.id");
                    while ($linhaAldeia = mysqli_fetch_assoc($resultadAldeia)) {
                        echo "<tr><td class='td-size'>".$linhaAldeia['nome']." ".$linhaAldeia['apelido']."</td>
                        <td class='td-size'>".$linhaAldeia['data']."</td>
                        <td class='td-size'>".$linhaAldeia['dataInicioTARV']."</td>
                        <td class='td-size'>".$linhaAldeia['dataUltimaConsulta']."</td>
                        <td class='td-size'>".$linhaAldeia['cargaViral']."</td>
                        <td class='td-size'>".$linhaAldeia['dataRealizacaoCV']."</td>
                        <td class='td-size'>".$linhaAldeia['valorCD4']."</td>
                        <td class='td-size'>".$linhaAldeia['dataRealizacaoCD4']."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
		  

            <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2>Registar Aldeia</h2>
            </div>
            <div class="modal-body">
              <center>
                <form method="POST" action="../controladora/registoClinica.php">

            <label>Membro</label>
            <select name="membro">
                <?php
                    $resultado = mysqli_query($conexao,"SELECT * FROM membro");
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo 
                            "<option value='".$linha['id']."'>".$linha['nome']." ".$linha['apelido']."</option>"
                        ;
                    }

                ?>
            </select>           

            <label>Data Diagnostico HIV</label>
            <input type="date" class="nome" id="ddhiv" name="ddhiv" placeholder="Carga Viral (cp/ml)" required>
            <label>Data Inicio Tarv</label>
            <input type="date" class="nome" id="dit" name="dit" placeholder="Carga Viral (cp/ml)" required>

            <label>Data da Ultima Consulta</label>
            <input type="date" class="nome" id="duc" name="duc" placeholder="Carga Viral (cp/ml)" required>

            <label>Carga Viral</label>
            <input type="text" class="nome" id="cviral" name="cviral" placeholder="Carga Viral (cp/ml)" required>

            <label>Data de Realização</label>
            <input type="date" class="nome" id="datar" name="datar" placeholder="Data de Realização" required>

            <hr>

            <label>Valor de CD4</label>
            <input type="text" class="nome" id="cd4" name="cd4" placeholder="Valor de CD4 (cel/mm3)" required>

            <label>Data de Realização</label>
            <input type="date" class="nome" id="datarcd4" name="datarcd4" placeholder="Data de Realização" required>

            <label>Data da Proxima Consulta</label>
            <input type="date" class="nome" id="datapc" name="datapc" placeholder="Data da Proxima Consulta" required>

            <hr>
            <input type="submit" value="Gravar">

        </form> 
            </center>
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

