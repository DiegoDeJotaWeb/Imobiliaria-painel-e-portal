<?php
require_once "./../conexao.php";


// $id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from tipoImovel");



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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> NOVO TIPO DE IMÓVEL</button></h2>
        <div class="panel-body widget-shadow">
            <h4>Imóveis:</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>Foto Ficha</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <img src="images/" alt="">
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idTipoImovel']}</th>";
                        echo " <td>{$linha['nomeTipoImovel']}</td>";

                        echo  '<th><a href="./images/tipo-de-imoveis/';
                        echo $linha["fotoTipoImovel"];
                        echo '"target="_blank"><img class="media-object"  src="./images/tipo-de-imoveis/';
                        echo $linha["fotoTipoImovel"];
                        echo '"  data-holder-rendered="true" alt="" style="width: 64px; height: 64px;"></a></th>';


                        echo  '<th><a href="./images/tipo-de-imoveis/';
                        echo $linha["fotoFichaTipoImovel"];
                        echo '" target="_blank"><img class="media-object"  src="./images/tipo-de-imoveis/';
                        echo $linha["fotoFichaTipoImovel"];
                        echo '"  data-holder-rendered="true" alt="" style="width: 64px; height: 64px;"></a></th>';

                       
                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" onclick="editar(';
                        echo $linha["idTipoImovel"];
                        echo ",";
                        echo "'" . $linha["nomeTipoImovel"] . "'";
                        echo ",";
                        echo "'" . $linha["fotoTipoImovel"] . "'";
                        echo ",";
                        echo "'" . $linha["fotoFichaTipoImovel"] . "'";

                        echo ')"><i class="fa fa-edit (alias)" data-toggle="tooltip" data-placement="top" title="Editar registro" ></i></button>
                            |

                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo" onclick="apagar(';
                        echo $linha["idTipoImovel"];
                        echo ')"><span class="glyphicon glyphicon-trash 
                        text-white" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Deletar registro"></span></button>

                            |
                            
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo"><i class="fa fa-file-text-o" data-toggle="tooltip" data-placement="top" title="Ficha de captação" ></i></button>
                            
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
                    <h4 class="modal-title" id="exampleModalLabel">Inserir tipo de imóveis</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/cadastros/tipoImoveis.php" method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="imovel" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="imovel" name="imovel">
                        </div>
                        <div class="form-group">
                            <label for="fileNomeTipo" class="control-label">Foto:</label>
                            <input type="file" class="form-control" id="fileNomeTipo" name='fileNomeTipo' multiple>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Foto ficha:</label>
                            <input type="file" class="form-control" id="fileNomeTipoFicha" name="fileNomeTipoFicha">
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar tipo de imóvel</h4>
                </div>
                <div class="modal-body">
                    <form action="vendor/functions/cadastros/cidades.php" method="POST">
                        <div class="form-group">
                            <label for="nomeTipoImovel" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="nomeTipoImovel">
                        </div>
                        <div class="form-group">
                            <label for="fotoTipoImovel" class="control-label">Foto:</label>
                            <input type="file" class="form-control" id="fotoTipoImovel">
                        </div>
                        <div class="form-group">
                            <label for="fichaTipoImovel" class="control-label">Foto ficha:</label>
                            <input type="file" class="form-control" id="fichaTipoImovel">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <input type="hidden" id="idTipoImovel" name="idTipoImovel" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar imóveis</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmar exclusão?</p>
                </div>
                <div class="modal-footer">
                    <form action="vendor/functions/cadastros/tipoImoveis.php" method="POST">
                        <input type="text" id="idApagar" name="tipoImovelApagar">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Apagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<input type="file" value="testse.png">
</div>

<script>

    var file = document.forms['formName']['inputName'].files[0];
//file.name == "photo.png"
//file.type == "image/png"
//file.size == 300821
    function apagar(id) {
        var idTipoImovel = id;
        console.log(idTipoImovel);
        document.getElementById('idApagar').value = id;
    }

    function editar(id,nome, foto, ficha) {
        var file = document.forms['formName']['inputName'].files[0];
//file.name == "photo.png"
//file.type == "image/png"
//file.size == 300821
        console.log(id);
        console.log(nome);
        console.log(foto);
        console.log(ficha);
        document.getElementById('idTipoImovel').value = id;
        document.getElementById('nomeTipoImovel').value = nome;
        document.getElementById('fotoTipoImovel').value = foto;
        document.getElementById('fichaTipoImovel').value = ficha;


        // if (status == "Ativo") {
        //     var text = 'Ativo';
        //     var select = document.querySelector('#statusCidade');
        //     for (var i = 0; i < select.options.length; i++) {
        //         if (select.options[i].text === text) {
        //             select.selectedIndex = i;
        //             break;
        //         }
        //     }
        // }else{
        //     var text = 'Desativo';
        //     var select = document.querySelector('#statusCidade');
        //     for (var i = 0; i < select.options.length; i++) {
        //         if (select.options[i].text === text) {
        //             select.selectedIndex = i;
        //             break;
        //         }
        //     }
        // }


    }
</script>