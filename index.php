<?php
session_start();
/*************************************
* Including helpers.php file
* It has render function
* to render the header and footer
* file.
**************************************/
require_once('helpers.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link rel="icon" href="/favicon.png" type="image/png">
		<title>Home | Online Orphanage Home</title>
		<link rel="stylesheet" type="text/css" href="assets/css/base.css">
	</head>
	<body>
		<div class="row banner">
			<div class="container" style="padding: 15px 25px;">
				<header class="clearfix">
					<div class="logo">
						<h1>Online Orphanage Home</h1>
						<p>A place where people comes together.</p>
					</div>
					<div class="nav-menu nav-horizontal">
						<ul class="clearfix">
							<li><a href="index.php" class="under-bar">Home</a></li>
							<li><a href="index_about.php">About</a></li>
							<li><a href="index_contact.php">Contact Us</a></li>
                            <li><a href="donate_form.php">Donate</a></li>
							<li><a href="index_adopt.php">Adopt Child</a></li>
							
							<li><a href="register (2).php">Register</a></li>
							<li><a href="login.php">Login</a></li>
                            <li><a href="index_top.php">Top Orphnage</a></li>
                           
						</ul>
					</div>
				</header>
				<div class="banner-text">
					<h1>Be great by adopting a child</h1>
					<p>We are an organisation that brings people together<br />so that no child is alone.</p>
					<a href="index_about.php" class="btn-hero">Know more</a>
				</div>
			</div>
		</div>

		<div class="row full-section accent-secondary">
			<div class="container tac">
				<h1 class="txt-light">Are you an orphanage organisation?</h1>
				<p class="txt-semi-dark div-center hero-para">Register your organisation with us. Your organistaion will be listed as an orphanage centre and an adopter can adopt child from your organisation.</p><br><br>
				<p class="div-center"><a href="aboutus/#org" class="anim-link txt-optional">Know more</a></p>
				<a href="register/?reg=org" class="btn btn-hero-sm accent-primary txt-light">Register</a>
			</div>
		</div>

		<div class="row full-section accent-primary">
			<div class="clearfix" style="width: 95%; margin: 0 auto;">
				<div class="col-w-3">
					<div class="adop-img">
					</div>
				</div>
				<div class="col-w-9 tal" style="padding-left: 30px; box-sizing: border-box;">
					<h1 class="txt-light tal">Do you want to file complain against an organisation?</h1>
					<p class="txt-semi-dark tal hero-para" style="width: 100% !important">Tired of your orphnage, wants to live a better life,some things doesn't feel right.File a complain anonymously.</p>
					<p class="txt-semi-dark tal hero-para" >Just fill form, tell your problem, Submit. As simple as that!</p>
					
					<a href="complain.php" class="btn btn-hero-sm accent-secondary txt-light">File a complain</a>
				</div>
			</div>
		</div>
		<div class="row full-section sec-growth">
			<div class="container">
				<h1 class="txt-light">Adoption growth</h1>
			</div>
		</div>
		
		
<?php
/*************************************
* Render footer file
* @param array $data
**************************************/
render('footer');
?>
