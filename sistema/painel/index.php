<?php

require_once "verificar.php";
require_once "./../conexao.php";

$id_usuario = $_SESSION['id_usuario'];
$query = $pdo->query("select * from funcionarios where idFuncionario = $id_usuario");

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_res = @count($res);

//recuperar os dados do usuario logado

if ($total_res > 0) {
	$nome_user = $res[0]['nomeFuncionario'];
	$foto_user = $res[0]['fotoFuncionario'];
	$nivel_user = $res[0]['administradorFuncionario'];
	$cpf_user = $res[0]['cpfFuncionario'];
	$senha_user = $res[0]['senhaFuncionario'];
	$email_user = $res[0]['emailFuncionario'];
	$id_user = $res[0]['idFuncionario'];
}

$pagina = @$_GET['pagina'];



?>

<!DOCTYPE HTML>
<html>

<head>
	<title><?php echo $nome_site; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->

	<!-- calendar -->
	<link rel="stylesheet" href="css/monthly.css">
	<!-- //calendar -->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
	<style>
		#chartdiv {
			width: 100%;
			height: 295px;
		}
	</style>
	<!--pie-chart -->
	<!-- index page sales reviews visitors pie chart -->
	<script src="js/pie-chart.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo-pie-1').pieChart({
				barColor: '#2dde98',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-2').pieChart({
				barColor: '#8e43e7',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-3').pieChart({
				barColor: '#ffc168',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function(from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});


		});
	</script>
	<!-- //pie-chart -->
	<!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items: 3,
				lazyLoad: true,
				autoPlay: true,
				pagination: true,
				nav: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Imobiliaria<span class="dashboard_text">Sistema Gest??o</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MENU NAVEGA????O</li>
							<li class="treeview">
								<a href="index.php?pagina=home">
									<i class="fa fa-dashboard"></i> <span>Dashboard </span>
								</a>
							</li>


							<li class="treeview">
								<a href="#">
									<i class="fa fa-plus"></i>
									<span>Cadastro</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=cargos"><i class="fa fa-angle-right"></i> Cargos</a></li>
									<li><a href="index.php?pagina=tipos-imoveis"><i class="fa fa-angle-right"></i> Tipos Im??veis</a></li>

									<li><a href="index.php?pagina=cidades"><i class="fa fa-angle-right"></i> Cidades</a></li>
									<li><a href="index.php?pagina=bairros"><i class="fa fa-angle-right"></i> Bairros</a></li>
									<li><a href="index.php?pagina=contas-banco"><i class="fa fa-angle-right"></i> Contas Banc??rias</a></li>

									<li><a href="index.php?pagina=frequencias"><i class="fa fa-angle-right"></i> Frequ??ncias</a></li>

									<li><a href="index.php?pagina=acessos"><i class="fa fa-angle-right"></i> Acessos</a></li>
								</ul>
							</li>

							<li class="treeview">
								<a href="#">
									<i class="fa fa-dollar"></i>
									<span>Financeiro</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=contas-a-pagar"><i class="fa fa-angle-right"></i> Contas ?? pagar</a></li>
									<li><a href="index.php?pagina=contas-a-receber"><i class="fa fa-angle-right"></i> Contas ?? receber</a></li>


								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-home"></i>
									<span>Im??veis</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=imoveis"><i class="fa fa-angle-right"></i> Im??veis Cadastrados</a></li>
									<li><a href="index.php?pagina=imoveis-venda"><i class="fa fa-angle-right"></i> Im??veis Venda</a></li>

									<li><a href="index.php?pagina=imoveis-locacao"><i class="fa fa-angle-right"></i> Im??veis Loca????o</a></li>

									<li><a href="index.php?pagina=imoveis-vendidos"><i class="fa fa-angle-right"></i> Im??veis Vendidos</a></li>

									<li><a href="index.php?pagina=imoveis-alugados"><i class="fa fa-angle-right"></i> Im??veis Alugados</a></li>

									<li><a href="index.php?pagina=imoveis-inativos"><i class="fa fa-angle-right"></i> Im??veis Inativos</a></li>


								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-user"></i>
									<span>Pessoas</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=funcionarios"><i class="fa fa-angle-right"></i> Funcion??rio</a></li>
									<li><a href="index.php?pagina=vendedoresLocadores"><i class="fa fa-angle-right"></i> Vendedores / Locadores</a></li>
									<li><a href="index.php?pagina=compradores"><i class="fa fa-angle-right"></i> Compradores</a></li>
									<li><a href="index.php?pagina=locadores"><i class="fa fa-angle-right"></i> Locadores</a></li>
									<li><a href="index.php?pagina=locat??rio"><i class="fa fa-angle-right"></i> Locat??rio</a></li>
									<li><a href="index.php?pagina=usuarios"><i class="fa fa-angle-right"></i> Usuarios</a></li>

									<li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
									<li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
								</ul>
							</li>


							<li class="treeview">
								<a href="#">
									<i class="fa fa-laptop"></i>
									<span>Configura????es</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=config-site"><i class="fa fa-angle-right"></i> Site</a></li>
								</ul>
							</li>
							<!-- <li class="treeview">
								<a href="charts.html">
									<i class="fa fa-pie-chart"></i>
									<span>Charts</span>
									<span class="label label-primary pull-right">new</span>
								</a>
							</li>
							
							<li class="treeview">
								<a href="#">
									<i class="fa fa-laptop"></i>
									<span>UI Elements</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
									<li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
									<li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
									<li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
								</ul>
							</li>
							<li>
								<a href="widgets.html">
									<i class="fa fa-th"></i> <span>Widgets</span>
									<small class="label pull-right label-info">08</small>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-edit"></i> <span>Forms</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
									<li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-table"></i> <span>Tables</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
								</ul>
							</li> -->
							<li class="treeview">
								<a href="#">
									<i class="fa fa-envelope"></i> <span>Mensagens </span>
									<i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=caixa-de-entrada"><i class="fa fa-angle-right"></i> Caixa de mensagens </a></li>
									<li><a href="index.php?pagina=caixa-de-saida"><i class="fa fa-angle-right"></i> Enviar mensagens </a></li>
								</ul>
							</li>


							<!-- <li class="treeview">
								<a href="#">
									<i class="fa fa-envelope"></i> <span>Mailbox </span>
									<i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
								<ul class="treeview-menu">
									<li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
									<li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
								</ul>
							</li> -->
							<li class="treeview">
								<a href="index.php?pagina=agenda">
									<i class="fa fa-calendar-o"></i> <span>Agenda</span>
								</a>
							</li>
							<li class="treeview ">
								<a href="index.php?pagina=tarefas">
									<i class="fa fa-clock-o"></i> <span>Tarefas Usu??rios</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-file-o"></i> <span>Relat??rios financeiros </span>
									<i class="fa fa-angle-left pull-right"></i>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-angle-right"></i> Relat??rio movimenta????es </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Relat??rio comiss??es </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Relat??rio alugu??is </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Relat??rio
												contas pagar </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Relat??rio
												contas receber </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Recibo de pagamentos </a></li>

									</ul>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-file-o"></i> <span>Contratos e PDFs</span>
									<i class="fa fa-angle-left pull-right"></i>
									<ul class="treeview-menu">
										<li><a href="#"><i class="fa fa-angle-right"></i> Proposta compra </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Proposta loca????o </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Laudo vistorias </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Vendas </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Alugu??is </a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i> Recibo de pagamentos </a></li>

									</ul>
							</li>

							<!-- <li class="treeview">
								<a href="#">
									<i class="fa fa-folder"></i> <span>Examples</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
									<li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
									<li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
									<li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
									<li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
								</ul>
							</li> -->
							<li class="header">LABELS</li>
							<li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
							<li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
							<li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left">
					<!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/1.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/4.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/2.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">Ver todas as mensagens</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="user_img"><img src="images/4.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/3.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li><a href="#">
										<div class="user_img"><img src="images/2.jpg" alt=""></div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p><span>1 hour ago</span></p>
										</div>
										<div class="clearfix"></div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">Ver todas as notifica????es</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">Veja todas as tarefas pendentes</a>
									</div>
								</li>
							</ul>
						</li>

						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" aria-expanded="false"><span class="text-white glyphicon glyphicon-eye-open" aria-hidden="true"></span><span class="badge user1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<a href="../../index.html" target="_blank">
											<h3>VISITAR SITE</h3>
										</a>
									</div>
								</li>
								<li>
									<div class="notification_header">
										<a href="index.php?pagina=config-site">
											<h3>MODIFICAR SITE</h3>
										</a>
									</div>
								</li>
								
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
										<div class="task-info">

											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
								<!-- <li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
								<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li> -->
								<li>
									<div class="notification_bottom">
										<a href="#">Veja todas as tarefas pendentes</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Pesquisar..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img class="img-fluid" width="50px" height="50px" src="images/perfil/<?php echo $foto_user ?>" alt=""> </span>
									<div class="user-name">
										<p><?php echo $nome_user ?></p>
										<span><?php if ($nivel_user) {
													echo "Administrador";
												} ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#" data-toggle="modal" data-target="#modalPerfil"><i class="fa fa-suitcase"></i> Perfil</a> </li>
								<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->

		<!-- main content start-->

		<?php

		if ($pagina == "home" || $pagina == "") {
			require_once 'home.php';
		} elseif ($pagina == "cargos") {
			require_once 'cargos.php';
		} elseif ($pagina == "funcionarios") {
			require_once 'funcionarios.php';
		} elseif ($pagina == "usuarios") {
			require_once 'usuarios.php';
		} elseif ($pagina == "caixa-de-entrada") {
			require_once 'caixa-de-entrada.php';
		} elseif ($pagina == "caixa-de-saida") {
			require_once 'caixa-de-saida.php';
		} elseif ($pagina == "tipos-imoveis") {
			require_once 'tipos-imoveis.php';
		} elseif ($pagina == "contas-a-pagar") {
			require_once 'contas-a-pagar.php';
		} elseif ($pagina == "contas-a-receber") {
			require_once 'contas-a-receber.php';
		} elseif ($pagina == "config-site") {
			require_once 'config-site.php';
		} elseif ($pagina == "agenda") {
			require_once 'agenda.php';
		} elseif ($pagina == "cidades") {
			require_once 'cidades.php';
		} elseif ($pagina == "bairros") {
			require_once 'bairros.php';
		} elseif ($pagina == "contas-banco") {
			require_once 'contas-banco.php';
		} elseif ($pagina == "frequencias") {
			require_once 'frequencias.php';
		} elseif ($pagina == "imoveis") {
			require_once 'imoveis.php';
		} elseif ($pagina == "vendedoresLocadores") {
			require_once 'vendedoresLocadores.php';
		} elseif ($pagina == "acessos") {
			require_once 'acessos.php';
		}else {
			require_once '404.html';
		}
		
		?>


		<!-- modal perfil -->
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar dados</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST" id="form-usuario">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Nome</label>
										<input type="text" class="form-control" name="nome_user" value="<?php echo $nome_user; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">CPF</label>
										<input type="text" class="form-control" name="cpf_user" id="cpf_user" value="<?php echo $cpf_user; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Email</label>
										<input type="text" class="form-control" name="email_user" value="<?php echo $email_user; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Senha</label>
										<input type="text" class="form-control" name="senha_user" value="<?php echo $senha_user; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="">Foto</label>
										<input type="file" class="form-control" name="foto" onChange="carregarImg2();" id="foto-user">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<img src="images/perfil/<?php echo $foto_user ?>" width="100px" id="target-user">
									</div>
								</div>
							</div>

							<input type="hidden" name="id_user" value="<?php echo $id_usuario ?>">
							<input type="hidden" name="foto_user" value="<?php echo $foto_user ?>">
							<input type="hidden" name="nivel_user" value="<?php echo $nivel_user ?>">

							<small>
								<div class="mt-3 text-center" id="msg-user"></div>
							</small>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Alterar e Salvar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--footer-->
		<div class="footer">
			<!-- ?? 2018 Glance Design Dashboard. Todos os direitos reservados Design por w3layouts -->
			<p>&copy; 2022 Caipora Dashboard. Todos os direitos reservados | <a href="https://caipora.com.br/" target="_blank">CAIPORA SOLU????ES WEB</a></p>
		</div>
		<!--//footer-->
	</div>

	<!-- new added graphs chart js-->

	<!-- carregar imagem no <!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load(function() {

			$('#mycalendar').monthly({
				mode: 'event',

			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

			switch (window.location.protocol) {
				case 'http:':
				case 'https:':
					// running on a server, should be good.
					break;
				case 'file:':
					alert('Just a heads-up, events will not work when run locally.');
			}

		});
	</script>
	<!-- //calendar -->modal -->

	<script>
		function carregarImg2() {
			var target = document.getElementById('target-user');
			var file = document.querySelector('#foto-user').files[0];

			var reader = new FileReader();

			reader.onloadend = function() {
				target.src = reader.result;
			};

			if (file) {
				reader.readAsDataURL(file);
			} else {
				target.src = "";
			}
		}
	</script>



	<!-- https://www.youtube.com/watch?v=8U7fxwHt9JY&list=PLxNM4ef1BpxhMhQuRs5KtLaxwz9Wj3Hmf&index=28 -->


	<script src="js/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>

	<script>
		var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById("canvas").getContext("2d");
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Chart.js Bar Chart'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			barChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myBar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + barChartData.datasets.length,
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				borderWidth: 1,
				data: []
			};

			for (var index = 0; index < barChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			barChartData.datasets.push(newDataset);
			window.myBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (barChartData.datasets.length > 0) {
				var month = MONTHS[barChartData.labels.length % MONTHS.length];
				barChartData.labels.push(month);

				for (var index = 0; index < barChartData.datasets.length; ++index) {
					//window.myBar.addData(randomScalingFactor(), index);
					barChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			barChartData.datasets.splice(0, 1);
			window.myBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			barChartData.labels.splice(-1, 1); // remove the label first

			barChartData.datasets.forEach(function(dataset, datasetIndex) {
				dataset.data.pop();
			});

			window.myBar.update();
		});
	</script>
	<!-- new added graphs chart js-->

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};


		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->


	<script src="js/nicEdit.js" type="text/javascript"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() {
			//new nicEditor().panelInstance('area1');
			new nicEditor({
				fullPanel: true
			}).panelInstance('area2');
			//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
			//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
			//new nicEditor({maxHeight : 100}).panelInstance('area5');
		});
	</script>

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	<script>
		var graphdata1 = {
			linecolor: "#CCA300",
			title: "Monday",
			values: [{
					X: "6:00",
					Y: 10.00
				},
				{
					X: "7:00",
					Y: 20.00
				},
				{
					X: "8:00",
					Y: 40.00
				},
				{
					X: "9:00",
					Y: 34.00
				},
				{
					X: "10:00",
					Y: 40.25
				},
				{
					X: "11:00",
					Y: 28.56
				},
				{
					X: "12:00",
					Y: 18.57
				},
				{
					X: "13:00",
					Y: 34.00
				},
				{
					X: "14:00",
					Y: 40.89
				},
				{
					X: "15:00",
					Y: 12.57
				},
				{
					X: "16:00",
					Y: 28.24
				},
				{
					X: "17:00",
					Y: 18.00
				},
				{
					X: "18:00",
					Y: 34.24
				},
				{
					X: "19:00",
					Y: 40.58
				},
				{
					X: "20:00",
					Y: 12.54
				},
				{
					X: "21:00",
					Y: 28.00
				},
				{
					X: "22:00",
					Y: 18.00
				},
				{
					X: "23:00",
					Y: 34.89
				},
				{
					X: "0:00",
					Y: 40.26
				},
				{
					X: "1:00",
					Y: 28.89
				},
				{
					X: "2:00",
					Y: 18.87
				},
				{
					X: "3:00",
					Y: 34.00
				},
				{
					X: "4:00",
					Y: 40.00
				}
			]
		};
		var graphdata2 = {
			linecolor: "#00CC66",
			title: "Tuesday",
			values: [{
					X: "6:00",
					Y: 100.00
				},
				{
					X: "7:00",
					Y: 120.00
				},
				{
					X: "8:00",
					Y: 140.00
				},
				{
					X: "9:00",
					Y: 134.00
				},
				{
					X: "10:00",
					Y: 140.25
				},
				{
					X: "11:00",
					Y: 128.56
				},
				{
					X: "12:00",
					Y: 118.57
				},
				{
					X: "13:00",
					Y: 134.00
				},
				{
					X: "14:00",
					Y: 140.89
				},
				{
					X: "15:00",
					Y: 112.57
				},
				{
					X: "16:00",
					Y: 128.24
				},
				{
					X: "17:00",
					Y: 118.00
				},
				{
					X: "18:00",
					Y: 134.24
				},
				{
					X: "19:00",
					Y: 140.58
				},
				{
					X: "20:00",
					Y: 112.54
				},
				{
					X: "21:00",
					Y: 128.00
				},
				{
					X: "22:00",
					Y: 118.00
				},
				{
					X: "23:00",
					Y: 134.89
				},
				{
					X: "0:00",
					Y: 140.26
				},
				{
					X: "1:00",
					Y: 128.89
				},
				{
					X: "2:00",
					Y: 118.87
				},
				{
					X: "3:00",
					Y: 134.00
				},
				{
					X: "4:00",
					Y: 180.00
				}
			]
		};
		var graphdata3 = {
			linecolor: "#FF99CC",
			title: "Wednesday",
			values: [{
					X: "6:00",
					Y: 230.00
				},
				{
					X: "7:00",
					Y: 210.00
				},
				{
					X: "8:00",
					Y: 214.00
				},
				{
					X: "9:00",
					Y: 234.00
				},
				{
					X: "10:00",
					Y: 247.25
				},
				{
					X: "11:00",
					Y: 218.56
				},
				{
					X: "12:00",
					Y: 268.57
				},
				{
					X: "13:00",
					Y: 274.00
				},
				{
					X: "14:00",
					Y: 280.89
				},
				{
					X: "15:00",
					Y: 242.57
				},
				{
					X: "16:00",
					Y: 298.24
				},
				{
					X: "17:00",
					Y: 208.00
				},
				{
					X: "18:00",
					Y: 214.24
				},
				{
					X: "19:00",
					Y: 214.58
				},
				{
					X: "20:00",
					Y: 211.54
				},
				{
					X: "21:00",
					Y: 248.00
				},
				{
					X: "22:00",
					Y: 258.00
				},
				{
					X: "23:00",
					Y: 234.89
				},
				{
					X: "0:00",
					Y: 210.26
				},
				{
					X: "1:00",
					Y: 248.89
				},
				{
					X: "2:00",
					Y: 238.87
				},
				{
					X: "3:00",
					Y: 264.00
				},
				{
					X: "4:00",
					Y: 270.00
				}
			]
		};
		var graphdata4 = {
			linecolor: "Random",
			title: "Thursday",
			values: [{
					X: "6:00",
					Y: 300.00
				},
				{
					X: "7:00",
					Y: 410.98
				},
				{
					X: "8:00",
					Y: 310.00
				},
				{
					X: "9:00",
					Y: 314.00
				},
				{
					X: "10:00",
					Y: 310.25
				},
				{
					X: "11:00",
					Y: 318.56
				},
				{
					X: "12:00",
					Y: 318.57
				},
				{
					X: "13:00",
					Y: 314.00
				},
				{
					X: "14:00",
					Y: 310.89
				},
				{
					X: "15:00",
					Y: 512.57
				},
				{
					X: "16:00",
					Y: 318.24
				},
				{
					X: "17:00",
					Y: 318.00
				},
				{
					X: "18:00",
					Y: 314.24
				},
				{
					X: "19:00",
					Y: 310.58
				},
				{
					X: "20:00",
					Y: 312.54
				},
				{
					X: "21:00",
					Y: 318.00
				},
				{
					X: "22:00",
					Y: 318.00
				},
				{
					X: "23:00",
					Y: 314.89
				},
				{
					X: "0:00",
					Y: 310.26
				},
				{
					X: "1:00",
					Y: 318.89
				},
				{
					X: "2:00",
					Y: 518.87
				},
				{
					X: "3:00",
					Y: 314.00
				},
				{
					X: "4:00",
					Y: 310.00
				}
			]
		};
		var Piedata = {
			linecolor: "Random",
			title: "Profit",
			values: [{
					X: "Monday",
					Y: 50.00
				},
				{
					X: "Tuesday",
					Y: 110.98
				},
				{
					X: "Wednesday",
					Y: 70.00
				},
				{
					X: "Thursday",
					Y: 204.00
				},
				{
					X: "Friday",
					Y: 80.25
				},
				{
					X: "Saturday",
					Y: 38.56
				},
				{
					X: "Sunday",
					Y: 98.57
				}
			]
		};
		$(function() {
			$("#Bargraph").SimpleChart({
				ChartType: "Bar",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata4, graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
			$("#sltchartype").on('change', function() {
				$("#Bargraph").SimpleChart('ChartType', $(this).val());
				$("#Bargraph").SimpleChart('reload', 'true');
			});
			$("#Hybridgraph").SimpleChart({
				ChartType: "Hybrid",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata4],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
			$("#Linegraph").SimpleChart({
				ChartType: "Line",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: false,
				data: [graphdata4, graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
			$("#Areagraph").SimpleChart({
				ChartType: "Area",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata4, graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
			$("#Scatterredgraph").SimpleChart({
				ChartType: "Scattered",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata4, graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
			$("#Piegraph").SimpleChart({
				ChartType: "Pie",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				showpielables: true,
				data: [Piedata],
				legendsize: "250",
				legendposition: 'right',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});

			$("#Stackedbargraph").SimpleChart({
				ChartType: "Stacked",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});

			$("#StackedHybridbargraph").SimpleChart({
				ChartType: "StackedHybrid",
				toolwidth: "50",
				toolheight: "25",
				axiscolor: "#E6E6E6",
				textcolor: "#6E6E6E",
				showlegends: true,
				data: [graphdata3, graphdata2, graphdata1],
				legendsize: "140",
				legendposition: 'bottom',
				xaxislabel: 'Hours',
				title: 'Weekly Profit',
				yaxislabel: 'Profit in $'
			});
		});
	</script>
	<!-- //for index page weekly sales java script -->


	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->



	<script src="./js/mascara.js"></script>

	<script>
		// $( '#form-usuario' ).submit(function( event ) {
		//   alert( "Handler for .submit() called." );
		//   event.preventDefault();
		// });

		$('#form-usuario').submit(function() {
			console.log('teste');
			event.preventDefault();
			var formData = new FormData(this);

			$.ajax({
				url: "editar-dados.php",
				type: 'POST',
				data: formData,

				success: function(mensagem) {
					$('#msg-user').text('');
					$('#msg-user').removeClass();
					if (mensagem.trim() == "Salvo com Sucesso") {
						location.reload();
					} else {
						$('#msg-user').addClass('text-danger');
						$('#msg-user').text(mensagem);

					}

				},
				cache: false,
				contentType: false,
				processData: false,
			});
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->




	<!-- <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() {
			nicEditors.allTextAreas()
		});
	</script> -->

</body>

</html>