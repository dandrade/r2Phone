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
							<a href="#">
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

						<li class="fade_hover tooltip" title="View all Listings">
							<a href="#">
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
					
					<div id="dialog" title="Modals with Hello!">  
						<h2>Hello! This is a modal window!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas, est volutpat auctor fermentum, urna lectus lobortis urna, eu aliquam libero justo vitae tortor.</p>
						<p>Vivamus ornare lacus ac sapien placerat congue eu a felis. Duis lobortis turpis non arcu accumsan imperdiet. Sed quis porta metus. Cras placerat orci et orci ornare pulvinar. Aenean tristique malesuada molestie. Vestibulum pretium nulla eu metus faucibus at congue quam mollis. Donec elit risus, varius eleifend commodo id, tincidunt vitae magna. Nunc fringilla mi a diam aliquam aliquet</p>
					</div> 

					<hr />
		  
					<h1>Estadisticas</h1>
					<div style="clearboth"></div>

					<div class="tabs" style="width:870px;">
						<div class="ui-widget-header">
							<span>Website Statistics</span>
							<ul>
								<li><a href="#tabs-1">Lines</a></li>
								<li><a href="#tabs-2">Bars</a></li>
								<li><a href="#tabs-3">Area</a></li>
							</ul>
						</div>
				
						<div id="tabs-1">
							<table class="stats line" rel="line">
								
								<thead>
									<tr>
									<td></td>
										<th scope="col">01.12</th>
										<th scope="col">02.12</th>
										<th scope="col">03.12</th>
										<th scope="col">04.12</th>
										<th scope="col">05.12</th>
										<th scope="col">06.12</th>
										<th scope="col">07.12</th>
										<th scope="col">08.12</th>
										<th scope="col">09.12</th>
										<th scope="col">10.12</th>
										<th scope="col">11.12</th>
										<th scope="col">12.12</th>
										<th scope="col">13.12</th>
										<th scope="col">14.12</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<th scope="row">Page views</th>
										<td>10</td>
										<td>37</td>
										<td>81</td>
										<td>121</td>
										<td>124</td>
										<td>148</td>
										<td>112</td>
										<td>200</td>
										<td>130</td>
										<td>192</td>
										<td>40</td>
										<td>70</td>
										<td>20</td>
										<td>60</td>
									</tr>
									<tr>
										<th scope="row">Subscribers</th>
										<td>3</td>
										<td>5</td>
										<td>15</td>
										<td>20</td>
										<td>18</td>
										<td>30</td>
										<td>23</td>
										<td>17</td>
										<td>5</td>
										<td>9</td>
										<td>13</td>
										<td>15</td>
										<td>11</td>
										<td>14</td>
									</tr>
								</tbody>
							</table>
						</div> <!-- end of first tab -->
						<div id="tabs-2">
							<table class="stats bar" rel="bar">
								<thead>
								  <tr>
									<td></td>
									<th scope="col">01.12</th>
									<th scope="col">02.12</th>
									<th scope="col">03.12</th>
									<th scope="col">04.12</th>
									<th scope="col">05.12</th>
									<th scope="col">06.12</th>
									<th scope="col">07.12</th>
									<th scope="col">08.12</th>
									<th scope="col">09.12</th>
									<th scope="col">10.12</th>
									<th scope="col">11.12</th>
									<th scope="col">12.12</th>
									<th scope="col">13.12</th>
									<th scope="col">14.12</th>
								  </tr>
								</thead>

								<tbody>
								  <tr>
									<th scope="row">Page views</th>
									<td>10</td>
									<td>37</td>
									<td>81</td>
									<td>121</td>
									<td>124</td>
									<td>148</td>
									<td>112</td>
									<td>200</td>
									<td>130</td>
									<td>192</td>
									<td>40</td>
									<td>70</td>
									<td>20</td>
									<td>60</td>
								  </tr>
								  <tr>
									<th scope="row">Subscribers</th>
									<td>3</td>
									<td>5</td>
									<td>15</td>
									<td>20</td>
									<td>18</td>
									<td>30</td>
									<td>23</td>
									<td>17</td>
									<td>5</td>
									<td>9</td>
									<td>13</td>
									<td>15</td>
									<td>11</td>
									<td>14</td>
								  </tr>
								</tbody>
							</table>
						</div>
						
						<div id="tabs-3">
							<table class="stats area" rel="area">
								<thead>
								  <tr>
									<td></td>
									<th scope="col">01.12</th>
									<th scope="col">02.12</th>
									<th scope="col">03.12</th>
									<th scope="col">04.12</th>
									<th scope="col">05.12</th>
									<th scope="col">06.12</th>
									<th scope="col">07.12</th>
									<th scope="col">08.12</th>
									<th scope="col">09.12</th>
									<th scope="col">10.12</th>
									<th scope="col">11.12</th>
									<th scope="col">12.12</th>
									<th scope="col">13.12</th>
									<th scope="col">14.12</th>
								  </tr>
								</thead>

								<tbody>
								  <tr>
									<th scope="row">Page views</th>
									<td>10</td>
									<td>37</td>
									<td>81</td>
									<td>121</td>
									<td>124</td>
									<td>148</td>
									<td>112</td>
									<td>200</td>
									<td>130</td>
									<td>192</td>
									<td>40</td>
									<td>70</td>
									<td>20</td>
									<td>60</td>
								  </tr>
								  <tr>
									<th scope="row">Subscribers</th>
									<td>3</td>
									<td>5</td>
									<td>15</td>
									<td>20</td>
									<td>18</td>
									<td>30</td>
									<td>23</td>
									<td>17</td>
									<td>5</td>
									<td>9</td>
									<td>13</td>
									<td>15</td>
									<td>11</td>
									<td>14</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					
				</div> <!-- inner -->
			</div> <!-- primary_right -->
		</div> <!-- bgwrap -->
	</div> <!-- container -->
</body>
</html>
