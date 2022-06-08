<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from contaBancaria");



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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NOVA CONTA BANCARIA</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Contas bancarias:</h4>

<?php 

if ($query->rowCount() == 0) {
    // echo $linha->rowCount();
    echo '<div class="col-xs-12 col-md-12 bs-example widget-shadow" style="padding:10px 5px; margin-top: 0px;" id="listar">
            <small>Não possui nenhum registro cadastrado!
            </small>
        </div>';
}else{
    

?>


            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Banco</th>
                        <th>Conta</th>
                        <th>Agência</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                       
                        
                            echo '<tr>';
                        
                            echo "<th scope='row'>{$linha['idContaBancaria']}</th>";
                            echo " <td>{$linha['nomeContaBancaria']}</td>";
                            echo " <td>{$linha['bancoContaBancaria']}</td>";
                            echo " <td>{$linha['contaContaBancaria']}</td>";
                            echo " <td>{$linha['agenciaContaBancaria']}</td>";

                            echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                            echo $linha["idContaBancaria"];



                            echo ',';




                            echo "'" . $linha['nomeContaBancaria'] . "'";
                            echo ',';
                            echo "'" . $linha['bancoContaBancaria'] . "'";
                            echo ',';
                            echo "'" . $linha['contaContaBancaria'] . "'";
                            echo ',';
                            echo "'" . $linha['agenciaContaBancaria'] . "'";



                            echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                            echo $linha["idContaBancaria"];
                            echo ',';




                            echo "'" . $linha['nomeContaBancaria'] . "'";
                            echo ')"><span class="glyphicon glyphicon-trash 
                        text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                                                    
                        </td>';
                        
                        echo '</tr>';
                    }

                    ?>


                </tbody>
            </table>
            <?php }?>
        </div>

    </div>


    <!-- modal inserir registro -->
    <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir conta bancaria</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="vendor/functions/cadastros/contasBanco.php">
                        <div class="form-group">
                            <label for="nomeContaBancaria" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeContaBancaria" name="nomeContaBancaria">
                        </div>
                        <div class="form-group">
                            <label for="bancoContaBancaria" class="control-label">Banco:</label>
                            <input type="text" class="form-control" id="bancoContaBancaria" name="bancoContaBancaria">
                        </div>
                        <div class="form-group">
                            <label for="contaContaBancaria" class="control-label">Conta:</label>
                            <input type="text" class="form-control" id="contaContaBancaria" name="contaContaBancaria">
                        </div>
                        <div class="form-group">
                            <label for="agenciaContaBancaria" class="control-label">Agência:</label>
                            <input type="text" class="form-control" id="agenciaContaBancaria" name="agenciaContaBancaria">
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar conta bancaria</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="vendor/functions/cadastros/contasBanco.php">
                        <div class="form-group">
                            <label for="contaBancariaNome" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="contaBancariaNome" name="contaBancariaNome">
                        </div>
                        <div class="form-group">
                            <label for="contaBancariaBanco" class="control-label">Banco:</label>
                            <input type="text" class="form-control" id="contaBancariaBanco" name="contaBancariaBanco">
                        </div>
                        <div class="form-group">
                            <label for="contaBancariaConta" class="control-label">Conta:</label>
                            <input type="text" class="form-control" id="contaBancariaConta" name="contaBancariaConta">
                        </div>
                        <div class="form-group">
                            <label for="contaBancariaAgencia" class="control-label">Agência:</label>
                            <input type="text" class="form-control" id="contaBancariaAgencia" name="contaBancariaAgencia">
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" id="idContaBancaria" name="idContaBancaria">
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar conta bancaria</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão? <span class="text-danger"><br>- ID: <span id="id-conf-apagar"></span> <br>- NOME: <span id="nome-conf-apagar"></span></span></p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="vendor/functions/cadastros/contasBanco.php">
                        <input type="hidden" id="idContasBancariaApagar" name="contasBancariaApagar">
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

        console.log(id);
        console.log(nome);
        document.getElementById('idContasBancariaApagar').value = id;
        document.getElementById('id-conf-apagar').innerHTML = id;
        document.getElementById('nome-conf-apagar').innerHTML = nome;


    }


    function editar(id, nome, banco, conta, agencia) {


        console.log(id);
        console.log(conta);
        document.getElementById('idContaBancaria').value = id;
        document.getElementById('contaBancariaNome').value = nome;
        document.getElementById('contaBancariaBanco').value = banco;
        document.getElementById('contaBancariaConta').value = conta;
        document.getElementById('contaBancariaAgencia').value = agencia;




    }
</script>