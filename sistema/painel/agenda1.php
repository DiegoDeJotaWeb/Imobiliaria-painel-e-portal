<html class=" js " style="overflow: hidden;"><head>
	<title>ZAP IMOVEIS CLONE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Sistema para Escritórios desenvolvido no curso do Hugo Vasconcelos do Portal Hugo Cursos">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet" type="text/css">

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href="css/SidebarNav.min.css" media="all" rel="stylesheet" type="text/css">
	<!-- //side nav css file -->

	<link rel="stylesheet" href="css/monthly.css">

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts--> 

	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

	<link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
	<style>
		#chartdiv {
			width: 100%;
			height: 295px;
		}
	</style>
	<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
	<script src="js/pie-chart.js" type="text/javascript"></script>
	<script type="text/javascript">

		$(document).ready(function () {
			$('#demo-pie-1').pieChart({
				barColor: '#ffc168',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-2').pieChart({
				barColor: '#09872d',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-3').pieChart({
				barColor: '#de1024',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});


		});

	</script>
	<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
				nav:true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
	<script type="text/javascript" src="DataTables/datatables.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse" style="overflow: scroll; height:100%; scrollbar-width: thin;">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="./"><span class="fa fa-area-chart"></span> Imobiliária<span class="dashboard_text">Sistema Gestão</span></a></h1>
					</div>
					<div class="navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MENU DE NAVEGAÇÃO</li>
							<li class="treeview">
								<a href="./">
									<i class="fa fa-dashboard"></i> <span>Home</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-plus"></i>
									<span>Cadastros</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=cargos"><i class="fa fa-angle-right"></i> Cargos</a></li>
									<li><a href="index.php?pagina=tipos"><i class="fa fa-angle-right"></i> Tipos Imóveis</a></li>

									<li><a href="index.php?pagina=cidades"><i class="fa fa-angle-right"></i> Cidades</a></li>
									<li><a href="index.php?pagina=bairros"><i class="fa fa-angle-right"></i> Bairros</a></li>
									<li><a href="index.php?pagina=contas_banco"><i class="fa fa-angle-right"></i> Contas Bancárias</a></li>

									<li><a href="index.php?pagina=frequencias"><i class="fa fa-angle-right"></i> Frequências</a></li>
								</ul>
							</li>


							<li class="treeview">
								<a href="#">
									<i class="fa fa-home"></i>
									<span>Imóveis</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li><a href="index.php?pagina=imoveis"><i class="fa fa-angle-right"></i> Imóveis Cadastrados</a></li>
									<li><a href="index.php?pagina=imoveis-venda"><i class="fa fa-angle-right"></i> Imóveis Venda</a></li>

									<li><a href="index.php?pagina=imoveis-locacao"><i class="fa fa-angle-right"></i> Imóveis Locação</a></li>

									<li><a href="index.php?pagina=imoveis-vendidos"><i class="fa fa-angle-right"></i> Imóveis Vendidos</a></li>

									<li><a href="index.php?pagina=imoveis-alugados"><i class="fa fa-angle-right"></i> Imóveis Alugados</a></li>

									<li><a href="index.php?pagina=imoveis-inativos"><i class="fa fa-angle-right"></i> Imóveis Inativos</a></li>


								</ul>
							</li>
							
							<li class="treeview">
								<a href="#">
									<i class="fa fa-user"></i>
									<span>Pessoas</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">								
									<li class=" "><a href="index.php?pagina=funcionarios"><i class="fa fa-angle-right"></i> Funcionários</a></li>

									<li class=""><a href="index.php?pagina=vendedores"><i class="fa fa-angle-right"></i> Vendedores / Locadores</a></li>

									<li class=""><a href="index.php?pagina=compradores"><i class="fa fa-angle-right"></i> Compradores</a></li>


									<li class=""><a href="index.php?pagina=locatarios"><i class="fa fa-angle-right"></i> Locatários</a></li>

									
									<li class=""><a href="index.php?pagina=usuarios"><i class="fa fa-angle-right"></i> Usuários</a></li>

								</ul>
							</li>

							<li class="treeview">
								<a href="index.php?pagina=agenda">
									<i class="fa fa-calendar-o"></i> <span>Agenda</span>
								</a>
							</li>


							<li class="treeview ">
								<a href="index.php?pagina=tarefas">
									<i class="fa fa-clock-o"></i> <span>Tarefas Usuários</span>
								</a>
							</li>



							<li class="treeview">
								<a href="#">
									<i class="fa fa-dollar"></i>
									<span>Financeiro</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">								
									<li class=""><a href="index.php?pagina=pagar"><i class="fa fa-angle-right"></i> Contas à Pagar</a></li>

									<li class=""><a href="index.php?pagina=receber"><i class="fa fa-angle-right"></i> Contas à Receber</a></li>

									<li class=" "><a href="index.php?pagina=movimentacoes"><i class="fa fa-angle-right"></i> Extrato Caixa</a></li>


									<li class=""><a href="index.php?pagina=comissoes"><i class="fa fa-angle-right"></i> Comissões</a></li>


									<li class=" "><a href="index.php?pagina=vendas"><i class="fa fa-angle-right"></i> Vendas</a></li>

									<li class=" "><a href="index.php?pagina=alugueis"><i class="fa fa-angle-right"></i> Aluguéis</a></li>


									
								</ul>
							</li>		




							<li class="treeview ">
								<a href="#">
									<i class="fa fa-file-o"></i>
									<span>Relatórios Financeiros</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">						


									<li class=""><a href="#" data-toggle="modal" data-target="#RelFin"><i class="fa fa-angle-right"></i> Relatório Movimentações</a></li>

									<li class=""><a href="#" data-toggle="modal" data-target="#RelCom"><i class="fa fa-angle-right"></i> Relatório Comissões</a></li>

									<li class=""><a href="#" data-toggle="modal" data-target="#RelVen"><i class="fa fa-angle-right"></i> Relatório Vendas</a></li>

									<li class=""><a href="#" data-toggle="modal" data-target="#RelAlu"><i class="fa fa-angle-right"></i> Relatório Aluguéis</a></li>


									<li class=""><a href="#" data-toggle="modal" data-target="#RelPagar"><i class="fa fa-angle-right"></i> Relatório Contas Pagar</a></li>


									<li class=""><a href="#" data-toggle="modal" data-target="#RelReceb"><i class="fa fa-angle-right"></i> Relatório Contas Receber</a></li>


									<li class=""><a href="rel/recibo_class.php" target="_blank"><i class="fa fa-angle-right"></i> Recibo de Pagamento</a></li>
										
									

								</ul>
							</li>	




								<li class="treeview ">
								<a href="#">
									<i class="fa fa-file-o"></i>
									<span>Contratos e PDFs</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">						


									<li><a href="rel/proposta_compra_class.php" target="_blank"><i class="fa fa-angle-right"></i> Proposta Compra</a></li>

									<li><a href="rel/proposta_aluguel_class.php" target="_blank"><i class="fa fa-angle-right"></i> Proposta Locação</a></li>

									<li><a href="index.php?pagina=laudos"><i class="fa fa-angle-right"></i> Laudo Vistorias</a></li>


									<li class=""><a href="index.php?pagina=vendas_juridico"><i class="fa fa-angle-right"></i> Vendas</a></li>

									<li class=""><a href="index.php?pagina=alugueis_juridico"><i class="fa fa-angle-right"></i> Aluguéis</a></li>

									

								
								</ul>
							</li>	


							


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
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">


												<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue1">0</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Você possui 0 Tarefas Pendentes!</h3>
									</div>
								</li>

																
									

									<li>
										<div class="notification_bottom">
											<a href="index.php?pagina=agenda">Ver toda Agenda</a>
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




					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><img src="images/perfil/04-04-2022-13-12-10-maxresdefault-(3).jpg" alt="" width="50px" height="50px"> </span> 
										<div class="user-name">
											<p>Celke</p>
											<span>Administrador</span>
										</div>
										<i class="fa fa-angle-down lnr"></i>
										<i class="fa fa-angle-up lnr"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">

									<li> <a href="#" data-toggle="modal" data-target="#modalPerfil"><i class="fa fa-user"></i> Perfil</a> </li> 

									<li class=""> <a href="#" data-toggle="modal" data-target="#modalConfig"><i class="fa fa-cog"></i> Configurações</a> </li> 

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
			<div id="page-wrapper" style="min-height: 644px;">
				
<button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Nova Tarefa</button>

<input type="hidden" name="data_agenda" id="data_agenda" value="2022-04-21"> 

<div class="row" style="margin-top: 15px">

<div class="col-md-4 agile-calendar">
			<div class="calendar-widget">
                                       
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"><div class="monthly-header"><div class="monthly-header-title">Abril 2022</div><a href="#" class="monthly-prev"></a><a href="#" class="monthly-next"></a></div><div class="monthly-day-title-wrap"><div>Dom</div><div>Seg</div><div>Ter</div><div>Qua</div><div>Qui</div><div>Sex</div><div>Sab</div></div><div class="monthly-day-wrap"><div class="monthly-week"><div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div><div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div><div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div><div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div><div class="m-d monthly-day-blank"><div class="monthly-day-number"></div></div><a href="#" class="m-d monthly-day monthly-day-event" data-number="1"><div class="monthly-day-number ">1</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="2"><div class="monthly-day-number ">2</div><div class="monthly-indicator-wrap"></div></a></div><div class="monthly-week"><a href="#" class="m-d monthly-day monthly-day-event" data-number="3"><div class="monthly-day-number ">3</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="4"><div class="monthly-day-number ">4</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="5"><div class="monthly-day-number ">5</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="6"><div class="monthly-day-number ">6</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="7"><div class="monthly-day-number ">7</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="8"><div class="monthly-day-number ">8</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="9"><div class="monthly-day-number ">9</div><div class="monthly-indicator-wrap"></div></a></div><div class="monthly-week"><a href="#" class="m-d monthly-day monthly-day-event" data-number="10"><div class="monthly-day-number ">10</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="11"><div class="monthly-day-number ">11</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="12"><div class="monthly-day-number ">12</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="13"><div class="monthly-day-number ">13</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="14"><div class="monthly-day-number ">14</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="15"><div class="monthly-day-number ">15</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="16"><div class="monthly-day-number ">16</div><div class="monthly-indicator-wrap"></div></a></div><div class="monthly-week"><a href="#" class="m-d monthly-day monthly-day-event" data-number="17"><div class="monthly-day-number ">17</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="18"><div class="monthly-day-number ">18</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="19"><div class="monthly-day-number ">19</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="20"><div class="monthly-day-number ">20</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event monthly-today" data-number="21"><div class="monthly-day-number ">21</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="22"><div class="monthly-day-number ">22</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="23"><div class="monthly-day-number ">23</div><div class="monthly-indicator-wrap"></div></a></div><div class="monthly-week"><a href="#" class="m-d monthly-day monthly-day-event" data-number="24"><div class="monthly-day-number ">24</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="25"><div class="monthly-day-number ">25</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="26"><div class="monthly-day-number ">26</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="27"><div class="monthly-day-number ">27</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="28"><div class="monthly-day-number ">28</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="29"><div class="monthly-day-number ">29</div><div class="monthly-indicator-wrap"></div></a><a href="#" class="m-d monthly-day monthly-day-event" data-number="30"><div class="monthly-day-number ">30</div><div class="monthly-indicator-wrap"></div></a></div></div><div class="monthly-event-list"><div class="monthly-list-item" id="mycalendarday1" data-number="1"><div class="monthly-event-list-date">SEX<br>1</div></div><div class="monthly-list-item" id="mycalendarday2" data-number="2"><div class="monthly-event-list-date">SAB<br>2</div></div><div class="monthly-list-item" id="mycalendarday3" data-number="3"><div class="monthly-event-list-date">DOM<br>3</div></div><div class="monthly-list-item" id="mycalendarday4" data-number="4"><div class="monthly-event-list-date">SEG<br>4</div></div><div class="monthly-list-item" id="mycalendarday5" data-number="5"><div class="monthly-event-list-date">TER<br>5</div></div><div class="monthly-list-item" id="mycalendarday6" data-number="6"><div class="monthly-event-list-date">QUA<br>6</div></div><div class="monthly-list-item" id="mycalendarday7" data-number="7"><div class="monthly-event-list-date">QUI<br>7</div></div><div class="monthly-list-item" id="mycalendarday8" data-number="8"><div class="monthly-event-list-date">SEX<br>8</div></div><div class="monthly-list-item" id="mycalendarday9" data-number="9"><div class="monthly-event-list-date">SAB<br>9</div></div><div class="monthly-list-item" id="mycalendarday10" data-number="10"><div class="monthly-event-list-date">DOM<br>10</div></div><div class="monthly-list-item" id="mycalendarday11" data-number="11"><div class="monthly-event-list-date">SEG<br>11</div></div><div class="monthly-list-item" id="mycalendarday12" data-number="12"><div class="monthly-event-list-date">TER<br>12</div></div><div class="monthly-list-item" id="mycalendarday13" data-number="13"><div class="monthly-event-list-date">QUA<br>13</div></div><div class="monthly-list-item" id="mycalendarday14" data-number="14"><div class="monthly-event-list-date">QUI<br>14</div></div><div class="monthly-list-item" id="mycalendarday15" data-number="15"><div class="monthly-event-list-date">SEX<br>15</div></div><div class="monthly-list-item" id="mycalendarday16" data-number="16"><div class="monthly-event-list-date">SAB<br>16</div></div><div class="monthly-list-item" id="mycalendarday17" data-number="17"><div class="monthly-event-list-date">DOM<br>17</div></div><div class="monthly-list-item" id="mycalendarday18" data-number="18"><div class="monthly-event-list-date">SEG<br>18</div></div><div class="monthly-list-item" id="mycalendarday19" data-number="19"><div class="monthly-event-list-date">TER<br>19</div></div><div class="monthly-list-item" id="mycalendarday20" data-number="20"><div class="monthly-event-list-date">QUA<br>20</div></div><div class="monthly-list-item monthly-today" id="mycalendarday21" data-number="21"><div class="monthly-event-list-date">QUI<br>21</div></div><div class="monthly-list-item" id="mycalendarday22" data-number="22"><div class="monthly-event-list-date">SEX<br>22</div></div><div class="monthly-list-item" id="mycalendarday23" data-number="23"><div class="monthly-event-list-date">SAB<br>23</div></div><div class="monthly-list-item" id="mycalendarday24" data-number="24"><div class="monthly-event-list-date">DOM<br>24</div></div><div class="monthly-list-item" id="mycalendarday25" data-number="25"><div class="monthly-event-list-date">SEG<br>25</div></div><div class="monthly-list-item" id="mycalendarday26" data-number="26"><div class="monthly-event-list-date">TER<br>26</div></div><div class="monthly-list-item" id="mycalendarday27" data-number="27"><div class="monthly-event-list-date">QUA<br>27</div></div><div class="monthly-list-item" id="mycalendarday28" data-number="28"><div class="monthly-event-list-date">QUI<br>28</div></div><div class="monthly-list-item" id="mycalendarday29" data-number="29"><div class="monthly-event-list-date">SEX<br>29</div></div><div class="monthly-list-item" id="mycalendarday30" data-number="30"><div class="monthly-event-list-date">SAB<br>30</div></div></div></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>


<div class="col-xs-12 col-md-8 bs-example widget-shadow" style="padding:10px 5px; margin-top: 0px;" id="listar"><small>Não possui nenhum registro cadastrado!




</small></div>
</div>






<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form method="post" id="form-text">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-5">						
							<div class="form-group"> 
								<label>Título <small>(Máx 40 Caracteres)</small></label> 
								<input maxlength="40" type="text" class="form-control" name="titulo" id="titulo" required=""> 
							</div>						
						</div>

						<div class="col-md-4" id="nasc">						
							<div class="form-group"> 
								<label>Data </label> 
								<input type="date" class="form-control" name="data" id="data-modal"> 
							</div>						
						</div>

										
						<div class="col-md-3" id="nasc">						
							<div class="form-group"> 
								<label>Hora</label> 
								<input type="time" class="form-control" name="hora" id="hora" value="" required=""> 
							</div>						
						</div>	


					</div>


					
					

					<div class="col-md-12">						
							<div class="form-group"> 
								<label>Descrição <small>(Máx 100 Caracteres)</small></label> 
								<input maxlength="100" type="text" class="form-control" name="descricao" id="descricao">
							</div>						
						</div>


					
					<div class="col-md-12">
						<div class="form-group"> 
							<label>OBS <small>(Max 1000 Caracteres)</small></label> 
							<div unselectable="on" style="width: 540px;"><div class=" nicEdit-panelContain" unselectable="on" style="overflow: hidden; width: 100%; border: 1px solid rgb(204, 204, 204); background-color: rgb(239, 239, 239);"><div class=" nicEdit-panel" unselectable="on" style="margin: 0px 2px 2px; zoom: 1; overflow: hidden;"><div style="float: left; margin-top: 2px; display: none;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -432px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -54px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -126px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -342px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -162px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -72px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -234px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -144px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -180px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -324px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Size...</div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Family...</div></div></div></div><div unselectable="on" style="float: left; margin: 2px 1px 0px;"><div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;"><div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);"><div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -450px 0px;"></div><div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Format...</div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -108px 0px;"></div></div></div></div><div unselectable="on" style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -198px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -360px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -468px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -378px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -396px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -36px 0px;"></div></div></div></div><div style="float: left; margin-top: 2px;"><div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;"><div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);"><div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://js.nicedit.com/nicEditIcons-latest.gif&quot;); background-position: -18px 0px;"></div></div></div></div></div></div></div><div style="width: 540px; border-width: 0px 1px 1px; border-top-style: initial; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: initial; border-right-color: rgb(204, 204, 204); border-bottom-color: rgb(204, 204, 204); border-left-color: rgb(204, 204, 204); border-image: initial; overflow: hidden auto;"><div class=" nicEdit-main" contenteditable="true" style="width: 532px; margin: 4px; min-height: 110px; overflow: hidden;"> </div></div><textarea maxlength="1000" name="area" id="area" class="textarea" style="display: none;"> </textarea>
						</div>
					</div>	
					

					<br>
					<input type="hidden" name="id" id="id">
					<input type="hidden" name="usuario" id="usuario"> 
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
				<h4 class="modal-title" id="tituloModal"><span id="nome_mostrar"> </span> <small>Tarefa : <span id="status_mostrar"> </span></small></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			
			<div class="modal-body">			




				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Data: </b></span>
						<span id="data_mostrar"></span>							
					</div>
					<div class="col-md-6">							
						<span><b>Hora: </b></span>
						<span id="hora_mostrar"></span>
					</div>
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
						<span><b>Usuário Tarefa: </b></span>
						<span id="usuario_mostrar"></span>							
					</div>
				
				</div>


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
					<div class="col-md-12">							
						<span><b>Descrição: </b></span>
						<span id="descricao_mostrar"></span>
					</div>
				</div>


				

				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-12">							
						<span><b>Observações: </b></span>
						<div id="obs_mostrar" style="margin-top: 15px"></div>							
					</div>
				</div>
				


			</div>


		</div>
	</div>
</div>





<script type="text/javascript">var pag = "agenda"</script>
<script src="js/ajax.js"></script>


<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

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

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
		</script>
	<!-- //calendar -->

<script type="text/javascript">
	$(document).ready(function() {
		
		$('.sel3').select2({
			
		});
	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});
	});
</script>



<script>

$("#form-text").submit(function () {
	event.preventDefault();
    nicEditors.findEditor('area').saveContent();
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
                    listar();
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

</script>




<script type="text/javascript">
	function listar(){

	var data = $("#data_agenda").val();	
	$("#data-modal").val(data);


    $.ajax({
        url: pag + "/listar.php",
        method: 'POST',
        data: {data},
        dataType: "text",

        success:function(result){
            $("#listar").html(result);
        }
    });
}
</script>




<script type="text/javascript">
	function mostrar(id, titulo, descricao, hora, data, usuario, status, obs){

		for (let letra of obs){  				
			if (letra === '*'){
				obs = obs.replace('**', '"');
			}			
		}

				
		$('#nome_mostrar').text(titulo);
		$('#descricao_mostrar').text(descricao);
		$('#hora_mostrar').text(hora);
		$('#data_mostrar').text(data);
		$('#usuario_mostrar').text(usuario);		
		$('#status_mostrar').text(status);		
		
		$("#obs_mostrar").html(obs);
		
		
		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');
		$('#titulo').val('');		
		$('#descricao').val('');
		$('#hora').val('');				
		$('#data').val('2022-04-21');	
		nicEditors.findEditor("area").setContent('');	
		
	}
</script>


<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				</div>






		</div>

		<!-- new added graphs chart js-->

		<script src="js/Chart.bundle.js"></script>
		<script src="js/utils.js"></script>

		

		<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
		<!-- //Classie --><!-- //for toggle left push menu script -->

		<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(66, 79, 99); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 576px; background-color: rgb(242, 179, 63); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(66, 79, 99); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1033px; background-color: rgb(242, 179, 63); border: 0px; background-clip: padding-box; border-radius: 10px;"></div></div>
		<!--//scrolling js-->

		<!-- side nav js -->
		<script src="js/SidebarNav.min.js" type="text/javascript"></script>
		<script>
			$('.sidebar-menu').SidebarNav()
		</script>
		<!-- //side nav js -->

		<!-- for index page weekly sales java script -->
		<script src="js/SimpleChart.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.js"> </script>
		<!-- //Bootstrap Core JavaScript -->

		<!-- Mascaras JS -->
		<script type="text/javascript" src="js/mascaras.js"></script>
		<!-- Ajax para funcionar Mascaras JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 

	
	




	<!-- Modal -->
	<div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Editar Dados</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" id="form-usu">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Nome</label> 
									<input type="text" class="form-control" name="nome_usu" value="Celke" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>CPF</label> 
									<input type="text" class="form-control" id="cpf_usu" name="cpf_usu" value="000.000.000-00" required="" maxlength="14"> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Email</label> 
									<input type="email" class="form-control" name="email_usu" value="contato@hugocursos.com.br" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Senha</label> 
									<input type="password" class="form-control" name="senha_usu" value="123" required=""> 
								</div>
							</div>

						</div>	


						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Foto</label> 
									<input type="file" name="foto" onchange="carregarImg2();" id="foto-usu">
								</div>						
							</div>
							<div class="col-md-4">
								<div id="divImg">
									<img src="images/perfil/04-04-2022-13-12-10-maxresdefault-(3).jpg" width="100px" id="target-usu">									
								</div>
							</div>

						</div>

						<input type="hidden" name="id_usu" value="17">
						<input type="hidden" name="foto_usu" value="04-04-2022-13-12-10-maxresdefault-(3).jpg">

						<small><div id="msg-usu" align="center" class="mt-3"></div></small>					

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Editar Dados</button>
					</div>
				</form>

			</div>
		</div>
	</div>








	<!-- Modal CONFIG-->
	<div class="modal fade" id="modalConfig" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Configurações do Sistema Imobiliário</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" id="form-config">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Nome</label> 
									<input type="text" class="form-control" name="nome_config" value="ZAP IMOVEIS CLONE" required=""> 
								</div>						
							</div>
							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Whatsapp</label> 
									<input type="text" class="form-control" name="tel_config" id="tel_config" value="(31) 97527-5084" maxlength="15"> 
								</div>						
							</div>

							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Telefone Fixo</label> 
									<input type="text" class="form-control" name="tel_fixo_config" id="tel_fixo_config" value="(31) 3333-3333" maxlength="14"> 
								</div>						
							</div>

							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Email</label> 
									<input type="email" class="form-control" name="email_config" value="cesar@celke.com.br" required=""> 
								</div>						
							</div>

							

						</div>



						<div class="row">
							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Nome Banco</label> 
									<input type="text" class="form-control" name="nome_banco_config" value="Bradesco"> 
								</div>						
							</div>
							<div class="col-md-2">						
								<div class="form-group"> 
									<label>Tipo Conta</label> 
									<select class="form-control" name="tipo_conta_config" id="tipo_conta_config" value="Corrente"> 
										<option value="Corrente">Corrente</option>
										<option value="Poupança">Poupança</option>
									</select>
								</div>					
							</div>
							<div class="col-md-2">
								<div class="form-group"> 
									<label>Agência</label> 
									<input type="text" class="form-control" name="agencia_config" id="agencia_config" value="0123"> 
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group"> 
									<label>Conta</label> 
									<input type="text" class="form-control" name="conta_config" id="conta_config" value="123459-8"> 
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group"> 
									<label>Nome Beneficiário</label> 
									<input type="text" class="form-control" name="nome_beneficiario_config" id="nome_beneficiario_config" value="FREITAS IMOBILIÁRIA"> 
								</div>
							</div>

						</div>


						<div class="row">

							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Tipo Chave</label> 
									<select class="form-control" name="tipo_chave_pix_config" id="tipo_chave_pix_config" value="CNPJ"> 
										<option value="CNPJ">CNPJ</option>
										<option value="CPF">CPF</option>
										<option value="E-mail">E-mail</option>
										<option value="Telefone">Telefone</option>
										<option value="Código">Código</option>

									</select>
								</div>					
							</div>

							<div class="col-md-3">
								<div class="form-group"> 
									<label>Chave Pix</label> 
									<input type="text" class="form-control" name="chave_pix_config" id="chave_pix_config" value="12.356.655/4455-58"> 
								</div>
							</div>

							
							<div class="col-md-3">						
								<div class="form-group"> 
									<label>CRECI Imobiliária</label> 
									<input type="text" class="form-control" name="creci_config" value="MG-59455"> 
								</div>						
							</div>


								<div class="col-md-3">						
								<div class="form-group"> 
									<label>CNPJ Imobiliária</label> 
									<input type="text" class="form-control" name="cnpj_config" id="cnpj_config" value="12.356.655/4455-58" maxlength="18"> 
								</div>						
							</div>

						</div>




						<div class="row">

						

							<div class="col-md-9">
								<div class="form-group"> 
									<label>Endereço</label> 
									<input type="text" class="form-control" name="end_config" value="Rua X Número 1100 Bairro Centro - CEP 30512-980 - Belo Horizonte"> 
								</div>
							</div>



							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Relatório PDF/HTML</label> 
									<select class="form-control" name="rel" required=""> 
										<option selected="" value="pdf">PDF</option>
										<option value="html">HTML</option>
									</select>
								</div>						
							</div>

						</div>	



						<div class="row">

							<div class="col-md-3">
								<div class="form-group"> 
									<label>Comissão Venda IMOB</label> 
									<input maxlength="5" type="text" class="form-control" name="comissao_venda_imob_config" value="6.00" placeholder="Ex: 4 ou 4.5"> 
								</div>
							</div>


							<div class="col-md-3">
								<div class="form-group"> 
									<label>Comissão Venda Corretor</label> 
									<input maxlength="5" type="text" class="form-control" name="comissao_venda_corretor_config" value="2.00" placeholder="Ex: 4 ou 4.5"> 
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group"> 
									<label>Comissão Aluguél IMOB</label> 
									<input maxlength="5" type="text" class="form-control" name="comissao_aluguel_imob_config" value="10.00" placeholder="Ex: 4 ou 4.5"> 
								</div>
							</div>


							<div class="col-md-3">
								<div class="form-group"> 
									<label>Comissão Aluguél Corretor</label> 
									<input maxlength="5" type="text" class="form-control" name="comissao_aluguel_corretor_config" value="6.00" placeholder="Comissão para Primeiro Aluguél"> 
								</div>
							</div>

						</div>	


						<div class="row">
							<div class="col-md-2">						
								<div class="form-group"> 
									<label>Logo</label> 
									<input type="file" name="logo" onchange="carregarImgLogo();" id="foto-logo">
								</div>						
							</div>
							<div class="col-md-4">
								<div id="divImgLogo">
									<img src="../imagens/logo.png" width="100px" id="target-logo">									
								</div>
							</div>



							<div class="col-md-4">						
								<div class="form-group"> 
									<label>Favicon (ico)</label> 
									<input type="file" name="favicon" onchange="carregarImgFavicon();" id="foto-favicon">
								</div>						
							</div>
							<div class="col-md-2">
								<div id="divImgFavicon">
									<img src="../imagens/favicon.ico" width="20px" id="target-favicon">									
								</div>
							</div>





						</div>


						<div class="row">

							<div class="col-md-3">						
								<div class="form-group"> 
									<label>Img Relatório (*jpg) 200x60</label> 
									<input type="file" name="imgRel" onchange="carregarImgRel();" id="foto-rel">
								</div>						
							</div>
							<div class="col-md-3">
								<div id="divImgRel">
									<img src="../imagens/logo.jpg" width="100px" id="target-rel">									
								</div>
							</div>


							<div class="col-md-4">						
								<div class="form-group"> 
									<label>QRCode <small>(*jpg) Min 200x200</small></label> 
									<input type="file" name="imgQRCode" onchange="carregarImgQRCode();" id="foto-QRCode">
								</div>						
							</div>
							<div class="col-md-2">
								<div id="divImgQRCode">
									<img src="../imagens/qrcodeexemplo.jpg" width="80px" id="target-QRCode">									
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-4">						
								<div class="form-group"> 
									<label>Assinatura Imagem <small>(*jpg) Min 240x70 <small>(sem sobras do lado)</small></small></label> 
									<input type="file" name="imgAssinatura" onchange="carregarImgAssinatura();" id="foto-assinatura">
								</div>						
							</div>
							<div class="col-md-2">
								<div id="divImgAssinatura">
									<img src="../imagens/modelo-assinatura.jpg" width="100%" id="target-assinatura">									
								</div>
							</div>
						</div>


						<small><div id="msg-config" align="center" class="mt-3"></div></small>					

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Editar Dados</button>
					</div>
				</form>

			</div>
		</div>
	</div>






	<!-- Modal Rel Fin -->
	<div class="modal fade" id="RelFin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório Financeiro
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Fin', 'Fin')">
								<span style="color:#000" id="tudo-Fin">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Fin', 'Fin')">
								<span id="hoje-Fin">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Fin', 'Fin')">
								<span style="color:#000" id="mes-Fin">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Fin', 'Fin')">
								<span style="color:#000" id="ano-Fin">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/financeiro_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Fin" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Fin" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Movimentações em:</label> 
									<select class="form-control " name="local_filtro">
										<option value="">Tudo</option>
										<option value="Caixa">Caixa</option>
										<option value="Cartão de Débito">Cartão de Débito</option>
										<option value="Cartão de Crédito">Cartão de Crédito</option>
										<option value="Boleto">Boleto</option>

											
											<option value="Bradesco">Bradesco</option>

											
											<option value="Itaú">Itaú</option>

																			</select> 
								</div>						
							</div>

							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Entrada / Saídas</label> 
									<select class="form-control" name="tipo_mov" style="width:100%;">
										<option value="">Tudo</option>
										<option value="Entrada">Entrada</option>
										<option value="Saída">Saída</option>
									</select> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>






	<!-- Modal Rel Comissões -->
	<div class="modal fade" id="RelCom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório Comissões
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Com', 'Com')">
								<span style="color:#000" id="tudo-Com">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Com', 'Com')">
								<span id="hoje-Com">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Com', 'Com')">
								<span style="color:#000" id="mes-Com">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Com', 'Com')">
								<span style="color:#000" id="ano-Com">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/comissoes_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Com" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Com" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Corretor</label> 
									<select class="form-control sel12 select2-hidden-accessible" name="corretor" style="width:100%;" data-select2-id="select2-data-1-ebtt" tabindex="-1" aria-hidden="true">

										<option value="" data-select2-id="select2-data-3-g2ag">Todos</option>	
											<option value="3">Cesar Celke</option>

											
											<option value="12">João Santos</option>

											
											<option value="17">Celke</option>

											
											<option value="9">Corretor Teste</option>

											
											<option value="11">Katia Silva</option>

											
											<option value="13">Fábio</option>

											
											<option value="14">Wanderley</option>

											
											<option value="15">Pedro</option>

											
											<option value="16">Arthur</option>

																			</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-8ejl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-corretor-4a-container" aria-controls="select2-corretor-4a-container"><span class="select2-selection__rendered" id="select2-corretor-4a-container" role="textbox" aria-readonly="true" title="Todos">Todos</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
								</div>						
							</div>

							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Pago / Pendentes</label> 
									<select class="form-control sel12 select2-hidden-accessible" name="pago" style="width:100%;" data-select2-id="select2-data-4-osy4" tabindex="-1" aria-hidden="true">
										<option value="" data-select2-id="select2-data-6-xalr">Todas</option>
										<option value="Não">Pendentes</option>
										<option value="Sim">Pagas</option>
									</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-szcj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pago-io-container" aria-controls="select2-pago-io-container"><span class="select2-selection__rendered" id="select2-pago-io-container" role="textbox" aria-readonly="true" title="Todas">Todas</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>







	<!-- Modal Rel Vendas -->
	<div class="modal fade" id="RelVen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório de Vendas
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Ven', 'Ven')">
								<span style="color:#000" id="tudo-Ven">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Ven', 'Ven')">
								<span id="hoje-Ven">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Ven', 'Ven')">
								<span style="color:#000" id="mes-Ven">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Ven', 'Ven')">
								<span style="color:#000" id="ano-Ven">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/vendas_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Ven" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Ven" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Corretor</label> 
									<select class="form-control sel13 select2-hidden-accessible" name="corretor" style="width:100%;" data-select2-id="select2-data-7-qwjd" tabindex="-1" aria-hidden="true">

										<option value="" data-select2-id="select2-data-9-ow2n">Todos</option>	
											<option value="3">Cesar Celke</option>

											
											<option value="12">João Santos</option>

											
											<option value="17">Celke</option>

											
											<option value="9">Corretor Teste</option>

											
											<option value="11">Katia Silva</option>

											
											<option value="13">Fábio</option>

											
											<option value="14">Wanderley</option>

											
											<option value="15">Pedro</option>

											
											<option value="16">Arthur</option>

																			</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-0f41" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-corretor-f0-container" aria-controls="select2-corretor-f0-container"><span class="select2-selection__rendered" id="select2-corretor-f0-container" role="textbox" aria-readonly="true" title="Todos">Todos</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
								</div>						
							</div>

							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Concluídas / Pendentes</label> 
									<select class="form-control sel13 select2-hidden-accessible" name="pago" style="width:100%;" data-select2-id="select2-data-10-expy" tabindex="-1" aria-hidden="true">
										<option value="" data-select2-id="select2-data-12-hhth">Todas</option>
										<option value="Não">Pendentes</option>
										<option value="Sim">Concluídas</option>
									</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-11-lcu1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pago-e8-container" aria-controls="select2-pago-e8-container"><span class="select2-selection__rendered" id="select2-pago-e8-container" role="textbox" aria-readonly="true" title="Todas">Todas</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>







	<!-- Modal Rel Alugueis -->
	<div class="modal fade" id="RelAlu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório de Aluguéis
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Alu', 'Alu')">
								<span style="color:#000" id="tudo-Alu">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Alu', 'Alu')">
								<span id="hoje-Alu">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Alu', 'Alu')">
								<span style="color:#000" id="mes-Alu">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Alu', 'Alu')">
								<span style="color:#000" id="ano-Alu">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/alugueis_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Alu" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Alu" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-12">						
								<div class="form-group"> 
									<label>Corretor</label> 
									<select class="form-control sel14 select2-hidden-accessible" name="corretor" style="width:100%;" data-select2-id="select2-data-13-8xzh" tabindex="-1" aria-hidden="true">

										<option value="" data-select2-id="select2-data-15-eh91">Todos</option>	
											<option value="3">Cesar Celke</option>

											
											<option value="12">João Santos</option>

											
											<option value="17">Celke</option>

											
											<option value="9">Corretor Teste</option>

											
											<option value="11">Katia Silva</option>

											
											<option value="13">Fábio</option>

											
											<option value="14">Wanderley</option>

											
											<option value="15">Pedro</option>

											
											<option value="16">Arthur</option>

																			</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-39b5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-corretor-gx-container" aria-controls="select2-corretor-gx-container"><span class="select2-selection__rendered" id="select2-corretor-gx-container" role="textbox" aria-readonly="true" title="Todos">Todos</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>







	<!-- Modal Rel Contas Pagar -->
	<div class="modal fade" id="RelPagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório de Contas à Pagar
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Pag', 'Pag')">
								<span style="color:#000" id="tudo-Pag">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Pag', 'Pag')">
								<span id="hoje-Pag">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Pag', 'Pag')">
								<span style="color:#000" id="mes-Pag">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Pag', 'Pag')">
								<span style="color:#000" id="ano-Pag">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/pagar_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Pag" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Pag" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Tipo Contas</label> 
									<select class="form-control" name="tipo" style="width:100%;">
										<option value="">Todas</option>
										<option value="Repasse Aluguél">Repasse Aluguél</option>
										<option value="Comissão">Comissões</option>
									</select> 
								</div>						
							</div>

							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Concluídas / Pendentes</label> 
									<select class="form-control" name="pago" style="width:100%;">
										<option value="">Todas</option>
										<option value="Não">Pendentes</option>
										<option value="Sim">Concluídas</option>
									</select> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>







	<!-- Modal Rel Contas Receber -->
	<div class="modal fade" id="RelReceb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">Relatório de Contas à Receber
						<small>(
							<a href="#" onclick="datas('1980-01-01', 'tudo-Rec', 'Rec')">
								<span style="color:#000" id="tudo-Rec">Tudo</span>
							</a> / 
							<a href="#" onclick="datas('2022-04-21', 'hoje-Rec', 'Rec')">
								<span id="hoje-Rec">Hoje</span>
							</a> /
							<a href="#" onclick="datas('2022-04-01', 'mes-Rec', 'Rec')">
								<span style="color:#000" id="mes-Rec">Mês</span>
							</a> /
							<a href="#" onclick="datas('2022-01-01', 'ano-Rec', 'Rec')">
								<span style="color:#000" id="ano-Rec">Ano</span>
							</a> 
						)</small>



					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<form method="post" action="rel/receber_class.php" target="_blank">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Data Inicial</label> 
									<input type="date" class="form-control" name="dataInicial" id="dataInicialRel-Rec" value="2022-04-21" required=""> 
								</div>						
							</div>
							<div class="col-md-6">
								<div class="form-group"> 
									<label>Data Final</label> 
									<input type="date" class="form-control" name="dataFinal" id="dataFinalRel-Rec" value="2022-04-21" required=""> 
								</div>
							</div>

						</div>


						<div class="row">
							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Tipo Contas</label> 
									<select class="form-control" name="tipo" style="width:100%;">
										<option value="">Todas</option>
										<option value="Aluguél">Aluguél</option>
										<option value="Venda">Venda</option>
									</select> 
								</div>						
							</div>

							<div class="col-md-6">						
								<div class="form-group"> 
									<label>Concluídas / Pendentes</label> 
									<select class="form-control" name="pago" style="width:100%;">
										<option value="">Todas</option>
										<option value="Não">Pendentes</option>
										<option value="Sim">Concluídas</option>
									</select> 
								</div>						
							</div>



						</div>	


					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Gerar Relatório</button>
					</div>
				</form>

			</div>
		</div>
	</div>





	<script type="text/javascript">
		$(document).ready(function() {
			$('.sel12').select2({
				dropdownParent: $('#RelCom')
			});	

			$('.sel13').select2({
				dropdownParent: $('#RelVen')
			});	

			$('.sel14').select2({
				dropdownParent: $('#RelAlu')
			});		
		});
	</script>

	<script type="text/javascript">
		function datas(data, id, campo){		

			var data_atual = "2022-04-21";
			var separarData = data_atual.split("-");
			var mes = separarData[1];
			var ano = separarData[0];

			var separarId = id.split("-");

			if(separarId[0] == 'tudo'){
				data_atual = '2100-12-31';
			}

			if(separarId[0] == 'ano'){
				data_atual = ano + '-12-31';
			}

			if(separarId[0] == 'mes'){
				if(mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10 || mes == 12){
					data_atual = ano + '-'+ mes + '-31';
				}else if (mes == 4 || mes == 6 || mes == 9 || mes == 11){
					data_atual = ano + '-'+ mes + '-30';
				}else{
					data_atual = ano + '-'+ mes + '-28';
				}

			}

			$('#dataInicialRel-'+campo).val(data);
			$('#dataFinalRel-'+campo).val(data_atual);

			document.getElementById('hoje-'+campo).style.color = "#000";
			document.getElementById('mes-'+campo).style.color = "#000";
			document.getElementById(id).style.color = "blue";	
			document.getElementById('tudo-'+campo).style.color = "#000";
			document.getElementById('ano-'+campo).style.color = "#000";
			document.getElementById(id).style.color = "blue";		
		}
	</script>


	<script type="text/javascript">
		function carregarImg2() {
			var target = document.getElementById('target-usu');
			var file = document.querySelector("#foto-usu").files[0];

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
		$("#form-usu").submit(function () {

			event.preventDefault();
			var formData = new FormData(this);

			$.ajax({
				url: "editar-dados.php",
				type: 'POST',
				data: formData,

				success: function (mensagem) {
					$('#msg-usu').text('');
					$('#msg-usu').removeClass()
					if (mensagem.trim() == "Salvo com Sucesso") {					
						location.reload();
					} else {

						$('#msg-usu').addClass('text-danger')
						$('#msg-usu').text(mensagem)
					}


				},

				cache: false,
				contentType: false,
				processData: false,

			});

		});
	</script>



	<style type="text/css">
		.select2-selection__rendered {
			line-height: 36px !important;
			font-size:16px !important;
			color:#666666 !important;

		}

		.select2-selection {
			height: 36px !important;
			font-size:16px !important;
			color:#666666 !important;

		}
	</style>  




	<script type="text/javascript">
		function carregarImgLogo() {
			var target = document.getElementById('target-logo');
			var file = document.querySelector("#foto-logo").files[0];

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
		function carregarImgFavicon() {
			var target = document.getElementById('target-favicon');
			var file = document.querySelector("#foto-favicon").files[0];

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
		function carregarImgRel() {
			var target = document.getElementById('target-rel');
			var file = document.querySelector("#foto-rel").files[0];

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
		function carregarImgQRCode() {
			var target = document.getElementById('target-QRCode');
			var file = document.querySelector("#foto-QRCode").files[0];

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
		function carregarImgAssinatura() {
			var target = document.getElementById('target-assinatura');
			var file = document.querySelector("#foto-assinatura").files[0];

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
		$("#form-config").submit(function () {

			event.preventDefault();
			var formData = new FormData(this);

			$.ajax({
				url: "editar-config.php",
				type: 'POST',
				data: formData,

				success: function (mensagem) {
					$('#msg-config').text('');
					$('#msg-config').removeClass()
					if (mensagem.trim() == "Salvo com Sucesso") {					
						location.reload();
					} else {

						$('#msg-config').addClass('text-danger')
						$('#msg-config').text(mensagem)
					}


				},

				cache: false,
				contentType: false,
				processData: false,

			});

		});
	</script>





</body></html>