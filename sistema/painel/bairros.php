<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from bairro");



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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> Novo bairro</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Bairro:</h4>
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

                        echo "<th scope='row'>{$linha['idBairro']}</th>";
                        echo " <td>{$linha['nomeBairro']}</td>";
                        echo " <td>{$linha['statusBairro']}</td>";
                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                        echo $linha["idBairro"];



                        echo ',';




                        echo "'" . $linha['nomeBairro'] . "'";

                        echo ',';




                        echo "'" . $linha['statusBairro'] . "'";

                        echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                        echo $linha["idBairro"];
                        echo ',';




                        echo "'" . $linha['nomeBairro'] . "'";
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
                    <h4 class="modal-title" id="exampleModalLabel">Inserir bairro</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="vendor/functions/cadastros/bairros.php">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeBairro" name="nomeBairro">
                        </div>

                        <div class="form-group">
                            <label for="statusBairro">Status:</label>
                            <select class="form-control" id="statusBairro" name="statusBairro">
                                <option value="Ativo">Ativo</option>
                                <option value="Desativo">Desativo</option>
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal editar registro -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar bairro</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/cadastros/bairros" method="post">
                        <div class="form-group">
                            <label for="bairroNome" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="bairroNome" name="bairroNome">
                        </div>
                        <div class="form-group">

                            <label for="bairroStatus">Status:</label>
                            <select class="form-control" id="bairroStatus" name="bairroStatus">
                                <option value="Ativo">Ativo</option>
                                <option value="Desativo">Desativo</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">

                    <input type="hidden" id="idBairro" name="idBairro">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- modal apagar registro -->

    <div class="modal fade" id="modalApagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Apagar bairro</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão? <span class="text-danger"><br>- ID: <span id="id-conf-apagar"></span> <br>- NOME: <span id="nome-conf-apagar"></span></span></p>
                </div>
                <div class="modal-footer">
                    <form action="vendor/functions/cadastros/bairros" method="post">
                        <input type="hidden" id="idApagar" name="bairroApagar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Apagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    function apagar(id, nome) {
        var idBairro = id;
        console.log(idBairro);
        document.getElementById('idApagar').value = id;
        document.getElementById('id-conf-apagar').innerHTML = id;
        document.getElementById('nome-conf-apagar').innerHTML = nome;


    }


    function editar(id, bairro, status) {


        // console.log(id);
        // console.log(bairro);
        // console.log(status);
        document.getElementById('idBairro').value = id;
        document.getElementById('bairroNome').value = bairro;
        document.getElementById('bairroStatus').value = status;


        if (status == "Ativo") {
            var text = 'Ativo';
            var select = document.querySelector('#bairroStatus');
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].text === text) {
                    select.selectedIndex = i;
                    break;
                }
            }
        } else {
            var text = 'Desativo';
            var select = document.querySelector('#bairroStatus');
            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].text === text) {
                    select.selectedIndex = i;
                    break;
                }
            }
        }


    }
</script>