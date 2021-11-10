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
                               <div class="options">
</div>
                           </div>
                            <div class="container-fluid">
                                

                            <div data-widget-group="group1">
	<div class="row">
		<div class="col-sm-12">
			<div class="alert alert-inverse">
				Use the <strong>same</strong> code as you would in <a class="alert-link" href="http://getbootstrap.com/">Twitter's Bootstrap</a>!
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
			<div class="panel panel-primary" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Form Layout</h2>
					<!-- <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'></div> -->
					<div class="options">
						<ul class="nav nav-tabs">
			              <li><a href="#vertical-form" data-toggle="tab">Vertical Form</a></li>
			              <li class="active"><a href="#horizontal-form" data-toggle="tab">Horizontal Form</a></li>
			              <li><a href="#bordered-row" data-toggle="tab">Bordered Row</a></li>
			              <li><a href="#tabular-form" data-toggle="tab">Tabular Form</a></li>
			            </ul>
					</div>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled type="text" class="form-control" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" checked> Checked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled> Disabled Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox checkbox-inline">
											<label><input type="checkbox"> Unchecked</label>
										</div>
										<div class="checkbox checkbox-inline">
											<label><input type="checkbox" checked> Checked</label>
										</div>
										<div class="checkbox checkbox-inline">
											<label><input type="checkbox" disabled> Disabled Unchecked</label>
										</div>
										<div class="checkbox checkbox-inline">
											<label><input type="checkbox" disabled checked> Disabled Checked</label>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control" class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio">
											<label><input type="radio"> Unchecked</label>
											<label><input type="radio" checked> Checked</label>
											<label><input type="radio" disabled> Disabled Unchecked</label>
											<label><input type="radio" disabled checked> Disabled Checked</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="vertical-form">
							<form>
							<div class="form-group">
								<label for="focusedinput" class="control-label">Focused Input</label>
								<input type="text" class="form-control" id="focusedinput" placeholder="Default Input">
							</div>
							<div class="form-group">
								<label for="disabledinput" class="control-label">Disabled Input</label>
								<input disabled type="text" class="form-control" id="disabledinput" placeholder="Disabled Input">
							</div>
							<div class="form-group">
								<label for="inputPassword" class="control-label">Password</label>
								<input type="password" class="form-control" id="inputPassword" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="checkbox" class="control-label">Checkbox</label>
								<div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
								<div class="checkbox block"><label><input type="checkbox" checked> Checked</label></div>
								<div class="checkbox block"><label><input type="checkbox" disabled> Disabled Unchecked</label></div>
								<div class="checkbox block"><label><input type="checkbox" disabled checked> Disabled Checked</label></div>
							</div>
							<div class="form-group">
								<label for="selector1" class="control-label">Dropdown Select</label>
								<select name="selector1" id="selector1" class="form-control">
									<option>Lorem ipsum dolor sit amet.</option>
									<option>Dolore, ab unde modi est!</option>
									<option>Illum, fuga minus sit eaque.</option>
									<option>Consequatur ducimus maiores voluptatum minima.</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label">Multiple Select</label>
								<select multiple="" class="form-control">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="txtarea1" class="control-label">Textarea</label>
								<textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label for="radio" class="control-label">Radio</label>
								<div class="radio block"><label><input type="radio"> Unchecked</label></div>
								<div class="radio block"><label><input type="radio" checked> Checked</label></div>
								<div class="radio block"><label><input type="radio" disabled> Disabled Unchecked</label></div>
								<div class="radio block"><label><input type="radio" disabled checked> Disabled Checked</label></div>
							</div>
							<div class="form-group">
								<label for="smallinput" class="control-label label-input-sm">Small Input</label>
								<input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
							</div>
							<div class="form-group">
								<label for="mediuminput" class="control-label">Medium Input</label>
								<input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
							</div>
							<div class="form-group">
								<label for="largeinput" class="control-label label-input-lg">Large Input</label>
								<input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
							</div>
							</form>
						</div>
						<div class="tab-pane" id="bordered-row">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled type="text" class="form-control" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" checked> Checked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled> Disabled Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox">
											<label><input type="checkbox"> Unchecked</label>
											<label><input type="checkbox" checked> Checked</label>
											<label><input type="checkbox" disabled> Disabled Unchecked</label>
											<label><input type="checkbox" disabled checked> Disabled Checked</label>
											<label>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control" class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio">
											<label><input type="radio"> Unchecked</label>
											<label><input type="radio" checked> Checked</label>
											<label><input type="radio" disabled> Disabled Unchecked</label>
											<label><input type="radio" disabled checked> Disabled Checked</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="tabular-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled type="text" class="form-control" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox block"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" checked> Checked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled> Disabled Unchecked</label></div>
										<div class="checkbox block"><label><input type="checkbox" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox">
											<label><input type="checkbox"> Unchecked</label>
											<label><input type="checkbox" checked> Checked</label>
											<label><input type="checkbox" disabled> Disabled Unchecked</label>
											<label><input type="checkbox" disabled checked> Disabled Checked</label>
											<label>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control" class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control"></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled checked> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio">
											<label><input type="radio"> Unchecked</label>
											<label><input type="radio" checked> Checked</label>
											<label><input type="radio" disabled> Disabled Unchecked</label>
											<label><input type="radio" disabled checked> Disabled Checked</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<button class="btn-raised btn-primary btn">Submit</button>
							<button class="btn-default btn">Cancel</button>
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
                    <footer role="contentinfo">
                        <div class="clearfix">
                            <ul class="list-unstyled list-inline pull-left">
                                <li><h6 style="margin: 0;">&copy; 2016 KaijuThemes</h6></li>
                            </ul>
                        </div>
                    </footer>

                </div>
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