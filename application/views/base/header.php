<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
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

		<!-- Bootstrap -->
		<link href="<?php echo site_url("css/bootstrap.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo site_url("css/rwd-table.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo site_url("css/datepicker.css"); ?>" rel="stylesheet">
		<link href="<?php echo site_url("css/dataTables.bootstrap.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo site_url("css/style.css"); ?>" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="body">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TopNav">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
						</button>
						<a class="hidden-sm hidden-md hidden-lg navbar-brand" href="<?php echo site_url(); ?>">RMS 3.0</a>
					</div>
					<div class="collapse navbar-collapse" id="TopNav">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url(); ?>">RMS 3.0</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Database
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url("data"); ?>">Prev Records</a></li>
									<li><a href="<?php echo site_url("data/add"); ?>">New Record</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Users
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url("user"); ?>">Manage</a></li>
									<li><a href="<?php echo site_url("user/add"); ?>">Set User</a></li>
									<li><a href="#">Help Doc</a></li>
									<li><a href="#">About Us</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="<?php echo site_url("secure/logout"); ?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>