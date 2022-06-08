<div id="page-wrapper" style="min-height: 594px;">
				

<div class="row">
	<div class="col-md-10">
		
		<div style="float:left; margin-right:35px">
			<button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i>Receber</button>
		</div>

		<div class="esc" style="float:left; margin-right:10px"><span><small><i title="Data de Vencimento Inicial" class="fa fa-calendar-o"></i></small></span></div>
		<div class="esc" style="float:left; margin-right:20px">
			<input type="date" class="form-control " name="data-inicial" id="data-inicial" value="2022-04-14" required="">
		</div>

		<div class="esc" style="float:left; margin-right:10px"><span><small><i title="Data de Vencimento Final" class="fa fa-calendar-o"></i></small></span></div>
		<div class="esc" style="float:left; margin-right:30px">
			<input type="date" class="form-control " name="data-final" id="data-final" value="2022-04-14" required="">
		</div>


		<div class="esc" style="float:left; margin-right:10px"><span><small><i title="Filtrar por Status" class="bi bi-search"></i></small></span></div>
		<div class="esc" style="float:left; margin-right:20px">
			<select class="form-control" aria-label="Default select example" name="status-busca" id="status-busca">
				<option value="">Todas</option>
				<option value="Não">Pendentes</option>
				<option value="Sim">Pagas</option>
				
			</select>
		</div>

		<div style="margin-top:5px;"> 
		<small>
			<a title="Contas à Receber Vencidas" class="text-muted" href="#" onclick="listarContasVencidas('Vencidas')"><span>Vencidas</span></a> / 
			<a title="Contas à Receber Hoje" class="text-muted" href="#" onclick="listarContasVencidas('Hoje')"><span>Hoje</span></a> / 
			<a title="Contas à Receber Amanhã" class="text-muted" href="#" onclick="listarContasVencidas('Amanha')"><span>Amanhã</span></a>
		</small>
		</div>

		
	</div>

	<div align="right" class="col-md-2">
		<small><i class="fa fa-usd verde"></i> <span class="text-dark">Total: <span class="verde" id="total_itens">R$ 236.744,99</span></span></small>
	</div>
</div>


<div class="bs-example widget-shadow" style="padding:15px" id="listar"><small>Não possui nenhuma conta para esta data!

<script type="text/javascript">


	$(document).ready( function () {
	    $('#tabela').DataTable({
	    	"ordering": false,
	    	"stateSave": true,
	    });
	    $('#tabela_filter label input').focus();
	    $('#total_itens').text('R$ 236.744,99');
	} );



	function editar(id, descricao, comprador, locatario, valor, data_venc, frequencia, saida, arquivo, obs, proprietario){

		if(comprador == 0){
			comprador = "";
		}

		if(locatario == 0){
			locatario = "";
		}

		if(proprietario == 0){
			proprietario = "";
		}

				
		
		$('#id').val(id);
		$('#descricao').val(descricao);
		$('#comprador').val(comprador).change();
		$('#locatario').val(locatario).change();
		$('#proprietario').val(proprietario).change();
		$('#valor').val(valor);
		$('#data_venc').val(data_venc);
		$('#frequencia').val(frequencia).change();
		$('#saida').val(saida).change();	
		$('#obs').val(obs);	

		$('#arquivo').val('');
		

		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');


		resultado = arquivo.split(".", 2);

    	 if(resultado[1] === 'pdf'){
            $('#target').attr('src', "images/pdf.png");
            return;
        } else if(resultado[1] === 'rar' || resultado[1] === 'zip'){
            $('#target').attr('src', "images/rar.png");
            return;
        }else if(resultado[1] === 'doc' || resultado[1] === 'docx'){
            $('#target').attr('src', "images/word.png");
            return;
        }else{
        	$('#target').attr('src','images/contas/' + arquivo);			
        }		
	}



	function mostrar(id, descricao, nome, telefone, email, tipo_pessoa, valor, data_lanc, data_venc, data_pgto, usuario_lanc, usuario_pgto, frequencia, saida, arquivo, pago, obs){

		
		if(data_pgto == "00/00/0000"){
			data_pgto = 'Não Pago Ainda';
		}

	
		$('#pessoa_mostrar').text(nome);
		$('#tipo_pessoa_mostrar').text(tipo_pessoa);

		$('#tel_mostrar').text(telefone);
		$('#email_mostrar').text(email);

		$('#nome_mostrar').text(descricao);
		
		$('#locatario_mostrar').text(locatario);		
		$('#valor_mostrar').text(valor);
		$('#lanc_mostrar').text(data_lanc);
		$('#venc_mostrar').text(data_venc);
		$('#pgto_mostrar').text(data_pgto);		
		$('#usu_lanc_mostrar').text(usuario_lanc);	
		$('#usu_pgto_mostrar').text(usuario_pgto);	
		$('#freq_mostrar').text(frequencia);
		$('#saida_mostrar').text(saida);
		$('#pago_mostrar').text(pago);
		$('#obs_mostrar').text(obs);
		
		$('#link_arquivo').attr('href','images/contas/' + arquivo);
		

		$('#modalMostrar').modal('show');

		resultado = arquivo.split(".", 2);

    	 if(resultado[1] === 'pdf'){
            $('#target_mostrar').attr('src', "images/pdf.png");
            return;
        } else if(resultado[1] === 'rar' || resultado[1] === 'zip'){
            $('#target_mostrar').attr('src', "images/rar.png");
            return;
        }else if(resultado[1] === 'doc' || resultado[1] === 'docx'){
            $('#target_mostrar').attr('src', "images/word.png");
            return;
        }else{
        	$('#target_mostrar').attr('src','images/contas/' + arquivo);			
        }		
	}

	function limparCampos(){
		$('#id').val('');
		$('#descricao').val('');		
		$('#valor').val('');		
		$('#data_venc').val('2022-04-14');			
		$('#arquivo').val('');
		$('#locatario').val('').change();
		$('#proprietario').val('').change();
		$('#comprador').val('').change();
		$('#target').attr('src','images/contas/sem-foto.png');
	}


	function parcelar(id, valor, nome){
    $('#id-parcelar').val(id);
    $('#valor-parcelar').val(valor);
    $('#qtd-parcelar').val('');
    $('#nome-parcelar').text(nome);
    $('#nome-input-parcelar').val(nome);
    $('#modalParcelar').modal('show');
    $('#mensagem-parcelar').text('');
}


function baixar(id, valor, descricao, saida){
	$('#id-baixar').val(id);
	$('#descricao-baixar').text(descricao);
	$('#valor-baixar').val(valor);
	$('#saida-baixar').val(saida).change();
	$('#subtotal').val(valor);

	$('#juros-baixar').val('');
	$('#desconto-baixar').val('');
	$('#multa-baixar').val('');

	$('#valor-juros').val('');
	$('#valor-desconto').val('');
	$('#valor-multa').val('');

	$('#modalBaixar').modal('show');
	$('#mensagem-baixar').text('');
}



function mostrarResiduos(id){

	$.ajax({
		url: pag + "/listar-residuos.php",
		method: 'POST',
		data: {id},
		dataType: "html",

		success:function(result){
			$("#listar-residuos").html(result);
		}
	});
	$('#modalResiduos').modal('show');
	
	
}



	function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}


</script>



</small></div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="post" id="form-contas">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Descrição</label> 
								<input type="text" class="form-control" name="descricao" id="descricao"> 
							</div>						
						</div>

						
					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Valor</label> 
								<input type="text" class="form-control" name="valor" id="valor" required=""> 
							</div>						
						</div>

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Vencimento</label> 
								<input type="date" class="form-control" name="data_venc" id="data_venc" required=""> 
							</div>						
						</div>		



					</div>


					<div class="row">
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Frequência</label> 
								<select class="form-control sel2 select2-hidden-accessible" name="frequencia" id="frequencia" required="" style="width:100%;" data-select2-id="select2-data-frequencia" tabindex="-1" aria-hidden="true"> 
										
										<option value="0" data-select2-id="select2-data-2-7z44">Uma Vez</option>

										
										<option value="1">Diária</option>

										
										<option value="7">Semanal</option>

										
										<option value="30">Mensal</option>

									
								</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-ls9q" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-frequencia-container" aria-controls="select2-frequencia-container"><span class="select2-selection__rendered" id="select2-frequencia-container" role="textbox" aria-readonly="true" title="Uma Vez">Uma Vez</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>						
						</div>


						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Entrada</label> 
								<select class="form-control sel2 select2-hidden-accessible" name="saida" id="saida" style="width:100%;" data-select2-id="select2-data-saida" tabindex="-1" aria-hidden="true"> 

									<option value="Caixa" data-select2-id="select2-data-4-id02">Caixa</option>
									<option value="Cartão de Débito">Cartão de Débito</option>
									<option value="Cartão de Crédito">Cartão de Crédito</option>
									<option value="Boleto">Boleto</option>

										
										<option value="Bradesco">Bradesco</option>

										
										<option value="Itaú">Itaú</option>

									
								</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-2ax3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-saida-container" aria-controls="select2-saida-container"><span class="select2-selection__rendered" id="select2-saida-container" role="textbox" aria-readonly="true" title="Caixa">Caixa</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>						
						</div>	
					</div>


					<div class="row">

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Comprador</label> 
								<select class="form-control sel2 select2-hidden-accessible" name="comprador" id="comprador" style="width:100%;" data-select2-id="select2-data-comprador" tabindex="-1" aria-hidden="true"> 

									<option value="" data-select2-id="select2-data-6-h1in">Selecione um Comprador</option>

										
										<option value="1">Jessíca Santos - 752.126.720-66</option>

										
										<option value="3">Mariana Santos - 612.551.780-27</option>

									
								</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-0wsx" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-comprador-container" aria-controls="select2-comprador-container"><span class="select2-selection__rendered" id="select2-comprador-container" role="textbox" aria-readonly="true" title="Selecione um Comprador">Selecione um Comprador</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>						
						</div>


						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Locatário</label> 
								<select class="form-control sel2 select2-hidden-accessible" name="locatario" id="locatario" style="width:100%;" data-select2-id="select2-data-locatario" tabindex="-1" aria-hidden="true"> 

									<option value="" data-select2-id="select2-data-8-i8mr">Selecione um Locatário</option>

										
										<option value="3">Lilian Silva - 029.377.440-44</option>

										
										<option value="1">Pamela Silva - 196.137.960-02</option>

									
								</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-7-rah4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-locatario-container" aria-controls="select2-locatario-container"><span class="select2-selection__rendered" id="select2-locatario-container" role="textbox" aria-readonly="true" title="Selecione um Locatário">Selecione um Locatário</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>						
						</div>



						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Proprietário</label> 
								<select class="form-control sel2 select2-hidden-accessible" name="proprietario" id="proprietario" style="width:100%;" data-select2-id="select2-data-proprietario" tabindex="-1" aria-hidden="true"> 

									<option value="" data-select2-id="select2-data-10-93ih">Selecione um Proprietário</option>

										
										<option value="1">Empresa X - 45.454.545/4548-74</option>

										
										<option value="5">Kamila Silva dos Santos - 339.672.460-78</option>

										
										<option value="2">Marcelo Santos - 612.551.780-27</option>

										
										<option value="6">Priscila Silva - 025.739.030-87</option>

									
								</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-9-ch63" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-proprietario-container" aria-controls="select2-proprietario-container"><span class="select2-selection__rendered" id="select2-proprietario-container" role="textbox" aria-readonly="true" title="Selecione um Proprietário">Selecione um Proprietário</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							</div>						
						</div>

						


					</div>

					

					<div class="row">						

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Foto</label> 
								<input type="file" name="arquivo" onchange="carregarImg();" id="arquivo">
							</div>						
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="images/contas/sem-foto.png" width="100px" id="target">									
							</div>
						</div>

							<div class="col-md-6">						
							<div class="form-group"> 
								<label>OBS</label> 
								<textarea maxlength="255" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>						
						</div>


					</div>				
					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>



			</form>

		</div>
	</div>
</div>






<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"><span id="nome_mostrar"> </span></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			
			<div class="modal-body">			



				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b><span id="tipo_pessoa_mostrar"></span> </b></span>
						<span id="pessoa_mostrar"></span>							
					</div>
					
					<div class="col-md-6">							
						<span><b>Valor: </b></span>
						<span id="valor_mostrar"></span>	
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
						<span><b>Telefone: </b></span>
						<span id="tel_mostrar"></span>	
					</div>
					
					<div class="col-md-6">							
						<span><b>Email: </b></span>
						<span id="email_mostrar"></span>	
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Data Lançamento: </b></span>
						<span id="lanc_mostrar"></span>							
					</div>
					<div class="col-md-6">							
						<span><b>Data Vencimento: </b></span>
						<span id="venc_mostrar"></span>
					</div>
				</div>



				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Data PGTO: </b></span>
						<span id="pgto_mostrar"></span>							
					</div>
					<div class="col-md-6">							
						<span><b>Usuário Cadastro: </b></span>
						<span id="usu_lanc_mostrar"></span>
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Usuário Baixa: </b></span>
						<span id="usu_pgto_mostrar"></span>							
					</div>
					<div class="col-md-6">							
						<span><b>Frequência: </b></span>
						<span id="freq_mostrar"></span>
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Entrada: </b></span>
						<span id="saida_mostrar"></span>							
					</div>
					<div class="col-md-6">							
						<span><b>Pago: </b></span>
						<span id="pago_mostrar"></span>
					</div>
				</div>


				

				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
					<div class="col-md-12">							
						<span><b>OBS: </b></span>
						<span id="obs_mostrar"></span>
					</div>
				</div>






				<div class="row">
					<div class="col-md-12" align="center">		
						<a id="link_arquivo" target="_blank"><img width="200px" id="target_mostrar"></a>	
					</div>
				</div>



			</div>


		</div>
	</div>
</div>




<div class="modal fade" id="modalParcelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal">Parcelar Conta: <span id="nome-parcelar"> </span></h4>
				<button id="btn-fechar-parcelar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="post" id="form-parcelar">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-3">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Valor</label>
								<input type="text" class="form-control" name="valor-parcelar" id="valor-parcelar" readonly="">
							</div>
						</div>

						<div class="col-md-2">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Parcelas</label>
								<input type="number" class="form-control" name="qtd-parcelar" id="qtd-parcelar" required="">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group"> 
								<label>Frequência Parcelas</label> 
								<select class="form-control sel3 select2-hidden-accessible" name="frequencia" id="frequencia-parcelar" required="" style="width:100%;" data-select2-id="select2-data-frequencia-parcelar" tabindex="-1" aria-hidden="true">

																				<option value="1">Diária</option>

																					<option value="7">Semanal</option>

																					<option selected="" value="30" data-select2-id="select2-data-12-d3yt">Mensal</option>

										

									</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-m9ci" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-frequencia-parcelar-container" aria-controls="select2-frequencia-parcelar-container"><span class="select2-selection__rendered" id="select2-frequencia-parcelar-container" role="textbox" aria-readonly="true" title="Mensal">Mensal</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								</div>
							</div>

							<div class="col-md-3" style="margin-top:20px">						 
								<button type="submit" class="btn btn-primary">Parcelar</button>
							</div>

						</div>	



						<br>
						<input type="hidden" name="id-parcelar" id="id-parcelar"> 
						<input type="hidden" name="nome-parcelar" id="nome-input-parcelar"> 
						<small><div id="mensagem-parcelar" align="center" class="mt-3"></div></small>					

					</div>

					<div class="modal-footer">

					</div>

				</form>

			</div>
		</div>
	</div>






	<!-- Modal -->
	<div class="modal fade" id="modalBaixar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="tituloModal">Baixar Conta: <span id="descricao-baixar"> </span></h4>
				<button id="btn-fechar-baixar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
				<form id="form-baixar" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Valor <small class="text-muted">(Total ou Parcial)</small></label>
									<input onkeyup="totalizar()" type="text" class="form-control" name="valor-baixar" id="valor-baixar" required="">
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group"> 
								<label>Local Entrada</label> 
								<select class="form-control sel4 select2-hidden-accessible" name="saida-baixar" id="saida-baixar" required="" style="width:100%;" data-select2-id="select2-data-saida-baixar" tabindex="-1" aria-hidden="true">
										<option value="Caixa" data-select2-id="select2-data-14-33j0">Caixa (Movimento)</option>
										<option value="Cartão de Débito">Cartão de Débito</option>
									<option value="Cartão de Crédito">Cartão de Crédito</option>

																					<option value="Bradesco">Bradesco</option>

																					<option value="Itaú">Itaú</option>

										

									</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-13-77zc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-saida-baixar-container" aria-controls="select2-saida-baixar-container"><span class="select2-selection__rendered" id="select2-saida-baixar-container" role="textbox" aria-readonly="true" title="Caixa (Movimento)">Caixa (Movimento)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
								</div>
							</div>

						</div>	


						<div class="row">


							<div class="col-md-4">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Multa em R$</label>
									<input onkeyup="totalizar()" type="text" class="form-control" name="valor-multa" id="valor-multa" placeholder="Ex 15.00" value="0">
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Júros em R$</label>
									<input onkeyup="totalizar()" type="text" class="form-control" name="valor-juros" id="valor-juros" placeholder="Ex 0.15" value="0">
								</div>
							</div>

								<div class="col-md-4">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Desconto em R$</label>
									<input onkeyup="totalizar()" type="text" class="form-control" name="valor-desconto" id="valor-desconto" placeholder="Ex 15.00" value="0">
								</div>
							</div>

						</div>


						<div class="row">

						
								<div class="col-md-6">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">Data da Baixa</label>
									<input type="date" class="form-control" name="data-baixar" id="data-baixar" value="2022-04-14">
								</div>
							</div>


							<div class="col-md-6">
								<div class="mb-3">
									<label for="exampleFormControlInput1" class="form-label">SubTotal</label>
									<input type="text" class="form-control" name="subtotal" id="subtotal" readonly="">
								</div>	
							</div>
						</div>




						<small><div id="mensagem-baixar" align="center"></div></small>

						<input type="hidden" class="form-control" name="id-baixar" id="id-baixar">


					</div>
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success">Baixar</button>
					</div>
				</form>
			</div>
		</div>
	</div>





	<!-- Modal -->
	<div class="modal fade" id="modalResiduos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title" id="tituloModal">Residuos da Conta</h4>
				<button id="btn-fechar-parcelar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
				<div class="modal-body">

					<small><div id="listar-residuos"></div></small>

				</div>
				
			</div>
		</div>
	</div>






	<!-- Modal Arquivos -->
	<div class="modal fade" id="modalArquivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tituloModal">Gestão de Arquivos - <span id="nome-arquivo"> </span></h4>
					<button id="btn-fechar-arquivos" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form id="form-arquivos" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Arquivo</label> 
									<input type="file" name="arquivo_conta" onchange="carregarImgArquivos();" id="arquivo_conta">
								</div>	
							</div>
							<div class="col-md-4" style="margin-top:-10px">	
								<div id="divImgArquivos">
									<img src="images/arquivos/sem-foto.png" width="60px" id="target-arquivos">									
								</div>					
							</div>




						</div>

						<div class="row" style="margin-top:-40px">
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome-arq" id="nome-arq" placeholder="Nome do Arquivo * " required="">
							</div>

							<div class="col-md-4">										 
								<button type="submit" class="btn btn-primary">Inserir</button>
							</div>
						</div>

						<hr>

						<small><div id="listar-arquivos"></div></small>

						<br>
						<small><div align="center" id="mensagem-arquivo"></div></small>

						<input type="hidden" class="form-control" name="id-arquivo" id="id-arquivo">


					</div>
				</form>
			</div>
		</div>




	<script type="text/javascript">var pag = "receber"</script>
	<script src="js/ajax.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.sel2').select2({
				dropdownParent: $('#modalForm')
			});



			$('#data-inicial').change(function(){
				var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				var alterou_data = 'Sim';
				listarBusca(dataInicial, dataFinal, status, alterou_data);
			});

			$('#data-final').change(function(){
				var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				var alterou_data = 'Sim';
				listarBusca(dataInicial, dataFinal, status, alterou_data);
			});

			$('#status-busca').change(function(){
				var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				listarBusca(dataInicial, dataFinal, status);
			});


		});
	</script>


	<script type="text/javascript">
		$(document).ready(function() {
			$('.sel3').select2({
				dropdownParent: $('#modalParcelar')
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.sel4').select2({
				dropdownParent: $('#modalBaixar')
			});
		});
	</script>



	<script type="text/javascript">
		function carregarImg() {
			var target = document.getElementById('target');
			var file = document.querySelector("#arquivo").files[0];

			var arquivo = file['name'];
			resultado = arquivo.split(".", 2);

			if(resultado[1] === 'pdf'){
				$('#target').attr('src', "images/pdf.png");
				return;
			}

			if(resultado[1] === 'rar' || resultado[1] === 'zip'){
				$('#target').attr('src', "images/rar.png");
				return;
			}

			if(resultado[1] === 'doc' || resultado[1] === 'docx'){
				$('#target').attr('src', "images/word.png");
				return;
			}

			var reader = new FileReader();

			reader.onloadend = function () {
				target.src = reader.result;
			};

			if (file) {
				reader.readAsDataURL(file);

			} else {
				target.src = "";
			}
		}
	</script>


	<script type="text/javascript">
		$("#form-parcelar").submit(function () {
			event.preventDefault();
			var formData = new FormData(this);

			$.ajax({
				url: pag + "/parcelar.php",
				type: 'POST',
				data: formData,

				success: function (mensagem) {
					$('#mensagem-parcelar').text('');
					$('#mensagem-parcelar').removeClass()
					if (mensagem.trim() == "Parcelado com Sucesso") {                    
						$('#btn-fechar-parcelar').click();
						listar();
					} else {
						$('#mensagem-parcelar').addClass('text-danger')
						$('#mensagem-parcelar').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

		});
	</script>



	<script type="text/javascript">
		$("#form-baixar").submit(function () {
			event.preventDefault();
			var formData = new FormData(this);

			$.ajax({
				url: pag + "/baixar.php",
				type: 'POST',
				data: formData,

				success: function (mensagem) {
					$('#mensagem-baixar').text('');
					$('#mensagem-baixar').removeClass()
					if (mensagem.trim() == "Baixado com Sucesso") {                    
						$('#btn-fechar-baixar').click();
						listar();
					} else {
						$('#mensagem-baixar').addClass('text-danger')
						$('#mensagem-baixar').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

		});
	</script>


	<script type="text/javascript">
		
		function totalizar(){
			valor = $('#valor-baixar').val();
			desconto = $('#valor-desconto').val();
			juros = $('#valor-juros').val();
			multa = $('#valor-multa').val();

			valor = valor.replace(",", ".");
			desconto = desconto.replace(",", ".");
			juros = juros.replace(",", ".");
			multa = multa.replace(",", ".");

			if(valor == ""){
				valor = 0;
			}

			if(desconto == ""){
				desconto = 0;
			}

			if(juros == ""){
				juros = 0;
			}

			if(multa == ""){
				multa = 0;
			}

			subtotal = parseFloat(valor) + parseFloat(juros) + parseFloat(multa) - parseFloat(desconto);


			console.log(subtotal)

			$('#subtotal').val(subtotal);

		}
	</script>


	<script type="text/javascript">
		
		function listarBusca(dataInicial, dataFinal, status, alterou_data){
			$.ajax({
				url: pag + "/listar.php",
				method: 'POST',
				data: {dataInicial, dataFinal, status, alterou_data},
				dataType: "html",

				success:function(result){
					$("#listar").html(result);
				}
			});
		}



		function listarContasVencidas(vencidas){
			$.ajax({
				url: pag + "/listar.php",
				method: 'POST',
				data: {vencidas},
				dataType: "html",

				success:function(result){
					$("#listar").html(result);
				}
			});
		}


		function listarContasHoje(hoje){
			$.ajax({
				url: pag + "/listar.php",
				method: 'POST',
				data: {hoje},
				dataType: "html",

				success:function(result){
					$("#listar").html(result);
				}
			});
		}


		function listarContasAmanha(amanha){
			$.ajax({
				url: pag + "/listar.php",
				method: 'POST',
				data: {amanha},
				dataType: "html",

				success:function(result){
					$("#listar").html(result);
				}
			});
		}

	</script>






		<script type="text/javascript">
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);

				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
					$('#target-arquivos').attr('src', "images/word.png");
					return;
				}


				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "images/xml.png");
					return;
				}



				var reader = new FileReader();

				reader.onloadend = function () {
					target.src = reader.result;
				};

				if (file) {
					reader.readAsDataURL(file);

				} else {
					target.src = "";
				}
			}
		</script>




		<script type="text/javascript">
			$("#form-arquivos").submit(function () {
				event.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					url: pag + "/arquivos.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {
						$('#mensagem-arquivo').text('');
						$('#mensagem-arquivo').removeClass()
						if (mensagem.trim() == "Inserido com Sucesso") {                    
						//$('#btn-fechar-arquivos').click();
						$('#nome-arq').val('');
						$('#arquivo_conta').val('');
						$('#target-arquivos').attr('src','images/arquivos/sem-foto.png');
						listarArquivos();
					} else {
						$('#mensagem-arquivo').addClass('text-danger')
						$('#mensagem-arquivo').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

			});
		</script>

		<script type="text/javascript">
			function listarArquivos(){
				var id = $('#id-arquivo').val();	
				$.ajax({
					url: pag + "/listar-arquivos.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-arquivos").html(result);
					}
				});
			}

		</script>



<script type="text/javascript">
	
$("#form-contas").submit(function () {
	event.preventDefault();
	var formData = new FormData(this);

	$.ajax({
		url: pag + "/inserir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {                    
                    $('#btn-fechar').click();
                   var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				var alterou_data = 'Sim';
				listarBusca(dataInicial, dataFinal, status, alterou_data);
                } else {
                	$('#mensagem').addClass('text-danger')
                    $('#mensagem').text(mensagem)
                }

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

});

</script>			</div>






		</div>