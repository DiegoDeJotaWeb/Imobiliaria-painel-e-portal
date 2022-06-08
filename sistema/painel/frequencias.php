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
        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> Nova Frequência</button></h2>
        <div class="panel-body widget-shadow">

            <h4>Imóveis:</h4>

            <small>Não possui nenhum Imóvel Vendido!



<script type="text/javascript">


	$(document).ready( function () {
		$('#tabela').DataTable({
			"ordering": false,
			"stateSave": true,
		});
		$('#tabela_filter label input').focus();
	} );



	function mostrar(id, doc, email, tel, dono, corretor, titulo, descricao, tipo, cidade, bairro, valor, ano, visitas, area_total, area_construida, quartos, banheiros, suites, garagens, piscinas, img_principal, img_planta, img_banner, endereco, status, condicao, video, iptu, condominio, comissao_imob, comissao_corretor, data_cadF, validade, data_inicio, data_final){	

		for (let letra of descricao){  				
			if (letra === '+'){
				descricao = descricao.replace(' +  + ', '\n')
			}			
		}
		$('#id_mostrar').text(id);
		$('#email_mostrar').text(email);
		$('#doc_mostrar').text(doc);
		$('#tel_mostrar').text(tel);
		$('#dono_mostrar').text(dono);
		$('#corretor_mostrar').text(corretor);
		$('#titulo_mostrar').text(titulo);
		$('#descricao_mostrar').html(descricao);
		$('#tipo_mostrar').text(tipo);
		$('#cidade_mostrar').text(cidade);		
		$('#bairro_mostrar').text(bairro);			
		$('#valor_mostrar').text(valor);		
		$('#ano_mostrar').text(ano);
		$('#visitas_mostrar').text(visitas);
		$('#area_total_mostrar').text(area_total + 'm²');
		$('#area_construida_mostrar').text(area_construida + 'm²');
		$('#quartos_mostrar').text(quartos);
		$('#banheiros_mostrar').text(banheiros);
		$('#suites_mostrar').text(suites);		
		$('#garagens_mostrar').text(garagens);			
		$('#piscinas_mostrar').text(piscinas);		
		$('#endereco_mostrar').text(endereco);
		$('#status_mostrar').text(status);
		$('#condicao_mostrar').text(condicao);
		$('#iptu_mostrar').text(iptu);
		$('#condominio_mostrar').text(condominio);
		$('#comissao_imob_mostrar').text(comissao_imob);
		$('#comissao_corretor_mostrar').text(comissao_corretor);
		$('#data_cad_mostrar').text(data_cadF);
		$('#validade_mostrar').text(validade);
		$('#data_inicio_mostrar').text(data_inicio);
		$('#data_final_mostrar').text(data_final);
	


		$('#target_principal_mostrar').attr('src','images/imoveis/' + img_principal);	
		$('#target_planta_mostrar').attr('src','images/imoveis/' + img_planta);
		$('#target_video_mostrar').attr('src', video);	

		$('#modalMostrar').modal('show');		
	}
	


function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}



</script>



</small>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Dias</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        echo '<tr>';

                        echo "<th scope='row'>{$linha['idCargo']}</th>";
                        echo " <td>{$linha['nomeCargo']}</td>";
                        echo '<td>1</td>';
                        echo '<td>
                        
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEditar" data-whatever="@mdo" >Editar</button>
                            |
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalApagar" data-whatever="@mdo">Apagar</button>
                                               
                        </td>';

                        echo '</tr>';
                    }


                    ?>



                </tbody>

               
            </table>
            <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Anterior</span>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                        </li>
                    </ul>
                </nav>
        </div>

    </div>


    <!-- modal inserir registro -->
    <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir frequência</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Dias:</label>
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar frequência</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Dias:</label>
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

    <!-- modal apagar registro -->

    <div class="modal fade" id="modalApagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Apagar frequência</h4>
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


</div>