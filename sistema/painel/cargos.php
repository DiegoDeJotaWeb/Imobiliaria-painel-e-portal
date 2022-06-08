<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from cargos");



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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NOVO CARGO</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Cargos:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row' id='idCargo'>{$linha['idCargo']}</th>";
                        echo " <td>{$linha['nomeCargo']}</td>";



                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                        echo $linha["idCargo"];



                        echo ',';




                        echo "'" . $linha['nomeCargo'] . "'";



                        echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                        echo $linha["idCargo"];
                        echo ')"><span class="glyphicon glyphicon-trash 
                        text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                        </td>';

                        echo '</tr>';
                    }


                    ?>
                    <!-- <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip na parte superior">
  Tooltip na parte superior
</button> -->
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
                    <h4 class="modal-title" id="exampleModalLabel">Inserir cargo</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="vendor/functions/cadastros/cargos.php">
                        <div class="form-group">
                            <label for="cargo" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo">
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar cargo</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/cadastros/cargos.php" method="POST">
                        <div class="form-group">
                            <label for="nomeCargo" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeCargo" name="nomeCargo">
                            <input type="hidden" id="idcargo" name="idCargo" name="idCargo">
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

    <!-- modal apagar registro -->

    <div class="modal fade" id="modalApagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Apagar cargo</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão?</p>
                </div>
                <div class="modal-footer">
                    <form action="vendor/functions/cadastros/cargos.php" method="POST">
                        <input type="hidden" id="idApagar" name="cargoApagar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Apagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function apagar(id) {
        var idCargo = id;
        console.log(idCargo);
        document.getElementById('idApagar').value = id;
    }

    function editar(id, cargo) {
        // console.log(id);
        // console.log(cargo);
        document.getElementById('idcargo').value = id;
        document.getElementById('nomeCargo').value = cargo;
    }


    // https://www.devmedia.com.br/crud-com-php-pdo/28873
    // https://acervolima.com/como-fazer-upload-de-imagens-em-mysql-usando-php-pdo/
    // https://pt.stackoverflow.com/questions/21674/setar-option-como-selected-com-base-em-valores-do-banco-de-dados
</script>