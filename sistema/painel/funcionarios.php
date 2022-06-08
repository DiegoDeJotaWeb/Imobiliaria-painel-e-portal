<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from funcionarios");



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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NOVO FUNCIONARIO</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Usuarios:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>CPF</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Telefone</th>

                        <th>Ação</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idFuncionario']}</th>";
                        echo " <td>{$linha['nomeFuncionario']}</td>";
                        echo  '<td><img class="media-object"  src="./images/funcionarios/' . $linha["fotoFuncionario"] . ' "  data-holder-rendered="true" alt="" style="width: 50px; height: 50px;"></td>';
                        echo " <td>{$linha['cpfFuncionario']}</td>";
                        echo " <td>{$linha['cargoFuncionario']}</td>";
                        echo " <td>{$linha['emailFuncionario']}</td>";
                        echo " <td>{$linha['telefoneFuncionario']}</td>";




                        echo '<td>
                        

                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                        echo       $linha["idFuncionario"];
                        echo ",";
                        echo "'" . $linha["nomeFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["cpfFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["emailFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["telefoneFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["dataAdmissaoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["cargoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["creciFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["bancoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["tipoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["agenciaFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["contaFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["pixFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["enderecoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["administradorFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["senhaFuncionario"] . "'";
                        echo ",";
                        echo  "'" . $linha["obsFuncionario"] . "'";



                        echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>






                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                        echo       $linha["idFuncionario"];
                        echo ",";
                        echo "'" . $linha["nomeFuncionario"] . "'";

                        echo ')"><span class="glyphicon glyphicon-trash 
                            text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>
                            |
                            
                           
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalInformacao" data-whatever="@mdo" onclick="informacao(';
                        echo       $linha["idFuncionario"];
                        echo ",";
                        echo "'" . $linha["nomeFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["cpfFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["emailFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["telefoneFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["dataAdmissaoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["cargoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["creciFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["bancoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["tipoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["agenciaFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["contaFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["pixFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["enderecoFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["administradorFuncionario"] . "'";
                        echo ",";
                        echo "'" . $linha["senhaFuncionario"] . "'";
                        echo ",";
                        echo  "'" . $linha["obsFuncionario"] . "'";



                        echo ')"><i class="fa fa-info-circle text-white" data-toggle="tooltip" data-placement="top" title="Informações do registro"></i></button>
                           
                            | 

                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalPermissao" data-whatever="@mdo" onclick="permissao(';
                            echo  $linha["idFuncionario"];
                            
                            echo ')"><i class="fa fa-file-o text-white" data-toggle="tooltip" data-placement="top" title="Arquivos do registro"></i></button>
                            
                        </td>';


                        echo '</tr>';
                    }


                    ?>



                </tbody>
            </table>
        </div>

    </div>
    <!--  -->

    <!-- modal inserir registro -->
    <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir funcionario</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/pessoas/funcionario.php" method="POST" enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomeFuncionario" class="control-label">Nome:</label>
                                    <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpfFuncionario" class="control-label">CPF:</label>
                                    <input type="text" class="form-control" id="cpfFuncionario" name="cpfFuncionario" onkeypress="mascarat(this, '###.###.###-##')" maxlength="14">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailFuncionario" class="control-label">Email:</label>
                                    <input type="text" class="form-control" id="emailFuncionario" name="emailFuncionario">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefoneFuncionario" class="control-label">Telefone:</label>
                                    <input type="text" class="form-control" id="telefoneFuncionario" name="telefoneFuncionario">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dataAdmissaoFuncionario" class="control-label">Data admissão:</label>
                                    <input type="date" class="form-control" id="dataAdmissaoFuncionario" name="dataAdmissaoFuncionario">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cargoFuncionario" class="control-label">Cargo:</label>
                                    <select class="form-control" id="cargoFuncionario" name="cargoFuncionario">
                                        <option value=""></option>
                                        <?php
                                        $query1 = $pdo->query("select * from cargos");
                                        while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                                            echo   "<option ='{$linha1['nomeCargo']}'>{$linha1['nomeCargo']}</option>";
                                        }

                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="creciFuncionario" class="control-label">CRECI (Se For Corretor):</label>
                                    <input type="text" class="form-control" id="creciFuncionario" placeholder="MG-4202" name="creciFuncionario">
                                </div>
                            </div>




                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bancoFuncionario" class="control-label">Banco:</label>
                                    <input type="text" class="form-control" id="bancoFuncionario" name="bancoFuncionario">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tipoFuncionario" class="control-label">Tipo:</label>
                                    <select class="form-control" id="tipoFuncionario" name="tipoFuncionario">
                                        <option value=""></option>
                                        <option value="Corrente">Corrente</option>
                                        <option value="Poupança">Poupança</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="agenciaFuncionario" class="control-label">Agência:</label>
                                    <input type="text" class="form-control" id="agenciaFuncionario" name="agenciaFuncionario">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="contaFuncionario" class="control-label">Conta:</label>
                                    <input type="text" class="form-control" id="contaFuncionario" name="contaFuncionario">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pixFuncionario" class="control-label">Chave Pix:</label>
                                    <input type="text" class="form-control" id="pixFuncionario" name="pixFuncionario">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="enderecoFuncionario" class="control-label">Endereço:</label>
                                    <input type="text" class="form-control" id="enderecoFuncionario" placeholder="Rua X Número 20 Bairro X" name="enderecoFuncionario">
                                </div>
                            </div>



                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fotoFuncionario" class="control-label">Foto:</label>
                                    <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <img src="images/a.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="creciFuncionario" class="control-label">Administrador:</label>
                                    <select class="form-control" id="administradorFuncionario" name="administradorFuncionario">

                                        <option value="Nao" selected>Não</option>
                                        <option value="Sim">Sim</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="creciFuncionario" class="control-label">Senha:</label>
                                    <input type="text" class="form-control" id="senhaFuncionario" name="senhaFuncionario" placeholder="admin">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="obsFuncionario" class="control-label">OBS (Max 500 Caracteres):</label>
                                    <div>
                                        <textarea style="width: 100%; height: 100px;" name="obsFuncionario" id="obsFuncionario"></textarea><br>

                                    </div>
                                </div>
                            </div>

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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Editar funcionario</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/pessoas/funcionario.php" method="POST" enctype='multipart/form-data'>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioNome" class="control-label">Nome:</label>
                                    <input type="text" class="form-control" id="funcionarioNome" name="funcionarioNome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioCpf" class="control-label">CPF:</label>
                                    <input type="text" class="form-control" id="funcionarioCpf" name="funcionarioCpf" onkeypress="mascarat(this, '###.###.###-##')" maxlength="14">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioEmail" class="control-label">Email:</label>
                                    <input type="text" class="form-control" id="funcionarioEmail" name="funcionarioEmail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioTelefone" class="control-label">Telefone:</label>
                                    <input type="text" class="form-control" id="funcionarioTelefone" name="funcionarioTelefone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="funcionarioDataAdmissao" class="control-label">Data admissão:</label>
                                    <input type="date" class="form-control" id="funcionarioDataAdmissao" name="funcionarioDataAdmissao">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="funcionarioCargo" class="control-label">Cargo:</label>
                                    <select class="form-control" id="funcionarioCargo" name="funcionarioCargo">
                                        <option value=""></option>
                                        <?php
                                        $query1 = $pdo->query("select * from cargos");
                                        while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                                            echo   "<option ='{$linha1['nomeCargo']}'>{$linha1['nomeCargo']}</option>";
                                        }

                                        ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="funcionarioCreci" class="control-label">CRECI (Se For Corretor):</label>
                                    <input type="text" class="form-control" id="funcionarioCreci" placeholder="MG-4202" name="funcionarioCreci">
                                </div>
                            </div>



                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioBanco" class="control-label">Banco:</label>
                                    <input type="text" class="form-control" id="funcionarioBanco" name="funcionarioBanco">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioTipo" class="control-label">Tipo:</label>
                                    <select class="form-control" id="funcionarioTipo" name="funcionarioTipo">
                                        <option value=""></option>
                                        <option value="Corrente">Corrente</option>
                                        <option value="Poupança">Poupança</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioAgencia" class="control-label">Agência:</label>
                                    <input type="text" class="form-control" id="funcionarioAgencia" name="funcionarioAgencia">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioConta" class="control-label">Conta:</label>
                                    <input type="text" class="form-control" id="funcionarioConta" name="funcionarioConta">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioPix" class="control-label">Chave Pix:</label>
                                    <input type="text" class="form-control" id="funcionarioPix" name="funcionarioPix">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="funcionarioEndereco" class="control-label">Endereço:</label>
                                    <input type="text" class="form-control" id="funcionarioEndereco" placeholder="Rua X Número 20 Bairro X" name="funcionarioEndereco">
                                </div>
                            </div>



                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioFoto" class="control-label">Foto:</label>
                                    <input type="file" class="form-control" id="funcionarioFoto" name="funcionarioFoto">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <img src="images/a.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="creciFuncionario" class="control-label">Administrador:</label>
                                    <select class="form-control" id="funcionarioAdministrador" name="funcionarioAdministrador">

                                        <option value="Nao">Não</option>
                                        <option value="Sim">Sim</option>



                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="funcionarioSenha" class="control-label">Senha:</label>
                                    <input type="text" class="form-control" id="funcionarioSenha" name="funcionarioSenha">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="funcionarioObs" class="control-label">OBS (Max 500 Caracteres):</label>
                                    <div>
                                        <textarea style="width: 100%; height: 100px;" name="funcionarioObs" id="funcionarioObs"></textarea><br>

                                    </div>
                                </div>
                            </div>

                        </div>




                </div>
                <div class="modal-footer">
                    <input type="hidden" id="funcionarioId" name="funcionarioId">
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar Usuario</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão ?<span class="text-danger"><br>- ID: <span id="id-conf-apagar"></span> <br>- NOME: <span id="nome-conf-apagar"></span></span> </p>
                </div>
                <div class="modal-footer">
                    <form action="vendor/functions/pessoas/funcionario.php" method="POST">
                        <input type="hidden" name="idFuncionarioApagar" id="idFuncionarioApagar">


                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Apagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal informação -->

    <div class="modal fade" id="modalInformacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Informações</h4>
                </div>
                <div class="modal-body">

                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-2">
                            <span><b>ID: </b></span>
                            <span id="funcionarioIdInfo"></span>
                        </div>
                        <div class="col-md-10">
                            <span><b>Nome: </b></span>
                            <span id="funcionarioNomeInfo"></span>
                        </div>

                    </div>

                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-4">
                            <span><b>CPF: </b></span>
                            <span id="funcionarioCpfInfo"></span>
                        </div>
                        <div class="col-md-4">
                            <span><b>Telefone: </b></span>
                            <span id="funcionarioTelefoneInfo"></span>
                        </div>
                        <div class="col-md-4">
                            <span><b>Cargo: </b></span>
                            <span id="funcionarioCargoInfo"></span>
                        </div>
                    </div>


                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-12">
                            <span><b>Email: </b></span>
                            <span id="funcionarioEmailInfo"></span>
                        </div>

                    </div>


                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-12">
                            <span><b>Endereço: </b></span>
                            <span id="funcionarioEnderecoInfo"></span>
                        </div>
                    </div>


                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-6">
                            <span><b>Data de Admissão: </b></span>
                            <span id="funcionarioDataAdmissaoInfo"></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Creci: </b></span>
                            <span id="funcionarioCreciInfo"></span>
                        </div>
                    </div>



                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-6">
                            <span><b>Banco: </b></span>
                            <span id="funcionarioBancoInfo"></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Tipo: </b></span>
                            <span id="funcionarioTipoInfo"></span>
                        </div>
                    </div>

                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-6">
                            <span><b>Agencia: </b></span>
                            <span id="funcionarioAgenciaInfo"></span>
                        </div>
                        <div class="col-md-6">
                            <span><b>Conta: </b></span>
                            <span id="funcionarioContaInfo"></span>
                        </div>
                    </div>

                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-12">
                            <span><b>Chave Pix: </b></span>
                            <span id="funcionarioPixInfo"></span>
                        </div>

                    </div>
                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-6">
                            <span><b>Administrador: </b></span>
                            <span id="funcionarioAdministrador1"></span>
                        </div>


                        <div class="col-md-6">
                            <span><b>Senha: </b></span>
                            <span id="funcionarioSenha1"></span>
                        </div>

                    </div>



                    <div class="row" style="border-bottom: 1px solid #cac7c7;">
                        <div class="col-md-12">
                            <span><b>OBS: </b></span>
                            <span id="funcionarioObsInfo"></span>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <img width="200px" id="funcionarioInfo" src="images/perfil/03-05-2022-21-43-26-b3.jpg">
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Apagar</button>
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
                <form action="vendor/functions/pessoas/permissoes.php" method="post">
                    <div class="modal-body">

                        <div class="row" id="listar-permissoes">
                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="homePermissoes" name="homePermissoes">
                                <label class="labelcheck">
                                    Home
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroCargosPermissoes" name="cadastroCargosPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Cargos
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroTiposImoveisPermissoes" name="cadastroTiposImoveisPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Tipos Imóveis
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroCidadesPermissoes" name="cadastroCidadesPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Cidades
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroBairrosPermissoes" name="cadastroBairrosPermissoes">
                                <label class="labelcheck">
                                    Cadastros de Bairros
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroContasBancariasPermissoes" name="cadastroContasBancariasPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Contas Bancárias
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroFrequenciaPermissoes" name="cadastroFrequenciaPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Frequências
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroAcessosPermissoes" name="cadastroAcessosPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Acessos
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisCadastradosPermissoes" name="imoveisCadastradosPermissoes">
                                <label class="labelcheck">
                                    Imóveis Cadastrados
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisVendaPermissoes" name="imoveisVendaPermissoes">
                                <label class="labelcheck">
                                    Imóveis para Venda
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisLocacaoPermissoes" name="imoveisLocacaoPermissoes">
                                <label class="labelcheck">
                                    Imóveis para Locação
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisVendidosPermissoes" name="imoveisVendidosPermissoes">
                                <label class="labelcheck">
                                    Imóveis já Vendidos
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisAlugadosPermissoes" name="imoveisAlugadosPermissoes">
                                <label class="labelcheck">
                                    Imóveis Já Alugados
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="imoveisInativosPermissoes" name="imoveisInativosPermissoes">
                                <label class="labelcheck">
                                    Imóveis Inativos
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroFuncionarioPermissoes" name="cadastroFuncionarioPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Funcionários
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroProprietariosPermissoes" name="cadastroProprietariosPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Proprietários
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroCompradoresPermissoes" name="cadastroCompradoresPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Compradores
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="cadastroLocatariosPermissoes" name="cadastroLocatariosPermissoes">
                                <label class="labelcheck">
                                    Cadastro de Locatários
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="gestaoUsuariosPermissoes" name="gestaoUsuariosPermissoes">
                                <label class="labelcheck">
                                    Gestão de Usuários e Permissões
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="agendaPermissoes" name="agendaPermissoes">
                                <label class="labelcheck">
                                    Agenda
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="tarefasPermissoes" name="tarefasPermissoes">
                                <label class="labelcheck">
                                    Tarefas dos Usuários
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="contasAPagarPermissoes" name="contasAPagarPermissoes">
                                <label class="labelcheck">
                                    Contas à Pagar
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="contasAReceberPermissoes" name="contasAReceberPermissoes">
                                <label class="labelcheck">
                                    Contas à Receber
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="extratoCaixaMovimentacoesPermissoes" name="extratoCaixaMovimentacoesPermissoes">
                                <label class="labelcheck">
                                    Extrato Caixa Movimentações
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="comissoesPermissoes" name="comissoesPermissoes">
                                <label class="labelcheck">
                                    Comissões
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="listaVendasFinanceiroPermissoes" name="listaVendasFinanceiroPermissoes">
                                <label class="labelcheck">
                                    Lista de Vendas Financeiro
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="listaAlugueisFinanceiroPermissoes" name="listaAlugueisFinanceiroPermissoes">
                                <label class="labelcheck">
                                    Lista de Aluguéis Financeiro
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioMovimentacoesPermissoes" name="rHNZaMZo1zi4gcvnJPQLic8YM9bEFa1iUt">
                                <label class="labelcheck">
                                    Relatório de Movimentações
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioComissoesPermissoes" name="relatorioComissoesPermissoes">
                                <label class="labelcheck">
                                    Relatório de Comissões
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioVendasPermissoes" name="relatorioVendasPermissoes">
                                <label class="labelcheck">
                                    Relatório de Vendas
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioAlugueisPermissoes" name="relatorioAlugueisPermissoes">
                                <label class="labelcheck">
                                    Relatório de Aluguéis
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioContasAPagarPermissoes" name="relatorioContasAPagarPermissoes">
                                <label class="labelcheck">
                                    Relatório de Contas à Pagar
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="relatorioContasAReceberPermissoes" name="relatorioContasAReceberPermissoes">
                                <label class="labelcheck">
                                    Relatório de Contas à Receber
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="reciboPagamentoPermissoes" name="reciboPagamentoPermissoes">
                                <label class="labelcheck">
                                    Recibos de Pagamento
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="propostaCompraPermissoes" name="propostaCompraPermissoes">
                                <label class="labelcheck">
                                    Proposta de Compra
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="propostaLocacaoPermissoes" name="propostaLocacaoPermissoes">
                                <label class="labelcheck">
                                    Proposta de Locação
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="laudoVistoriaPermissoes" name="laudoVistoriaPermissoes">
                                <label class="labelcheck">
                                    Laudo de Vistorias
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="vendasJuridicoPermissoes" name="vendasJuridicoPermissoes">
                                <label class="labelcheck">
                                    Vendas Júridico
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="alugueisJuridicoPermissoes" name="alugueisJuridicoPermissoes">
                                <label class="labelcheck">
                                    Aluguéis Jurídico
                                </label>
                            </div>

                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="checkbox" value="s" id="configuracaoPermissoes" name="configuracaoPermissoes" >
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
                                <label class="" id="todosPermissoes">Marcar Todos</label>
                            </div>
                        </div>

                        <br>
                        <input type="text" name="idUsuario" id="idUsuario">
                        <small>
                            <div id="mensagem-permissao" class="mt-3"></div>
                        </small>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>



    </div>

</div>



<script>
    function apagar(id, nome) {

        document.getElementById('idFuncionarioApagar').value = id;
        console.log(document.getElementById('id-conf-apagar').innerHTML = id);
        console.log(document.getElementById('nome-conf-apagar').innerHTML = nome);
    }








    function editar(id, nome, cpf, email, telefone, data, cargo, creci, banco, tipo, agencia, conta, pix, endereco, administrador, senha, obs) {

        // console.log(id);
        // console.log(nome);
        // console.log(cpf);
        // console.log(email);
        // console.log(telefone);
        // console.log(data);
        // console.log(cargo);
        // console.log(creci);
        // console.log(banco);
        // console.log(tipo);
        // console.log(agencia);
        // console.log(conta);
        // console.log(pix);
        // console.log(endereco);
        // console.log(obs);


        // document.getElementById('teste').value = id;
        document.getElementById('funcionarioId').value = id;
        document.getElementById('funcionarioNome').value = nome;
        document.getElementById('funcionarioCpf').value = cpf;
        document.getElementById('funcionarioEmail').value = email;
        document.getElementById('funcionarioTelefone').value = telefone;
        document.getElementById('funcionarioDataAdmissao').value = data;
        document.getElementById('funcionarioCargo').value = cargo;
        document.getElementById('funcionarioCreci').value = creci;
        document.getElementById('funcionarioBanco').value = banco;
        document.getElementById('funcionarioTipo').value = tipo;
        document.getElementById('funcionarioAgencia').value = agencia;
        document.getElementById('funcionarioConta').value = conta;
        document.getElementById('funcionarioPix').value = pix;
        document.getElementById('funcionarioEndereco').value = endereco;
        document.getElementById('funcionarioAdministrador').value = administrador;
        document.getElementById('funcionarioSenha').value = senha;

        document.getElementById('funcionarioObs').innerHTML = obs;
        // document.getElementById('funcionarioSenha').value = senha;
    }









    function informacao(id, nome, cpf, email, telefone, data, cargo, creci, banco, tipo, agencia, conta, pix, endereco, administrador, senha, obs) {

        // console.log(id);
        // console.log(nome);
        // console.log(cpf);
        // console.log(email);
        // console.log(telefone);
        // console.log(data);
        // console.log(cargo);
        // console.log(creci);
        // console.log(banco);
        // console.log(tipo);
        // console.log(agencia);
        // console.log(conta);
        // console.log(pix);
        // console.log(endereco);
        // console.log(administrador);
        // console.log(senha);

        // console.log(obs);


        // document.getElementById('teste').value = id;
        document.getElementById('funcionarioIdInfo').innerHTML = id;
        document.getElementById('funcionarioNomeInfo').innerHTML = nome;
        document.getElementById('funcionarioCpfInfo').innerHTML = cpf;
        document.getElementById('funcionarioEmailInfo').innerHTML = email;
        document.getElementById('funcionarioTelefoneInfo').innerHTML = telefone;
        document.getElementById('funcionarioDataAdmissaoInfo').innerHTML = data;
        document.getElementById('funcionarioCargoInfo').innerHTML = cargo;
        document.getElementById('funcionarioCreciInfo').innerHTML = creci;
        document.getElementById('funcionarioBancoInfo').innerHTML = banco;
        document.getElementById('funcionarioTipoInfo').innerHTML = tipo;
        document.getElementById('funcionarioAgenciaInfo').innerHTML = agencia;
        document.getElementById('funcionarioContaInfo').innerHTML = conta;
        document.getElementById('funcionarioPixInfo').innerHTML = pix;
        document.getElementById('funcionarioEnderecoInfo').innerHTML = endereco;

        document.getElementById('funcionarioAdministrador1').innerHTML = administrador;
        document.getElementById('funcionarioSenha1').innerHTML = senha;
        document.getElementById('funcionarioObsInfo').innerHTML = obs;

    }
</script>

<script>
    function mascaraTelefone(campo) {

        function trata(valor, isOnBlur) {

            valor = valor.replace(/\D/g, "");
            valor = valor.replace(/^(\d{2})(\d)/g, "($1)$2");

            if (isOnBlur) {

                valor = valor.replace(/(\d)(\d{4})$/, "$1-$2");
            } else {

                valor = valor.replace(/(\d)(\d{3})$/, "$1-$2");
            }
            return valor;
        }

        campo.onkeypress = function(evt) {

            var code = (window.event) ? window.event.keyCode : evt.which;
            var valor = this.value

            if (code > 57 || (code < 48 && code != 8)) {
                return false;
            } else {
                this.value = trata(valor, false);
            }
        }

        campo.onblur = function() {

            var valor = this.value;
            if (valor.length < 13) {
                this.value = ""
            } else {
                this.value = trata(this.value, true);
            }
        }

        campo.maxLength = 14;
    }

    mascaraTelefone(telefoneFuncionario);
    mascaraTelefone(funcionarioTelefone);
</script>




<script>
    function mascarat(t, mask) {
        var i = t.value.length;
        var saida = mask.substring(1, 0);
        var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
            t.value += texto.substring(0, 1);
        }
    }
</script>

<script>
    function permissao(id){
        document.getElementById('idUsuario').value = id;
    }
</script>


<script>
    function marcarTodos() {

        document.getElementById('homePermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroCargosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroTiposImoveisPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroCidadesPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroBairrosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroContasBancariasPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroFrequenciaPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroAcessosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisCadastradosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisVendaPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisLocacaoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisVendidosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisAlugadosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('imoveisInativosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroFuncionarioPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroProprietariosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroCompradoresPermissoes').setAttribute('checked', 'checked');
        document.getElementById('cadastroLocatariosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('gestaoUsuariosPermissoes').setAttribute('checked', 'checked');
        document.getElementById('agendaPermissoes').setAttribute('checked', 'checked');
        document.getElementById('tarefasPermissoes').setAttribute('checked', 'checked');
        document.getElementById('contasAPagarPermissoes').setAttribute('checked', 'checked');
        document.getElementById('contasAReceberPermissoes').setAttribute('checked', 'checked');

        document.getElementById('extratoCaixaMovimentacoesPermissoes').setAttribute('checked', 'checked');
        document.getElementById('comissoesPermissoes').setAttribute('checked', 'checked');
        document.getElementById('listaVendasFinanceiroPermissoes').setAttribute('checked', 'checked');
        document.getElementById('listaAlugueisFinanceiroPermissoes').setAttribute('checked', 'checked');

        document.getElementById('relatorioMovimentacoesPermissoes').setAttribute('checked', 'checked');
        document.getElementById('relatorioComissoesPermissoes').setAttribute('checked', 'checked');
        document.getElementById('relatorioVendasPermissoes').setAttribute('checked', 'checked');
        document.getElementById('relatorioAlugueisPermissoes').setAttribute('checked', 'checked');
        document.getElementById('relatorioContasAPagarPermissoes').setAttribute('checked', 'checked');
        document.getElementById('relatorioContasAReceberPermissoes').setAttribute('checked', 'checked');
        document.getElementById('reciboPagamentoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('propostaCompraPermissoes').setAttribute('checked', 'checked');
        document.getElementById('propostaLocacaoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('laudoVistoriaPermissoes').setAttribute('checked', 'checked');
        document.getElementById('vendasJuridicoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('vendasJuridicoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('alugueisJuridicoPermissoes').setAttribute('checked', 'checked');
        document.getElementById('configuracaoPermissoes').setAttribute('checked', 'checked');


    }
</script>