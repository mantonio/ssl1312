<?php
	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 1
	 * Date: 11/25/13
	 */

	date_default_timezone_set('America/New_York');
?>

<html lang="en">
<head>
	<title>Day 1 SSL</title>

	<meta charset="utf-8">

	<link href="css/main.css" type="text/css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Sniglet' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<div id="toolbar">
			<div class="wrap">
				<div id="date">

					<!-- Random date generates after refresh -->
					<?php echo(date('l F jS Y h:i:s A'));?>

				</div> <!-- END #date -->
			</div><!-- END .wrap -->
		</div> <!-- END #toolbar -->

		<div class="wrap">
			<div id="brand">
				<h1 id="logo">SSL</h1>
				<h2 id="subLogo">server-side languages</h2>
			</div> <!-- END #brand -->
		</div>

