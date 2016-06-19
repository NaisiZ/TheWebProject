<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Arista | <?php echo $page_title; ?></title>

		<!-- Stylesheets -->
		<link href="<?php echo $_SESSION['www']; ?>css/styles.css" rel="stylesheet">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-68629521-2', 'auto');
			ga('send', 'pageview');

		</script>	
		<!-- End Google Analytics -->

	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"><a href="<?php echo $_SESSION['www']; ?>"><img src="<?php echo $_SESSION['www']; ?>images/logo-300x120.jpg" height="120" width="300" /></a></div>

				<div class="col-sm-7 col-sm-offset-1 top-links">
				<a href="https://www.facebook.com/GoArista" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>&nbsp;
				<a href="https://plus.google.com/u/0/b/108720411797089934221/108720411797089934221" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>&nbsp;
				<a href="https://www.linkedin.com/company/arista-corporation?trk=top_nav_home" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>&nbsp;
				<a href="https://www.youtube.com/channel/UC3O7v0SVVThcOXN16earrgw" target="_blank"><i class="fa fa-youtube-square fa-3x"></i></a>&nbsp;
				<br />
				<br />
					<form class="form-inline large">
						<a href="<?php echo $_SESSION['www']; ?>">Home</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
						<a href="<?php echo $_SESSION['www']; ?>about_arista.php">Company</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
						<a href="<?php echo $_SESSION['www']; ?>support.php">Support</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
						<a href="<?php echo $_SESSION['www']; ?>contact.php">Contact</a>
						&nbsp;&nbsp;/&nbsp;&nbsp;
						<select onchange="if( this.options[this.selectedIndex].value != '' ) location.href=this.options[this.selectedIndex].value;" class="form-control input-sm">
							<option selected="selected">Quick Product Search</option>
							<option value="<?php echo $www; ?>products/industrial_computers">Industrial Computers</option>
							<option value="<?php echo $www; ?>products/industrial_cpu_boards">Industrial CPU Boards</option>
							<option value="<?php echo $www; ?>products/industrial_displays">Industrial Displays</option>
							<option value="<?php echo $www; ?>products/industrial_panel_pcs">Industrial Panel PCs</option>
							<option value="<?php echo $www; ?>products/industrial_peripherals">Industrial Peripherals</option>
							<option value="<?php echo $www; ?>products/industrial_thin_clients">ACP ThinManager Ready Thin Clients</option>
							<option value="<?php echo $www; ?>products/professional_av">Professional AV</option>
							<option value="<?php echo $www; ?>products/rtu_smart_sensors">RTU &amp; Smart Sensors</option>
						</select>
					</form>
				</div>
			</div>
			<div class="row megamenu-wrapper">
				<?php include($_SESSION['www'] ."yamm3.inc.php"); ?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

				</div>
			</div>

			<?php if(isset($message)) { ?>
			<br />
			<div class="row">
				<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <?php echo $message; unset($message); ?>
				</div>
			</div>
			<?php } ?>
		</div>
