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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NOVO USUARIO</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Usuarios:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Senha</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idCargo']}</th>";
                        echo " <td>{$linha['nomeCargo']}</td>";
                        echo  '<td><img class="media-object"  src="./images/b3.jpg"  data-holder-rendered="true" alt="" style="width: 50px; height: 50px;"></td>';
                        echo " <td>{$linha['nomeCargo']}</td>";
                        echo " <td>funcionario@email.com.br</td>";
                        echo " <td>(11)99999999</td>";
                        echo " <td>senha</td>";
                        echo " <td>Administrador</td>";



                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" ><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo"><span class="glyphicon glyphicon-trash 
                            text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInformacao" data-whatever="@mdo"><i class="fa fa-info-circle text-white" data-toggle="tooltip" data-placement="top" title="Informações do registro"></i></button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInformacao" data-whatever="@mdo"><i class="fa fa-file-image-o" data-toggle="tooltip" data-placement="top" title="Arquivos de imagens"></i></button>

                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInformacao" data-whatever="@mdo"><i class="fa fa-file-o text-white" data-toggle="tooltip" data-placement="top" title="Arquivos do registro"></i></button>
                            

                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalPermissao" data-whatever="@mdo"><i class="fa fa-file-o text-white" data-toggle="tooltip" data-placement="top" title="Arquivos do registro"></i></button>

                            
                            
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
                    <h4 class="modal-title" id="exampleModalLabel">Inserir usuario</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar usuario</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Cargo:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option> </option>
                                <option>Cargo 1</option>
                                <option>Cargo 2</option>
                                <option>Cargo 3</option>
                                <option>Cargo 4</option>
                                <option>Cargo 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Telefone</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Senha:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option> </option>
                                <option>Super Administrador</option>
                                <option>Administrador</option>
                                <option>Usuario 1</option>
                                <option>Usuario 2</option>
                                <option>Usuario 3</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar Usuario</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão de <span>(Nome completo do usuario)</span>? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Apagar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal apagar registro -->

<div class="modal fade" id="modalPermissao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Permissões de Usuario</h4>
            </div>
            <div class="modal-body">

                <div class="row" id="listar-permissoes">
                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(1,23)">
                        <label class="labelcheck">
                            Home
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(3,23)">
                        <label class="labelcheck">
                            Cadastro de Cargos
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(4,23)">
                        <label class="labelcheck">
                            Cadastro de Tipos Imóveis
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(5,23)">
                        <label class="labelcheck">
                            Cadastro de Cidades
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(6,23)">
                        <label class="labelcheck">
                            Cadastros de Bairros
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(7,23)">
                        <label class="labelcheck">
                            Cadastro de Contas Bancárias
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(8,23)">
                        <label class="labelcheck">
                            Cadastro de Frequências
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(9,23)">
                        <label class="labelcheck">
                            Cadastro de Acessos
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(10,23)">
                        <label class="labelcheck">
                            Imóveis Cadastrados
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(11,23)">
                        <label class="labelcheck">
                            Imóveis para Venda
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(12,23)">
                        <label class="labelcheck">
                            Imóveis para Locação
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(13,23)">
                        <label class="labelcheck">
                            Imóveis já Vendidos
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(14,23)">
                        <label class="labelcheck">
                            Imóveis Já Alugados
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(15,23)">
                        <label class="labelcheck">
                            Imóveis Inativos
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(16,23)">
                        <label class="labelcheck">
                            Cadastro de Funcionários
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(17,23)">
                        <label class="labelcheck">
                            Cadastro de Proprietários
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(18,23)">
                        <label class="labelcheck">
                            Cadastro de Compradores
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(19,23)">
                        <label class="labelcheck">
                            Cadastro de Locatários
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(20,23)">
                        <label class="labelcheck">
                            Gestão de Usuários e Permissões
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(21,23)">
                        <label class="labelcheck">
                            Agenda
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(22,23)">
                        <label class="labelcheck">
                            Tarefas dos Usuários
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(23,23)">
                        <label class="labelcheck">
                            Contas à Pagar
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(24,23)">
                        <label class="labelcheck">
                            Contas à Receber
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(25,23)">
                        <label class="labelcheck">
                            Extrato Caixa Movimentações
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(26,23)">
                        <label class="labelcheck">
                            Comissões
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(27,23)">
                        <label class="labelcheck">
                            Lista de Vendas Financeiro
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(28,23)">
                        <label class="labelcheck">
                            Lista de Aluguéis Financeiro
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(29,23)">
                        <label class="labelcheck">
                            Relatório de Movimentações
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(30,23)">
                        <label class="labelcheck">
                            Relatório de Comissões
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(31,23)">
                        <label class="labelcheck">
                            Relatório de Vendas
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(32,23)">
                        <label class="labelcheck">
                            Relatório de Aluguéis
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(33,23)">
                        <label class="labelcheck">
                            Relatório de Contas à Pagar
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(34,23)">
                        <label class="labelcheck">
                            Relatório de Contas à Receber
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(35,23)">
                        <label class="labelcheck">
                            Recibos de Pagamento
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(36,23)">
                        <label class="labelcheck">
                            Proposta de Compra
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(37,23)">
                        <label class="labelcheck">
                            Proposta de Locação
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(38,23)">
                        <label class="labelcheck">
                            Laudo de Vistorias
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(39,23)">
                        <label class="labelcheck">
                            Vendas Júridico
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(40,23)">
                        <label class="labelcheck">
                            Aluguéis Jurídico
                        </label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" value="" id="" onclick="adicionarPermissao(41,23)">
                        <label class="labelcheck">
                            Configurações do Sistema
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                    </div>

                    <div class="col-md-6">
                        <input class="form-check-input" type="checkbox" id="input-todos" onchange="marcarTodos()">
                        <label class="">Marcar Todos</label>
                    </div>
                </div>

                <br>
                <input type="hidden" name="id" id="id-usuario" value="23">
                <small>
                    <div id="mensagem-permissao" align="center" class="mt-3"></div>
                </small>






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Apagar</button>
            </div>
        </div>
    </div>
</div>
</div>