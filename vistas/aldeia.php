<div id="main">
	<div class="inner">
	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
					<center><h3>ALDEIA</h3></center>
				</header>
			<div class="div-bt">
       <center> <button id="myBtn">ADICIONAR ALDEIA</button></center><hr>
        <center>
        <table style="width: 50%;">
                <tr>
                    <td align="center" style="color: black;">ALDEIA</td>
                    <td align="center" style="color: black;">CONSELHEIRO</td>
                </tr> 
                <tr>
                <?php
                    $resultadAldeia = mysqli_query($conexao,"SELECT aldeia.nomeAldeia, utilizador.nomeUtilizador FROM aldeia, utilizador WHERE aldeia.idUtilizador = utilizador.id");
                    while ($linhaAldeia = mysqli_fetch_assoc($resultadAldeia)) {
                        echo "<td align='center'>".$linhaAldeia['nomeAldeia']."</td>
                        <td align='center'>".$linhaAldeia['nomeUtilizador']."</td>";
                    }
                ?>
                </tr>
        </table>
        </center>

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
                <form method="POST" action="../controladora/registarAldeia.php"><br>
                    <input type="text" id="aldeia" class="aldeia" name="aldeia" placeholder="Registar Aldeia"><br>
                    <input type="submit" value="Registar">
                </form> 
            </center>
            </div>
            <div class="modal-footer">
              <!--<h3><button>Fechar</button></h3>-->
            </div>
          </div>

        </div>
        
    </div>
			</div>
		</section>

	</div>
</div>

