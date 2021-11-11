<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Gestão de Condomínios</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Gestão de Condominios">
    <meta name="author" content="Diogo Machado e Rui Alves">

    <link rel="shortcut icon" href="{{ url('favicon.png') }}">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
<link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">                   <!-- FullCalendar -->
<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
<link href="assets/less/card.less" type="text/css" rel="stylesheet"> 

<link href="assets/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet"> <!-- chartist -->

    </head>

    <body class="animated-content infobar-overlay">
        
    @include('includes.topnav')

        <div id="wrapper">
            <div id="layout-static">
                @include('includes.sidenav')
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
								<li class=""><a href="#">Utilizadores</a></li>
                            </ol>
                            <div class="page-heading">            
                               <h1>Utilizadores</h1>
                               <div class="options"></div>
                           </div>
								<div class="container-fluid">
									<div data-widget-group="group1">
										<button class="btn btn-primary btn-raised pull-right">+ NOVO UTILIZADOR</button>
										<div class="row">
											<div class="col-sm-12">
											
												<div class="panel panel-primary" data-widget='{"draggable": "false"}'>
													<div class="panel-heading">
														<h2>Utilizadores</h2>
														<!-- <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div> -->
														<div class="options">
															<ul class="nav nav-tabs">
															<li><a href="#proprietarios" data-toggle="tab">Proprietários</a></li>
															<li><a href="#administradores_condominios" data-toggle="tab">Administradores de Condomínios</a></li>
															<li class="active"><a href="#administradores_plataforma" data-toggle="tab">Administradores da Plataforma</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body">
														<div class="tab-content">
															<div class="tab-pane" id="administradores_condominios">
																<div class="row">
																	<div class="col-md-12">
																		<div class="panel panel-default">
																			<div class="panel-heading">
																				<h2>Administradores de Condomínios</h2>
																				<div class="panel-ctrls"></div>
																			</div>
																			<div class="panel-body no-padding">
																				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
																					<thead>
																						<tr>
																							<th>Nome</th>
																							<th>E-Mail</th>
																							<th>Telefone</th>
																							<th>Ações</th>
																						</tr>
																					</thead>
																					<tbody>
																						@foreach ($users as $user)
																							@if ($user->tipo == "adm_cond")
																							<tr>
																								<td>{{ $user->nome }}</td>
																								<td>{{ $user->email }}</td>
																								<td>{{ $user->telefone }}</td>
																								<td ><div class="btn-group dropdown">
																										<button class="btn btn-xs btn-success btn-raised">Detalhes</button>
																										<button class="btn btn-xs btn-success btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																										<ul class="dropdown-menu" role="menu">
																											<li><a href="">Editar</a></li>
																										</ul>
																									</div></td>
																							</tr>
																							@endif
																						@endforeach
																					</tbody>
																				</table>
																			</div>
																			<div class="panel-footer"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane active" id="administradores_plataforma">
																<div class="row">
																	<div class="col-md-12">
																		<div class="panel panel-default">
																			<div class="panel-heading">
																				<h2>Administradores da Plataforma</h2>
																				<div class="panel-ctrls"></div>
																			</div>
																			<div class="panel-body no-padding">
																				<table class="table table-striped table-bordered" cellspacing="0" width="100%">
																					<thead>
																						<tr>
																							<th>Nome</th>
																							<th>E-Mail</th>
																							<th>Telefone</th>
																							<th>Ações</th>
																						</tr>
																					</thead>
																					<tbody>
																						@foreach ($users as $user)
																							@if ($user->tipo == "adm")
																							<tr>
																								<td>{{ $user->nome }}</td>
																								<td>{{ $user->email }}</td>
																								<td>{{ $user->telefone }}</td>
																								<td ><div class="btn-group dropdown">
																										<button class="btn btn-xs btn-success btn-raised">Detalhes</button>
																										<button class="btn btn-xs btn-success btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																										<ul class="dropdown-menu" role="menu">
																											<li><a href="">Editar</a></li>
																										</ul>
																									</div></td>
																							</tr>
																							@endif
																						@endforeach
																					</tbody>
																				</table>
																			</div>
																			<div class="panel-footer"></div>
																		</div>
																	</div>
																</div>
															</div>
														<div class="tab-pane" id="proprietarios">
															<div class="row">
																<div class="col-md-12">
																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<h2>Proprietários</h2>
																			<div class="panel-ctrls"></div>
																		</div>
																		<div class="panel-body no-padding">
																			<table class="table table-striped table-bordered" cellspacing="0" width="100%">
																				<thead>
																					<tr>
																						<th>Nome</th>
																						<th>E-Mail</th>
																						<th>Telefone</th>
																						<th>Ações</th>
																					</tr>
																				</thead>
																				<tbody>
																				@foreach ($users as $user)
																						@if ($user->tipo == "prop")
																						<tr>
																							<td>{{ $user->nome }}</td>
																							<td>{{ $user->email }}</td>
																							<td>{{ $user->telefone }}</td>
																							<td ><div class="btn-group dropdown">
																									<button class="btn btn-xs btn-success btn-raised">Detalhes</button>
																									<button class="btn btn-xs btn-success btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																									<ul class="dropdown-menu" role="menu">
																										<li><a href="">Editar</a></li>
																									</ul>
																								</div></td>
																						</tr>
																						@endif
																					@endforeach
																				</tbody>
																			</table>
																		</div>
																		<div class="panel-footer"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
    <script src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
    <script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
    <script src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

    <script src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
    <script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script src="assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

    <script src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

    <script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

    <script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

    <script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

    <script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

    <script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
    <script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
    <script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

    <script src="assets/js/application.js"></script>

    <!-- End loading site level scripts -->
        
        <!-- Load page level scripts-->
        
    <!-- Charts -->
    <script src="assets/plugins/charts-flot/jquery.flot.min.js"></script>                 <!-- Flot Main File -->
    <script src="assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
    <script src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>           <!-- Flot Stacked Charts Plugin -->
    <script src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
    <script src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script>         <!-- Flot Tooltips -->
    <script src="assets/plugins/charts-flot/jquery.flot.spline.js"></script>              <!-- Flot Curved Lines -->
    <script src="assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>        <!-- EasyPieChart-->
    <script src="assets/plugins/curvedLines-master/curvedLines.js"></script>              <!-- marvinsplines -->

    <script src="assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

                    <!-- Date Range Picker -->
    <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>               <!-- Datepicker -->
    <!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

    <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
    <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script> <!-- chartist -->

    <!-- End loading page level scripts-->

    <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/demo/demo-datatables.js"></script>

    </body>
</html>