<?php
	
	$resultadoAldeia = mysqli_query($conexao,"SELECT * FROM aldeia");

?>
<div id="main">
	<div class="inner">
	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
					<center><h3>GESTAO GAAC</h3></center>
				</header>
				
				<div class="div-bt">
				<center><button id="myBtn">Criar Grupo GAAC</button></center>
				<hr>
		     <center>
			 <table style="width: 80%;" border="0">
		            
		                <tr>
		                    <td align="center" style="color: black; font-weight:bold;">GRUPO GAAC</td>
		                    <td align="center"  style="color: black; font-weight:bold;">ALDEIA</td>
		                    <td align="center" style="color: black; font-weight:bold;">OPERACOES</td>
		                </tr> 
		                <?php
		                    $query = "SELECT grupogaac.id, grupogaac.nomeGrupo, aldeia.nomeAldeia FROM grupogaac, aldeia WHERE grupogaac.idAldeia = aldeia.id";
		                    $resultado = mysqli_query($conexao,$query);
		                    while ($linha = mysqli_fetch_assoc($resultado)) {
		                    	echo "<tr>
			                    	<td align='center'>".$linha['nomeGrupo']."</td>
			                    	<td align='center'>".$linha['nomeAldeia']."</td>
			                    	<td align='center'><a href='index.php?link=7&id=".$linha['id']."> title='Visualizar o Grupo'><button class='bt bt-dados'>Visualizar Dados do Grupo</button></a> </td>
		                    	</tr>";
		                    }
		                ?>
		        </table>
		        
			 </center>
		    </div>
			</div>
		</section>

	</div>
</div>

<div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <center><h4>CRIAR NOVO GRUPO GAAC</h4></center>
            </div>
            <div class="modal-body">
              <center>
		        <form method="POST" action="../controladora/registarGrupo.php">
                    <label for="fname">Nome do Grupo GAAC</label>
                    <input type="text" id="ngg" name="ngg" class="ngg" placeholder="GAAC...">
                    <label for="country">Aldeia</label>
                    <select id="aldeia" name="aldeia">
                        <?php
                            while ($linhaAldeia=mysqli_fetch_assoc($resultadoAldeia)) {
                            	echo "<option value='".$linhaAldeia['id']."'>".$linhaAldeia['nomeAldeia']."</option>";
                            }
                        ?>    
                    </select><br>
                    <input type="submit" value="ADICIONAR GAAC">
                </form>
		            </center>
            </div>
            <div class="modal-footer">
            </div>
          </div>

        </div>
