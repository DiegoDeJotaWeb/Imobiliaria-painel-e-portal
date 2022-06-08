<?php
require_once "./../conexao.php";


$id_usuario = $_SESSION['id_usuario'];

$query = $pdo->query("select * from cargos");

?>


<div id="page-wrapper">
	<div class="main-page compose">
		<h2 class="title1">Escrever mensagem</h2>
		<div class="col-md-4 compose-left">
			<div class="folder widget-shadow">
				<ul>
					<li class="head">Pastas</li>
					<li><a href="inbox.html"><i class="fa fa-inbox"></i>Entrada <span>52</span></a></li>
					<li><a href="#"><i class="fa fa fa-envelope-o"></i>Saida </a></li>
					<li><a href="#"><i class="fa fa-file-text-o"></i>Rascunhos <span>03</span></a> </li>
					<li><a href="#"><i class="fa fa-trash-o"></i>Lixeira</a></li>
				</ul>
			</div>

			<div class="chat-grid widget-shadow">
				<ul>
					<li class="head">Usuarios (Online) </li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i1.png" alt="">
								<label class="small-badge"></label>
							</div>
							<div class="chat-right">
								<p>Andrew Josifn</p>
								<h6>Nullam quis risus eget </h6>
							</div>
							<div class="clearfix"> </div>
						</a>
					</li>
					<li><a href="#">
							<div class="chat-left">
								<img class="img-circle" src="images/i4.png" alt="">
								<label class="small-badge bg-green"></label>
							</div>
							<div class="chat-right">
								<p>Justen Ferry</p>
								<h6>Urna mollis ornare vel</h6>
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
								<p>Brown Andy </p>
								<h6>Quis risus ullam neget </h6>
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
								<p>Deos Jhon</p>
								<h6>Mollis ornare Urna vel</h6>
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
					Nova mensagem
				</div>
				<div class="panel-body">
					<div class="alert alert-info">
						Por favor, preencha os dados para enviar uma nova mensagem
					</div>
					<form action="vendor/functions/mensagens/mensagem.php" method="POST">
						<label for="paraQuem" class="control-label control3">Para :</label>
						<select class="form-control control3" id="paraQuem" name="paraQuem">
							<option value=""> - </option>
							<?php
							$query = $pdo->query("select * from funcionarios where idFuncionario !=$id_usuario");
							while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
								echo "<option value='{$linha['idFuncionario']}'>{$linha['nomeFuncionario']}</option>";
							}
							?>
						</select>
						<label for="assunto" class="control-label control3">Assunto :</label>
						<input type="text" class="form-control1 control3" name="assunto" id="assunto">
						<label for="mensagem" class="control-label control3">Mensagem :</label>
						<textarea rows="6" class="form-control1 control2 control3" name="mensagem" id="mensagem"></textarea>
						<input type="text" name="idUsuario" id="" value="<?php echo $id_usuario?>">
						<div class="form-group">
							<div class="btn btn-default btn-file">
								<i class="fa fa-paperclip"></i> Anexar arquivo
								<input type="file" name="attachment">
							</div>
							<p class="help-block">Max. 32MB</p>
						</div>
						<input type="submit" value="Enviar mensagens">
					</form>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>