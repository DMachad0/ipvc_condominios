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

    <link href="{{ url('assets/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="{{ url('assets/css/styles.css') }}" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="{{ url('assets/plugins/codeprettifier/prettify.css') }}" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="{{ url('assets/plugins/dropdown.js/jquery.dropdown.css') }}" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="{{ url('assets/plugins/progress-skylo/skylo.css') }}" type="text/css" rel="stylesheet">                   <!-- Skylo -->
    
    <link href="{{ url('assets/plugins/gridforms/gridforms/gridforms.css') }}" type="text/css" rel="stylesheet"> 									<!-- Gridforms -->

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
                                
<li><a href="/utilizadores">Utilizadores</a></li>
<li class="active"><a href="#">Novo Utilizador</a></li>

                            </ol>
                            <div class="page-heading">
                               <h1>Novo Utilizador</h1>
                           </div>
                            <div class="container-fluid">
                                 
<div data-widget-group="group1">
    <div class="row">
    	<div class="col-md-12">
			<div class="panel panel-white" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Novo Utilizador</h2>
				</div>
				<div class="panel-body">
					<form class="grid-form">
						<fieldset>
							<legend>Dados Pessoais</legend>
							<div data-row-span="1">
								<div data-field-span="1">
									<label>Nome</label>
									<input type="text" autofocus>
								</div>
                                
							</div>
                            <div data-row-span="2">
                                <div data-field-span="1">
									<label>Cartão de Cidadão</label>
									<input type="text" autofocus>
								</div>
                                <div data-field-span="1">
									<label>Telemovel</label>
									<input type="text" autofocus>
								</div>
							</div>
						</fieldset>

						<br><br>

						<fieldset>
							<legend>Dados da Conta</legend>

							<div data-row-span="3">
                                <div data-field-span="1">
									<label>E-Mail</label>
									<input type="email" autofocus>
								</div>
                                <div data-field-span="1">
									<label>Password</label>
									<input type="text" value="Gerada no E-Mail" autofocus disabled>
								</div>
                                <div data-field-span="1">
									<label>Tipo de Conta</label>
									<select>
										<option value="prop">Proprietário</option>
										<option value="adm_cond">Administrador de Condomínio</option>
										<option value="adm">Administrador da Plataforma</option>
									</select>
								</div>
							</div>
							
						</fieldset>
						<div class="clearfix pt-md">
							<div class="pull-right">
								<button class="btn-raised btn-primary btn">Enviar</button>
								<a href="/utilizadores" class="btn-default btn">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>

                </div>
                <div class="extrabar-underlay"></div>
            </div>
        </div>

        <div class="infobar-wrapper scroll-pane">
            <div class="infobar scroll-content">

    
        <ul class="nav nav-tabs material-nav-tabs stretch-tabs icon-tabs">
            <li ><a href="#tab-7-1" data-toggle="tab">
                <i class="material-icons">settings</i>
            </a></li>
            <li class="active "><a href="#tab-7-2" data-toggle="tab"><span class="step size-64">
                  <i class="material-icons">textsms</i>
                </span></a>
            </li>
        </ul>
    

    <div class="tab-content">
        <div class="tab-pane" id="tab-7-1">

            <table class="table table-settings">
                <tbdody>
                    <tr>
                        <td>
                            <h5>Alerts</h5>
                            <p>Sets alerts to get notified when changes occur to get new alerming items</p>
                        </td>
                        <td><span class="togglebutton toggle-info"><label><input type="checkbox"> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Notifications</h5>
                            <p>You will receive notification email for any notifications if you set notification</p>
                        </td>
                        <td><span class="togglebutton toggle-primary"><label><input type="checkbox" class="toggle"  checked=""> </label></span></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Messages</h5>
                            <p>You will receive notification on email after setting messages notifications</p>                            
                        </td>
                        <td>
                            <span class="togglebutton toggle-danger"><label><input type="checkbox" > </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Warnings</h5>
                            <p>You will get warnning only some specific setttings or alert system</p>
                        </td>
                        <td>
                            <span class="togglebutton toggle-warning"><label><input type="checkbox" checked=""> </label></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Sidebar</h5>
                            <p>You can hide/show use with sidebar collapsw settings</p>
                        </td>
                        <td><span class="togglebutton toggle-success"><label><input type="checkbox" checked=""> </label></span></td>
                    </tr>
                </tbdody>
            </table>

        </div>
        <div class="tab-pane active" id="tab-7-2">

            <div class="widget">
                <div class="widget-heading">Recent Activities</div>
                <div class="widget-body">
                    <ul class="timeline">
                        <li class="timeline-purple">
                            <div class="timeline-icon"><i class="material-icons">add</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Jana Pena is now Follwing you</span>
                                    <span class="date">2 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-primary">
                            <div class="timeline-icon"><i class="material-icons">textsms</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Percy liaye Like your picture</span>
                                    <span class="date">6 min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-green">
                            <div class="timeline-icon"><i class="material-icons">done</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Leon miles make your presentation for new project</span>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-danger">
                            <div class="timeline-icon"><i class="material-icons">favorite</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">Lake wile like your comment</span>
                                    <span class="date">5 hours ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-sky">
                            <div class="timeline-icon"><i class="material-icons">attach_money</i></div>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <span class="author">The Mountain Ambience paid your payment</span>
                                    <span class="date">9 hours ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget">
                <div class="widget-heading">Contacts</div>
                <div class="widget-body">
                    <ul class="media-list contacts">
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_01.png" alt="" />
                            </div>
                            <div class="media-body">
                              <span class="text-gray">Jon Owens</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_02.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Nina Huges</span>
                                <span class="contact-status text-muted">Offline</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_03.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Austin Lee</span>
                                <span class="contact-status text-danger">Busy</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_04.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Grady Hines</span>
                                <span class="contact-status text-warning">Away</span>
                            </div>
                        </li>
                        <li class="media notification-message">
                            <div class="media-left">
                                <img class="img-circle avatar" src="assets/demo/avatar/avatar_06.png" alt="" />
                            </div>
                            <div class="media-body">
                                <span class="text-gray">Adrian Barton</span>
                                <span class="contact-status text-success">Online</span>
                            </div>
                        </li>
                    </ul>                                
                </div>
            </div>


            </div>
        </div>

    </div>

</div>
        </div>

    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="{{ url('assets/js/jquery-1.10.2.min.js') }}"></script> 							<!-- Load jQuery -->
<script src="{{ url('assets/js/jqueryui-1.10.3.min.js') }}"></script> 							<!-- Load jQueryUI -->
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script> 								<!-- Load Bootstrap -->
<script src="{{ url('assets/js/enquire.min.js') }}"></script> 									<!-- Load Enquire -->

<script src="{{ url('assets/plugins/velocityjs/velocity.min.js') }}"></script>					<!-- Load Velocity for Animated Content -->
<script src="{{ url('assets/plugins/velocityjs/velocity.ui.min.js') }}"></script>

<script src="{{ url('assets/plugins/progress-skylo/skylo.js') }}"></script> 		<!-- Skylo -->

<script src="{{ url('assets/plugins/wijets/wijets.js') }}"></script>     						<!-- Wijet -->

<script src="{{ url('assets/plugins/sparklines/jquery.sparklines.min.js') }}"></script> 			 <!-- Sparkline -->

<script src="{{ url('assets/plugins/codeprettifier/prettify.js') }}"></script> 				<!-- Code Prettifier  -->

<script src="{{ url('assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>  <!-- Bootstrap Tabdrop -->

<script src="{{ url('assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script> <!-- nano scroller -->

<script src="{{ url('assets/plugins/dropdown.js/jquery.dropdown.js') }}"></script> <!-- Fancy Dropdowns -->
<script src="{{ url('assets/plugins/bootstrap-material-design/js/material.min.js') }}"></script> <!-- Bootstrap Material -->
<script src="{{ url('assets/plugins/bootstrap-material-design/js/ripples.min.js') }}"></script> <!-- Bootstrap Material -->

<script src="{{ url('assets/js/application.js') }}"></script>
<script src="{{ url('assets/demo/demo.js') }}"></script>
<script src="{{ url('assets/demo/demo-switcher.js') }}"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script src="{{ url('assets/plugins/gridforms/gridforms/gridforms.js') }}"></script>  								<!-- Gridforms -->

    <!-- End loading page level scripts-->

    </body>
</html>