<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	<title>Hello! Admin</title>
	
	<link type="text/css" href="<?=base_url();?>style.css" rel="stylesheet" />
	<link type="text/css" href="<?=base_url();?>css/login.css" rel="stylesheet" />
	
	<script type='text/javascript' src='<?=base_url();?>js/jquery-1.4.2.min.js'></script>	<!-- jquery library -->
	<script type='text/javascript' src='<?=base_url();?>js/iphone-style-checkboxes.js'></script> <!-- iphone like checkboxes -->

	<script type='text/javascript'>
		jQuery(document).ready(function() {
			jQuery('.iphone').iphoneStyle();
		});
	</script>
	
	<!--[if IE 8]>
		<script type='text/javascript' src='<?=base_url();?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?=base_url();?>css/loginIEfix.css" type="text/css" media="screen" />
	<![endif]--> 
 
	<!--[if IE 7]>
		<script type='text/javascript' src='<?=base_url();?>js/excanvas.js'></script>
		<link rel="stylesheet" href="<?=base_url();?>css/loginIEfix.css" type="text/css" media="screen" />
	<![endif]--> 
	
</head>
<body>
	<div id="line"><!-- --></div>
	<div id="background">
		<div id="container">
			<div id="logo">
				<img src="<?=base_url();?>assets/logologin.png" alt="Logo" />
			</div>
			<div id="box"> 
				<form action="presentation.html" method="POST"> 
					<div class="one_half">
						<p><input name="username" value="email@dominio.com" class="field" onBlur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;username&quot;); }" onClick="jQuery(this).val(&quot;&quot;);" /></p>
				  </div>
					<div class="one_half last">
						<p><input type="password" name="password" value="asdf1234" class="field" onBlur="if (jQuery(this).val() == &quot;&quot;) { jQuery(this).val(&quot;asdf1234&quot;); }" onClick="jQuery(this).val(&quot;&quot;);">	</p>
						<p><input type="submit" value="Iniciar Sesion" class="login" /></p>
					</div>
			</form> 
		</div> 
		
		</div>
	</div>
</body>
</html>