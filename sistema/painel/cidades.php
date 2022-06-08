<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from cidade");



// $res = $query->fetchAll(PDO::FETCH_ASSOC);
// $total_res = @count($res);

//recuperar os dados do usuario logado


?>

<div id="page-wrapper">
    <?php

    //recuperar os dados do usuario logado

    // echo $total_res;
    // if ($total_res > 0) {
    //     echo "teste";
    // }
    ?>
    <div class="tables">
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> Nova cidade</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Imóveis:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idCidade']}</th>";
                        echo " <td>{$linha['nomeCidade']}</td>";
                        echo " <td>{$linha['statusCidade']}</td>";
                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                        echo $linha["idCidade"];



                        echo ',';




                        echo "'" . $linha['nomeCidade'] . "'";

                        echo ',';




                        echo "'" . $linha['statusCidade'] . "'";

                        echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                        echo $linha["idCidade"];
                        echo ',';




                        echo "'" . $linha['nomeCidade'] . "'";
                        echo ')"><span class="glyphicon glyphicon-trash 
                        text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                                                    
                        </td>';

                        echo '</tr>';
                    }


                    ?>



                </tbody>
            </table>
        </div>

    </div>


    <!-- modal inserir registro -->
    <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir cidade</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/cadastros/cidades.php" method="POST">
                        <div class="form-group">
                            <label for="cidadeNome" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="cidadeNome" name="cidadeNome">
                        </div>

                        <div class="form-group">

                            <label for="exampleFormControlSelect1">Status:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="statusCidade">
                                <option> </option>
                                <option selected>Ativo</option>
                                <option>Desativo</option>
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal editar registro -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar cidade</h4>
                </div>
                <div class="modal-body">
                <form action="vendor/functions/cadastros/cidades.php" method="POST">
                        <div class="form-group">
                            <label for="nomeCidade" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeCidade" name="nomeCidade">
                        </div>
                        <div class="form-group">

                            <label for="statusCidade">Status:</label>
                            <select class="form-control" id="statusCidade" name="statusCidade">
                                <option value="Ativo">Ativo</option>
                                <option value="Desativo">Desativo</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" id="idCidade" name="idCidade" name="idCidade">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal apagar registro -->

    <div class="modal fade" id="modalApagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Apagar cidade</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão? <span class="text-danger"><br>- ID: <span id="id-conf-apagar"></span> <br>- NOME: <span id="nome-conf-apagar"></span></span></p>
                </div>
                <div class="modal-footer">
                    <form action="vendor/functions/cadastros/cidades.php" method="POST">
                        <input type="hidden" id="idApagar" name="cidadeApagar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Apagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="teste"></div>

</div>

<script>
    function apagar(id,nome) {
        var idCargo = id;
        console.log(idCargo);
        document.getElementById('idApagar').value = id;
        document.getElementById('id-conf-apagar').innerHTML = id;
        document.getElementById('nome-conf-apagar').innerHTML = nome;

        
    }

    function editar(id, cidade, status) {
        // console.log(id);
        // console.log(cidade);
        // console.log(status);
        document.getElementById('idCidade').value = id;
        document.getElementById('nomeCidade').value = cidade;
        document.getElementById('statusCidade').value = status;


        if (status == "Ativo") {
            var text = 'Ativo';
            var select = document.querySelector('#statusCidade');
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].text === text) {
                    select.selectedIndex = i;
                    break;
                }
            }
        }else{
            var text = 'Desativo';
            var select = document.querySelector('#statusCidade');
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].text === text) {
                    select.selectedIndex = i;
                    break;
                }
            }
        }
    

    }
</script>

<script>

</script>