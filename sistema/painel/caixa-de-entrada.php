<?php
require_once "./../conexao.php";


$id_usuario = $_SESSION['id_usuario'];






// $res = $query->fetchAll(PDO::FETCH_ASSOC);
// $total_res = @count($res);

//recuperar os dados do usuario logado


?>

<div id="page-wrapper">
	<div class="main-page">
		<h2 class="title1">Mensagens </h2>
		<div class="col-md-4 compose-left">
			<div class="folder widget-shadow">
				<ul>
					<li class="head"><i class="fa fa-folder" aria-hidden="true"></i>Pastas</li>
					<li><a href="#"><i class="fa fa-inbox"></i>Entrada <span>52</span></a></li>
					<li><a href="index.php?pagina=caixa-de-saida"><i class="fa fa fa-envelope-o"></i>Saida </a></li>
					<li><a href="#"><i class="fa fa-file-text-o"></i>Rascunhos <span>03</span></a> </li>
					<li><a href="#"><i class="fa fa-trash-o"></i>Lixeira</a></li>
				</ul>
			</div>
			<div class="chat-grid widget-shadow">
				<ul>
					<li class="head"><i class="fa fa-user" aria-hidden="true"></i>Amigos (Online) </li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i1.png" alt="">
								<label class="small-badge"></label>
							</div>
							<div class="chat-right">
								<p>Alexander</p>
								<h6>Corretor</h6>
							</div>
							<div class="clearfix"> </div>
						</a>
					</li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i2.png" alt="">
								<label class="small-badge bg-green"></label>
							</div>
							<div class="chat-right">
								<p>Jackson jacob</p>
								<h6>Administração</h6>
							</div>
							<div class="clearfix"> </div>
						</a>
					</li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i3.png" alt="">
								<label class="small-badge bg-green"></label>
							</div>
							<div class="chat-right">
								<p>Elisa liden </p>
								<h6>Tesoureiro</h6>
							</div>
							<div class="clearfix"> </div>
						</a>
					</li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i4.png" alt="">
								<label class="small-badge"></label>
							</div>
							<div class="chat-right">
								<p>Michael John</p>
								<h6>Gerente</h6>
							</div>
							<div class="clearfix"> </div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-8 compose-right widget-shadow">
			<div class="panel-default">
				<div class="panel-heading">
					Inbox
				</div>
				<div class="inbox-page">
					<h4>Hoje</h4>

					<?php
					$agora = new DateTime('now');
					$agoraData = $agora->format('Y-m-d');
					$query = $pdo->query("SELECT *
FROM mensagens
INNER JOIN funcionarios
ON funcionarios.idFuncionario   where  mensagens.idRemetente = {$id_usuario}  and funcionarios.idFuncionario = {$id_usuario} and dataMensagem = '{$agoraData}'");


					while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
						$quantResultado1 = count($linha);
						// echo $quantResultado1;

						// echo $agoraData;
						// echo "<br>";
						// echo $linha['dataMensagem'];

						if ($agoraData == $linha['dataMensagem'] && $quantResultado1 > 0) {



					?>



							<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i1.png" alt="" /></div>
								<div class="mail mail-name">
									<?php $query1 = $pdo->query("SELECT nomeFuncionario FROM funcionarios where idFuncionario =  {$linha['idDestinatario']} ");

									while ($linha1 = $query1->fetch(PDO::FETCH_ASSOC)) {


										echo "<h6>{$linha1['nomeFuncionario']}</h6>";
									} ?>
								</div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linha['idMensagem']; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linha['idMensagem']; ?>">
									<div class="mail">
										<p><?php echo $linha['assuntoMensagem']; ?> </p>
									</div>
								</a>
							<?php
						} else {
							echo '<p>Não há mensagem</p>';
						}

							?>
							<div class="mail-right dots_drop">
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" aria-expanded="false">
										<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
									</a>
									<ul class="dropdown-menu float-right">
										<li>
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linha['idMensagem'] ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linha['idMensagem'] ?>">
												<i class="fa fa-reply mail-icon"></i>
												Responder
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-download mail-icon"></i>
												Arquivo
											</a>
										</li>
										<li>
											<a href="#" class="font-red" title="">
												<i class="fa fa-trash-o mail-icon"></i>
												Excluir
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="mail-right">
								<p><?php echo $linha['dataMensagem']; ?></p>
							</div>
							<div class="clearfix"> </div>
							<div id="collapse-<?php echo $linha['idMensagem'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="mail-body">
									<p><?php echo $linha['mensagemMensagem']; ?></p>
									<form>
										<input type="text" placeholder="Responder remetente" required="">
										<input type="submit" value="Mandar">
									</form>
								</div>
							</div>
							</div>

						<?php

					}

						?>


				</div>



				<div class="inbox-page row">
					<h4>Mensagens de ontem</h4>


					<?php

					$ontem = new DateTime('yesterday');
					$ontemData = $ontem->format('Y-m-d');




					$queryOntem = $pdo->query("SELECT *
					FROM mensagens
					INNER JOIN funcionarios
					ON funcionarios.idFuncionario   where  mensagens.idRemetente = {$id_usuario}  and funcionarios.idFuncionario = {$id_usuario} and dataMensagem = '{$ontemData}'");

					while ($linhaOntem = $queryOntem->fetch(PDO::FETCH_ASSOC)) {
						$quantResultado = count($linhaOntem);
						echo $quantResultado;

						$data = $linhaOntem['dataMensagem'];
						$dataH = new DateTime($data);
						$hojeData = $dataH->format('Y-m-d');
						echo $hojeData;
						if ($ontemData == $hojeData || $quantResultado > 0) {
							echo 'testse';
					?>
							<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i1.png" alt="" /></div>
								<div class="mail mail-name">
									<?php $query1Ontem = $pdo->query("SELECT nomeFuncionario FROM funcionarios where idFuncionario =  {$linhaOntem['idDestinatario']} ");

									while ($linha1Ontem = $query1Ontem->fetch(PDO::FETCH_ASSOC)) {


										echo "<h6>{$linha1Ontem['nomeFuncionario']}</h6>";
									} ?>
								</div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linhaOntem['idMensagem']; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linhaOntem['idMensagem']; ?>">
									<div class="mail">
										<p><?php echo $linhaOntem['assuntoMensagem']; ?> </p>
									</div>
								</a>

							<?php
						} else {
							echo 'Não há mensagem';
						}

							?>
							<div class="mail-right dots_drop">
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" aria-expanded="false">
										<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
									</a>
									<ul class="dropdown-menu float-right">
										<li>
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linhaOntem['idMensagem'] ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linhaOntem['idMensagem'] ?>">
												<i class="fa fa-reply mail-icon"></i>
												Responder
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-download mail-icon"></i>
												Arquivo
											</a>
										</li>
										<li>
										
											<a href="vendor/functions/mensagens/mensagem.php?pagina=caixa-de-entrada&idMsgApagar=<?php echo $linhaOntem['idMensagem'] ?>" class="font-red" title="">
												<i class="fa fa-trash-o mail-icon"></i>
												Excluir
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="mail-right">
								<p><?php echo $linhaOntem['dataMensagem']; ?></p>
							</div>
							<div class="clearfix"> </div>
							<div id="collapse-<?php echo $linhaOntem['idMensagem'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="mail-body">
									<p><?php echo $linhaOntem['mensagemMensagem']; ?></p>
									<form>
										<input type="text" placeholder="Responder remetente" required="">
										<input type="submit" value="Mandar">
									</form>
								</div>
							</div>
							</div>

						<?php

					}

						?>

				</div>

				<div class="inbox-page row">
					<h4>Mensagens mais antigas</h4>


					<?php
					$hoje = new DateTime('now');
					$hojeData = $hoje->format('Y-m-d');
					$ontem = new DateTime('yesterday');
					$ontemData = $ontem->format('Y-m-d');

					echo $hojeData;
					echo '<br>';
					echo $ontemData;
					echo '<br>';
					// $ontemData = $ontem->format('Y-m-d');

					// $ontemData = $ontemData;
					// echo $ontemData;


					if( $hojeData == $ontemData){
						echo 'não é a data';
					}else{
						echo 'é a data';
					}

					$queryAntiga = $pdo->query("SELECT *
					FROM mensagens
					INNER JOIN funcionarios
					ON funcionarios.idFuncionario   where  mensagens.idRemetente = {$id_usuario}  and funcionarios.idFuncionario = {$id_usuario} ");

					while ($linhaAntiga = $queryOntem->fetch(PDO::FETCH_ASSOC)) {
						$quantResultado3 = count($linhaAntiga);
						echo $quantResultado;

						$data = $linhaAntiga['dataMensagem'];
						$dataH = new DateTime($data);
						$hojeData = $dataH->format('Y-m-d');
						// echo $hojeData;
						if ($AntigaData == $hojeData || $quantResultado3 > 0) {
						
					?>
							<div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="mail "> <input type="checkbox" class="checkbox"> </div>
								<div class="mail"><img src="images/i1.png" alt="" /></div>
								<div class="mail mail-name">
									<?php $query1Ontem = $pdo->query("SELECT nomeFuncionario FROM funcionarios where idFuncionario =  {$linhaAntiga['idDestinatario']} ");

									while ($linha1Ontem = $query1Ontem->fetch(PDO::FETCH_ASSOC)) {


										echo "<h6>{$linha1Ontem['nomeFuncionario']}</h6>";
									} ?>
								</div>
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linhaAntiga['idMensagem']; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linhaAntiga['idMensagem']; ?>">
									<div class="mail">
										<p><?php echo $linhaAntiga['assuntoMensagem']; ?> </p>
									</div>
								</a>

							<?php
						} else {
							echo 'Não há mensagem';
						}

							?>
							<div class="mail-right dots_drop">
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" aria-expanded="false">
										<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
									</a>
									<ul class="dropdown-menu float-right">
										<li>
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $linhaAntiga['idMensagem'] ?>" aria-expanded="true" aria-controls="collapse-<?php echo $linhaAntiga['idMensagem'] ?>">
												<i class="fa fa-reply mail-icon"></i>
												Responder
											</a>
										</li>
										<li>
											<a href="#" title="">
												<i class="fa fa-download mail-icon"></i>
												Arquivo
											</a>
										</li>
										<li>
											<a href="#" name="<?php echo $linhaAntiga['idMensagem'] ?>" class="font-red" title="">
												<i class="fa fa-trash-o mail-icon"></i>
												<?php echo $linhaAntiga['idMensagem'] ?>
												Excluir
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="mail-right">
								<p><?php echo $linhaAntiga['dataMensagem']; ?></p>
							</div>
							<div class="clearfix"> </div>
							<div id="collapse-<?php echo $linhaAntiga['idMensagem'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="mail-body">
									<p><?php echo $linhaAntiga['mensagemMensagem']; ?></p>
									<form>
										<input type="text" placeholder="Responder remetente" required="">
										<input type="submit" value="Mandar">
									</form>
								</div>
							</div>
							</div>

						<?php

					}

						?>

				</div>


				<div class="inbox-page row">
					<h4>Mensagens mais antigas</h4>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt="" /></div>
						<div class="mail mail-name">
							<h6> Michael</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapsenine">
							<div class="mail">
								<p>Mollis nullam quis risus ornare vel leo dolor sit amet</p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>29th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
							<div class="mail-body">
								<p>Skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Janiya</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
							<div class="mail">
								<p>Nullam quis risus mollis ornare leo ollis nullam quis</p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>28th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Skolski</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
							<div class="mail">
								<p>Ornare vel quis risus ollis nullam quis eget urna mollis </p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>28th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
							<div class="mail-body">
								<p>Nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Emoori</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
							<div class="mail">
								<p>Vely Ornare leo nullam quis risus eget ollis nullam quis</p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>27th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
							<div class="mail-body">
								<p>Anim pariatur cliche repreh enderit brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Janiya</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
							<div class="mail">
								<p>Vely Ornare quis risus ollis nullam quis eget urna mollis </p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>26th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon temsunt </p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Skolski</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
							<div class="mail">
								<p>Vely Ornare leo nullam quis ollis nullam quis risus eget </p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>26th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i1.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Janiya</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
							<div class="mail">
								<p>Nullam quis risus mollis ornare vel eu leo ollis nullam quis</p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>26th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i2.png" alt="" /></div>
						<div class="mail mail-name">
							<h6> Michael</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
							<div class="mail">
								<p>Mollis nullam quis risus eget ollis nullam quis urna</p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>25th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua putica sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i3.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Skolski</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
							<div class="mail">
								<p>Ornare vel eu leo nullam quis urna mollis ollis nullam quis</p>
							</div>
						</a>
						<div class="mail-right  dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>25th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
					<div class="inbox-row widget-shadow">
						<div class="mail "> <input type="checkbox" class="checkbox"> </div>
						<div class="mail"><img src="images/i4.png" alt="" /></div>
						<div class="mail mail-name">
							<h6>Emoori</h6>
						</div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
							<div class="mail">
								<p>Vely Ornare leo nullam quis ollis nullam quis risus mollis </p>
							</div>
						</a>
						<div class="mail-right dots_drop">
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<p><i class="fa fa-ellipsis-v mail-icon"></i></p>
								</a>
								<ul class="dropdown-menu float-right">
									<li>
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
											<i class="fa fa-reply mail-icon"></i>
											Reply
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-download mail-icon"></i>
											Archive
										</a>
									</li>
									<li>
										<a href="#" class="font-red" title="">
											<i class="fa fa-trash-o mail-icon"></i>
											Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mail-right">
							<p>10th Nov</p>
						</div>
						<div class="clearfix"> </div>
						<div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
							<div class="mail-body">
								<p>Laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>

</div>
</div>