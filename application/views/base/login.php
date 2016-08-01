<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta property="og:title" content="Marckting Record Collector | Hub IT Solutions">
		<meta property="og:url" content="http://hubdrive.net/marckting-record-collector">
		<meta property="og:image" content="images/image-facebook.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HUB-MRC</title>
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<link id="favicon" rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-iphone4.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-ipad3.png">
		<!-- Software Description ENDS. -->
		<link href="<?php echo site_url("/css/login.css"); ?>" rel="stylesheet" type="text/css" media="all"/>
		<!--web-fonts-->
		<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
		<!--web-fonts-->
	</head>
	<body>
			<div class="main">
				<div class="login">
					<div class="login-top">
						<img src="<?php echo site_url('images/p.png'); ?>">
					</div>
					<h1>HUB MRC 1.0</h1>
					<?php if($error != ''){ ?>
					<div style="margin-top:20px;margin-bottom:20px;color:red">
						<h3><?php echo $error; ?></h3>
					</div>
					<?php } ?>
					<div class="login-bottom">
					<form action="<?php echo site_url('secure/auth'); ?>" method="POST">
						<input type="text" name="username" placeholder="Email" required>					
						<input type="password" name="password" class="password" placeholder="Password" required>						
						<input type="submit" value="login">
					</form>
					<a href="http://hubdrive.net"><p>Contact Builders || Click Here</p></a>
					</div>
				</div>
			</div>
		<div class="footer">
			<p>&copy 2016 HUB MRC. All rights reserved | Developed by <a href="http://hubdrive.net">Hub IT Solution</a></p>
		</div>

	</body>
</html>