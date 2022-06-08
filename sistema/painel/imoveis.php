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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> Novo imóvel</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Imóveis:</h4>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Foto</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Corretor</th>
                        <th>Valor</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idCargo']}</th>";
                        echo " <td>{$linha['nomeCargo']}</td>";

                        echo  '<th><img class="media-object"  src="images/tipo-de-imoveis/capa-para-tipo-de-imovel.jpg" alt="64x64"  data-holder-rendered="true" alt="" style="width: 64px; height: 64px;"></th>';

                        echo " <td>A venda</td>";
                        echo " <td>Casa</td>";
                        echo " <td>Nome do corretor</td>";
                        echo " <td>R$ 320.000,00</td>";


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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir imoveis</h4>
                    <nav>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Dados cadastrais</a></li>
                            <li><a data-toggle="tab" href="#menu1">Titulo e descrição</a></li>
                            <li><a data-toggle="tab" href="#menu2">Fotos e vídeos</a></li>
                        </ul>
                    </nav>

                </div>







                <div class="modal-body">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <form>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Dono / Locador:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="..."> </option>
                                                <option value="">nome completo 000.000.000-00</option>
                                                <option value="">nome completo 000.000.000-00</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Corretor:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="..."> </option>
                                                <option value="">nome corretor</option>
                                                <option value="">nome corretor</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tipo:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">




                                                <option value="..."> </option>
                                                <?php
            $query1 = $pdo->query("select * from tipoImovel");
            while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                echo   "<option >{$linha1['nomeTipoImovel']}</option>";
            }

            ?>

                                            </select>
                                        </div>
                                    </div>
                              
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Cidade:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value=""></option>
                                            <?php
            $query1 = $pdo->query("select * from cidade where statusCidade = 'Ativo'");
         
            while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                echo   "<option >{$linha1['nomeCidade']}</option>";
            }
      

            ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Bairro:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option value=""></option>
                                            <?php
            $query1 = $pdo->query("select * from bairro  where statusBairro = 'Ativo'");
            while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {
                echo   "<option >{$linha1['nomeBairro']}</option>";
            }

            ?>

                                            </select>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Status:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="..."> </option>
                                                <option value="">Para venda</option>
                                                <option value="">Para alugar</option>
                                                <option value="">Vendido</option>
                                                <option value="">Alugado</option>
                                                <option value="">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                   

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Condições:</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="..."> </option>
                                                <option value="">Usado</option>
                                                <option value="">Novo</option>
                                                <option value="">Planta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Área total:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex. 200">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Área construida:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex. 120">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Ano do imóvel:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex. 1991">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Quartos:</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Banheiros:</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Suítes:</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Garagens:</label>
                                                <input type="number" class="form-control" id="recipient-name">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Piscinas:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>

                                      

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Valor:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Valor de locação ou venda">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">R$: IPTU</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">R$: Condomínio</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Endereço:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Financiamento:</label>
                                                <select class="form-control " name="financiamento" id="financiamento" required="" > 
											<option value="Sim">Sim</option>
											<option value="Não">Não</option>											
										</select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Condição PGTO:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Financiamento, à vista, troca ...">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Comissão IMOB:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex. 5 ou 5.5">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Comissão COR:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex. 5 ou 5.5">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Local chave:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="Responsável ou lugar">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Validade:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Anúncio
                                                    Data:</label>
                                                <input type="date" class="form-control" id="recipient-name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Início Anúncio:</label>
                                                <input type="date" class="form-control" id="recipient-name" >
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <form>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Titulo:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">descrição:</label>
                                            <textarea name="area2" style="width: 500px;height: 150px;">       Some Initial Content was in this textarea
                </textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <form>


                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Imagem principal:</label>
                                    <input type="file" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Imagem planta:</label>
                                    <input type="file" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Imagem Banner:</label>
                                    <input type="file" class="form-control" id="recipient-name">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">URL do video (YOUTUBE) :</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> -->
                    <button type="button" class="btn btn-danger">Voltar</button>
                    <button type="button" class="btn btn-primary">Continuar</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar imóvel</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Foto:</label>
                            <input type="file" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Foto ficha:</label>
                            <input type="file" class="form-control" id="recipient-name">
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar imóveis</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Apagar</button>
                </div>
            </div>
        </div>
    </div>



    <!-- modal informações -->

    <div class="modal fade" id="modalInformacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">informações</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar as informações desse imovel</p>
                    <form action="">
                        <div class="modal-body">


                            <div class="row">
                                <div class="col-md-4">
                                    <span><b>Id do Imóvel: </b></span>
                                    <span id="id_mostrar">36</span>
                                </div>
                                <div class="col-md-4">
                                    <span><b>Dono: </b></span>
                                    <span id="dono_mostrar">CORRETOR 1</span>
                                </div>

                                <div class="col-md-4">
                                    <span><b>Telefone Dono: </b></span>
                                    <span id="tel_mostrar">(85) 98791-1159</span>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <span><b>Email do Dono: </b></span>
                                    <span id="email_mostrar">EDIVARD@HOTMAIL.COM</span>
                                </div>
                                <div class="col-md-6">
                                    <span><b>Documento Dono: </b></span>
                                    <span id="doc_mostrar">111.111.111-11</span>
                                </div>
                            </div>


                            <hr>

                            <div class="row">

                                <div class="col-md-4">
                                    <span><b>Corretor: </b></span>
                                    <span id="corretor_mostrar">Cesar Celke</span>
                                </div>

                                <div class="col-md-4">
                                    <span><b>Tipo: </b></span>
                                    <span id="tipo_mostrar">Apartamento 3 Quartos</span>
                                </div>
                                <div class="col-md-4">
                                    <span><b>Valor: </b></span>
                                    <span id="valor_mostrar">3.580.000,00</span>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <span><b>Cidade: </b></span>
                                    <span id="cidade_mostrar">Belo Horizonte</span>
                                </div>
                                <div class="col-md-3">
                                    <span><b>Bairro: </b></span>
                                    <span id="bairro_mostrar">Rio Branco</span>
                                </div>

                                <div class="col-md-6">
                                    <span><b>Endereço: </b></span>
                                    <span id="endereco_mostrar">Rua das flores nº 999</span>
                                </div>

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <span><b>Ano Imóvel: </b></span>
                                    <span id="ano_mostrar">2022</span>
                                </div>
                                <div class="col-md-3">
                                    <span><b>Total Visitas: </b></span>
                                    <span id="visitas_mostrar">0</span>
                                </div>

                                <div class="col-md-3">
                                    <span><b>Área Total: </b></span>
                                    <span id="area_total_mostrar">0m²</span>
                                </div>
                                <div class="col-md-3">
                                    <span><b>Área Construída: </b></span>
                                    <span id="area_construida_mostrar">0m²</span>
                                </div>
                            </div>


                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <span><b>Quartos: </b></span>
                                    <span id="quartos_mostrar">3</span>
                                </div>
                                <div class="col-md-2">
                                    <span><b>Suítes: </b></span>
                                    <span id="suites_mostrar">2</span>
                                </div>

                                <div class="col-md-2">
                                    <span><b>Garagens: </b></span>
                                    <span id="garagens_mostrar">2</span>
                                </div>
                                <div class="col-md-2">
                                    <span><b>Piscinas: </b></span>
                                    <span id="piscinas_mostrar">0</span>
                                </div>

                                <div class="col-md-2">
                                    <span><b>Banheiros: </b></span>
                                    <span id="banheiros_mostrar">2</span>
                                </div>
                            </div>



                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <span><b>Status: </b></span>
                                    <span id="status_mostrar">Para Venda</span>
                                </div>
                                <div class="col-md-3">
                                    <span><b>Condição: </b></span>
                                    <span id="condicao_mostrar">Usado</span>
                                </div>

                                <div class="col-md-3">
                                    <span><b>IPTU Mês: </b></span>
                                    <span id="iptu_mostrar">0,00</span>
                                </div>
                                <div class="col-md-3">
                                    <span><b>Condomínio: </b></span>
                                    <span id="condominio_mostrar">0,00</span>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-4">
                                    <span><b>Comissão Imobiliária %: </b></span>
                                    <span id="comissao_imob_mostrar">0.00</span>
                                </div>
                                <div class="col-md-4">
                                    <span><b>Comissão Corretor %: </b></span>
                                    <span id="comissao_corretor_mostrar">0.00</span>
                                </div>

                                <div class="col-md-4">
                                    <span><b>Castradado Em: </b></span>
                                    <span id="data_cad_mostrar">24/04/2022</span>
                                </div>

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <span><b>Validade do Anúncio: </b></span>
                                    <span id="validade_mostrar">Não</span>
                                </div>

                                <div class="col-md-4">
                                    <span><b>Data Inicial Anúncio: </b></span>
                                    <span id="data_inicio_mostrar">24/04/2022</span>
                                </div>

                                <div class="col-md-4">
                                    <span><b>Data Final Anúncio: </b></span>
                                    <span id="data_final_mostrar">24/04/2022</span>
                                </div>
                            </div>



                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <span><b>Descrição: </b></span>
                                    <div id="descricao_mostrar">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt error exercitationem ratione necessitatibus iusto, commodi vero, amet dolores sint eius quae mollitia. Accusantium in voluptate necessitatibus dolorem, blanditiis quia itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus inventore quibusdam illum molestias voluptas! Sit mollitia reiciendis, quisquam officia quibusdam nemo impedit sequi fuga exercitationem. Explicabo sapiente laborum quas deserunt?</div>
                                </div>
                            </div>








                            <div class="row">
                                <div class="col-md-6" align="center">
                                    <img width="300px" id="target_principal_mostrar" src="images/imoveis/24-04-2022-22-19-37-ok.jpeg">
                                </div>

                                <div class="col-md-6" align="center">
                                    <img width="300px" id="target_planta_mostrar" src="images/imoveis/24-04-2022-22-49-36-ap-902-(5).jpeg">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/jlY_lrjROzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" id="target_video_mostrar"></iframe>
                                </div>

                            </div>



                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Mudar</button>
                </div>
            </div>
        </div>
    </div>

    
</div>