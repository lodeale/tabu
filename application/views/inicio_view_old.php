<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/base.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/skeleton.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/layout.css'); ?>">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

	
</head>
<body>
	<!-- 
	<div class="notice">
		<a href="" class="close">close</a>
		<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>
	</div>
	-->


	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
				<h2>Panel Login</h2>
				<?php echo form_open("inicio/login"); ?>
					
					<p><input type="text" name="usuario" placeholder="Usuario"></p>
					<p><input type="password" name="clave" placeholder="Contraseña"></p>
					
					<!-- Recordar session abierta
					<label for="remember">
					  <input type="checkbox" id="remember" value="remember" />
					  <span>Remember me on this computer</span>
					</label>
					-->

					<input type="submit" value="Enviar" name="btoEnviar">
				<?php echo form_close(); ?>

		</div>

		<!--
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>
		-->



	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='assets/js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>