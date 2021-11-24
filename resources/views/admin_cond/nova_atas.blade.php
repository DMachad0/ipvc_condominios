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
                    @include('includes_admin_cond.sidenav')
                    <div class="static-content-wrapper">
                        <div class="static-content">
                            <div class="page-content">
                                <ol class="breadcrumb">
                                    <li class=""><a href="#">Atas</a></li>
                                </ol>
                                <div class="page-heading">            
                                <h1>Atas</h1>
                                <div class="options"></div>
                            </div>
                            <div class="col-md-9">
                                <div class="panel panel-inbox" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                                    <div class="panel-body">
                                        <div class="inbox-mail-heading">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="app-inbox.html" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i></a>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-lg btn-default"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="btn btn-lg btn-default"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-lg btn-success btn-raised"><i class="fa fa-arrow-right visible-xs"></i><span class="hidden-xs">Send</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="" role="form" id="inbox-compose-form" class="form-horizontal p-md">
                                            <div class="form-group mb-sm">
                                                <div class="col-md-12">
                                                    <div class="input-group input-group-lg">
                                                        <span class="input-group-addon">To:</span>
                                                        <input type="text" class="form-control input-lg" value="" id="tokenfield-email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-sm" style="display:none;">
                                                <div class="col-md-12"><input type="text" class="form-control"></div>
                                            </div>
                                            <div class="form-group mb-sm">
                                                <div class="col-md-12"><input type="text" class="form-control input-lg" placeholder="Subject for email"></div>
                                            </div>
                                            <div class="form-group mb-n">
                                                <div class="col-xs-12">
                                                    <div class="composer">
                                                        <h4>Default Editor</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, nobis laboriosam repellat ipsum deserunt voluptate eos praesentium atque eligendi libero. Nam, id, eligendi natus facilis ullam pariatur numquam amet illum repudiandae ex porro labore in perferendis vero nobis iure ratione? Repudiandae, vel, quo, dolores velit vero debitis sed non odio culpa quasi excepturi tempore saepe atque quod repellendus aliquam eum neque dolorem beatae veniam quis id deserunt dignissimos voluptatum incidunt necessitatibus inventore reprehenderit consequatur esse perferendis ipsum earum pariatur et eaque sequi a harum sit similique itaque dicta expedita unde. Animi, quo, facilis laudantium quas commodi aut harum reprehenderit explicabo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="inbox-mail-footer">
                                            <div class="clearfix">
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-lg btn-success btn-raised"><i class="fa fa-arrow-right visible-xs"></i><span class="hidden-xs">Send</span></a>
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