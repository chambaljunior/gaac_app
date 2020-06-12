<?php
   // session_start();
    include_once("../modelo/conexao.php");
    $idGrupo = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $queryGrupo = "SELECT membro.id, membro.nid, membro.nome, membro.apelido, consulta.dataUltimaConsulta, membro.cargaViralStatus, consulta.proximaData, grupogaac.dataCriacao from membro,grupogaac, consulta WHERE grupogaac.id = membro.idGrupogaac AND consulta.idMembro = membro.id AND grupogaac.id='$idGrupo' ORDER BY (consulta.id) DESC " ;
    $queryGrupo1 = "SELECT grupogaac.dataCriacao,grupogaac.id,grupogaac.numero,grupogaac.nomeGrupo, utilizador.nomeUtilizador, aldeia.nomeAldeia from grupogaac, utilizador, aldeia WHERE grupogaac.id='$idGrupo' AND grupogaac.idAldeia=aldeia.id AND aldeia.idUtilizador = utilizador.id" ;
    $queryStatus = "SELECT * FROM cargaviralestatus";
    $resultadoGrupo = mysqli_query($conexao,$queryGrupo) or die(mysqli_error($conexao));
    $resultadoGrupo1 = mysqli_query($conexao,$queryGrupo1) or die(mysqli_error($conexao));
    $resultadoStatus = mysqli_query($conexao,$queryStatus) or die(mysqli_error($conexao));
?>

    <div id="main">
    <div class="inner">
    <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                        
                </header>
                
                <div class="div-bt">
                    <center><img src="../content/nnema2.png" width="3%" height="3%" /> </center>

                    <table border="0">
                        <?php
                            while ($linhaGrupo = mysqli_fetch_assoc($resultadoGrupo1)) {
                                echo
                                "<tr>
                                    <td class='esquerda'><b>Nº GAAC: </b>".$linhaGrupo['id']."<td>
                                    <td class='esquerda'><b>Nome GAAC: </b>".$linhaGrupo['nomeGrupo']."<td>
                                    <td class='esquerda'><b>Data de Criação:</b>".$linhaGrupo['dataCriacao']."<td>
                                </tr>
                                <tr>
                                    <td colspan='3' class='esquerda'><b>Nome do Conselheiro: </b>".$linhaGrupo['nomeUtilizador']."</td>
                                </tr>
                                ";    
                            }
                            
                        ?>

                    </table>
                    <hr>
                </div>
                <table border="1">
            <thead>
                <tr>
                    <td>NID</td>
                    <td>Nome</td>
                    <td>Ultima Consulta</td>
                    <td>Proxima Consulta</td>
                    <td>Status</td>
                    <td>Alterar Status</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    while ($linhaMembro = mysqli_fetch_assoc($resultadoGrupo)) {
                        $id = $linhaMembro['id'];
                        echo "<tr>
                            <td>".$linhaMembro['nid']."</td>
                            <td>".$linhaMembro['nome']." ".$linhaMembro['apelido']."</td>
                            <td>".$linhaMembro['dataUltimaConsulta']."</td>
                            <td>".$linhaMembro['proximaData']."</td>
                            <td>".$linhaMembro['cargaViralStatus']."</td>
                            <td>
                                <form method='POST' action='../controladora/actualizarEstado.php'>
                                    <select name='estado'>
                                        <option value='Activo'>Activo</option>
                                        <option value='Obito'>Obito</option>
                                        <option value='Transferido'>Transferido</option>
                                        <option value='Retornado'>Retornado</option>
                                        <option value='Gravida/Lactante'>Gravida/Lactante</option>
                                    </select>
                                </td><td>
                                    <input class='form-control' id='id' value=".$linhaMembro['id']." name='id' type='hidden'>
                                    <input type='submit' value='OK'>
                                </form></td>
                            </td>
                            <td><a href='index.php?link=8&id=$id'>Mais </a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
            </div>
        </section>

    </div>
</div>

    

    <div class="div-bt">
        
    </div>

