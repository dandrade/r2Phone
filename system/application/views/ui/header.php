<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	
	<title>Hello! Admin</title>

	<link type="text/css" href="<?=base_url();?>style.css" rel="stylesheet" /> <!-- the layout css file -->
	<link type="text/css" href="<?=base_url();?>css/jquery.cleditor.css" rel="stylesheet" />
	
	<script type='text/javascript' src='<?=base_url();?>js/jquery-1.4.2.min.js'></script>	<!-- jquery library -->
	<script type='text/javascript' src='<?=base_url();?>js/jquery-ui-1.8.5.custom.min.js'></script> <!-- jquery UI -->
	<script type='text/javascript' src='<?=base_url();?>js/cufon-yui.js'></script> <!-- Cufon font replacement -->
	<script type='text/javascript' src='<?=base_url();?>js/ColaborateLight_400.font.js'></script> <!-- the Colaborate Light font -->
	<script type='text/javascript' src='<?=base_url();?>js/easyTooltip.js'></script> <!-- element tooltips -->
	<script type='text/javascript' src='<?=base_url();?>js/jquery.tablesorter.min.js'></script> <!-- tablesorter -->
	
	<!--[if IE 8]>
		<script type='text/javascript' src='<?=base_url();?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?=base_url();?>css/IEfix.css" type="text/css" media="screen" />
	<![endif]--> 
 
	<!--[if IE 7]>
		<script type='text/javascript' src='<?=base_url();?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?=base_url();?>css/IEfix.css" type="text/css" media="screen" />
	<![endif]--> 
	
	<script type='text/javascript' src='<?=base_url();?>js/visualize.jQuery.js'></script> <!-- visualize plugin for graphs / statistics -->
	<script type='text/javascript' src='<?=base_url();?>js/iphone-style-checkboxes.js'></script> <!-- iphone like checkboxes -->
	<script type='text/javascript' src='<?=base_url();?>js/jquery.cleditor.min.js'></script> <!-- wysiwyg editor -->

	<script type='text/javascript' src='<?=base_url();?>js/custom.js'></script> <!-- the "make them work" script -->

</head>

<body>

	<div id="container">
		<div id="bgwrap">
			<div id="primary_left">
        
				<div id="logo">
					<a href="dashboard.html" title="Dashboard"><img src="<?=base_url();?>assets/logo.png" alt="" /></a>
				</div> <!-- logo end -->

				<div id="menu"> <!-- navigation menu -->
					<ul>
						<li class="current">
							<a href="#" class="dashboard">
								<img src="<?=base_url();?>assets/icons/small_icons_3/dashboard.png" alt="" />
								<span class="current">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/posts.png" alt="" />
								<span>Reportes</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/media.png" alt="" />
								<span>Informacion</span>
							</a>
						</li>
						<li class="tooltip" title="Menu items can also have a tooltip!">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/notes.png" alt="" />
								<span>Campa&ntilde;as</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/coin.png" alt="" />
								<span>Programacion</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/coin.png" alt="" />
								<span>Audios</span>
							</a>
						</li>
						<li class="tooltip" title="Usuarios">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/users.png" alt="" />
								<span>Usuarios</span>
							</a>
						</li>
						<li class="tooltip" title="Preferencias">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/settings.png" alt="" />
								<span>Preferencias</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?=base_url();?>assets/icons/small_icons_3/coin.png" alt="" />
								<span>Salir</span>
							</a>
						</li>
					</ul>
				</div> <!-- navigation menu end -->
			</div> <!-- sidebar end -->

			<div id="primary_right">
				<div class="inner">

					<h1>Elementos Dashboard</h1>

					<ul class="dash">
				
						<li class="fade_hover tooltip" title="Manage Users (3 new users)">
							<span class="bubble">3</span>
							<a href="<?=base_url();?>index.php/users/">
							<img src="<?=base_url();?>assets/icons/dashboard/54.png" alt="" />
								<span>Usuarios</span>
							</a>
					  	</li>

						<li class="fade_hover tooltip" title="Website Statistics">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/dashboard/81.png" alt="" />
								<span>Reportes</span>
							</a>
						</li>

		  				<li class="fade_hover tooltip" title="Your server's information">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/dashboard/21.png" alt="" />
								<span>Informacion</span>
							</a>
						</li>

						<li class="fade_hover tooltip" title="Seleccionar Campaña">
							<a href="<?=base_url();?>index.php/campaings/">
								<img src="<?=base_url();?>assets/icons/dashboard/42.png" alt="" />
								<span>Campañas</span>
							</a>
						</li>

		  <li class="fade_hover tooltip" title="Time Schedule">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/dashboard/14.png" alt="" />
								<span>Programacion</span>
							</a>
						</li>

						<li class="fade_hover tooltip" title="Lorem Ipsum">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/dashboard/18.png" alt="" />
								<span>Audios</span>
							</a>
						</li>

						<li class="fade_hover tooltip dialog_link" title="End current session">
							<a href="#">
								<img src="<?=base_url();?>assets/icons/dashboard/118.png" alt="" />
								<span>Salir</span>
							</a>
						</li>

					</ul> <!-- end dashboard items -->