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
                
        <table width="100%" border="2" >
                <tr style="border-bottom: 1px solid black;">
                    <td align="center"><b>Membro</b></td>
                    <td align="center"><b>Diagnostico HIV</b></td>
                    <td align="center"><b>Inicio Tarv</b></td>
                    <td align="center"><b>Ultima Consulta</b></td>
                    <td align="center"><b>Carga Viral</b></td>
                    <td align="center"><b>Valor CD4</b></td>
                    <td align="center"><b>Realizacao CD4|CV</b></td>
                </tr> 
            <tr>
                <?php
                    $resultadAldeia = mysqli_query($conexao,"SELECT * FROM consulta, membro WHERE consulta.idMembro = membro.id");
                    while ($linhaAldeia = mysqli_fetch_assoc($resultadAldeia)) {
                        echo "<tr><td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['nome']." ".$linhaAldeia['apelido']."</td>
                        <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['data']."</td>
                        <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['dataInicioTARV']."</td>
                        <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['dataUltimaConsulta']."</td>
                        <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['cargaViral']."</td>
                        <td align='center' style='border-bottom: 1px solid black; border-right: 1px solid black;'>".$linhaAldeia['valorCD4']."</td>
                        <td align='center' style='border-bottom: 1px solid black;'>".$linhaAldeia['dataRealizacaoCD4']."</td></tr>";
                    }
                ?>
            </tr>
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

