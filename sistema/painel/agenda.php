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

        <h2 class="title1"><button type="button" class="btn btn-success btn-flat btn-pri" data-toggle="modal" data-target="#modalInserir" data-whatever="@mdo"><i class="fa fa-plus" aria-hidden="true"></i> Success</button></h2>

        <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-4 agile-calendar">
                <div class="calendar-widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Calender widget</h4>
                    </header>
                    <hr class="widget-separator">
                    <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">

                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">

                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 bs-example widget-shadow" style="padding:10px 5px; margin-top: 0px;" id="listar"><small>Não possui nenhum registro cadastrado!




                </small>
            </div>

            <div class="col-xs-12 col-md-8 bs-example widget-shadow" style="padding:10px 5px; margin-top: 0px;" id="listar"><small>
                    <div class="col-xs-12 col-md-4 widget cardTarefas">
                        <div class="r3_counter_box">


                            <li class="dropdown head-dpdn2" style="list-style-type: none;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <button type="button" class="close" title="Excluir Tarefa" style="margin-top: -10px">
                                        <span aria-hidden="true"><big>×</big></span>
                                    </button>
                                </a>

                                <ul class="dropdown-menu" style="margin-left:-30px;">
                                    <li>
                                        <div class="notification_desc2">
                                            <p>Confirmar Exclusão? <a href="#" onclick="excluir('14', 'vczx')"><span class="text-danger">Sim</span></a></p>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <a href="#" onclick="mostrar('14', 'vczx', 'fgsgdf','11:01','02/05/2022','Hugo Vasconcelos', 'Agendada','sgfddsgs')" title="Ver Dados">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="icon-rounded-vermelho" src="images/icone-relogio.png" width="45px" height="45px">
                                    </div>
                                    <div class="col-md-9">
                                        <h5><strong>11:01</strong></h5>
                                    </div>
                                </div>
                            </a>
                            <hr style="margin-top:-2px; margin-bottom: 3px">
                            <div class="stats esc" style="margin-top:-15px;">
                                <span>
                                    <a href="#" onclick="ativar('14', 'vczx', 'Concluída')" title="Concluir Tarefa">
                                        <i class="fa fa-square-o mr-1 text-primary" style="font-size:14px; margin:0; padding:0; width:17px; height: 17px"></i>
                                    </a>
                                    <small>vczx</small></span>
                            </div>
                        </div>
                    </div>




                </small></div>

            <div class="clearfix">

            </div>
        </div>
        <!-- //calendar -->

    </div>


    <!-- modal inserir registro -->
    <div class="modal fade" id="modalInserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inserir tarefa</h4>
                </div>
                <div class="modal-body">
                    <form>
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

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descrição <small>(Máx 100 Caracteres)</small></label>
                                <input maxlength="100" type="text" class="form-control" name="descricao" id="descricao">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>OBS <small>(Max 1000 Caracteres)</small></label>
                                <textarea cols="60" id="area2">Some Initial Content was in this textarea</textarea>
                            </div>
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
                    <h4 class="modal-title" id="exampleModalLabel">Editar cargo</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nome:</label>
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
                    <h4 class="modal-title" id="exampleModalLabel">Apagar cargo</h4>
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