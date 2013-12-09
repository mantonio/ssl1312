<?php

	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 3
	 * Date: 12/04/13
	 */

	session_start();

	include "models/View.php";
	include "models/CheckLogin.php";

	$views = new View();
	$logins = new CheckLogin();

	if(isset($_GET["action"])) {

		$action = $_GET["action"];

	}else {

		$action = "";

	}

	// ----- HEADER ----- \\
	$views->getView("views/header.php");
	$views->getView("views/nav.php");

	if($action == "" || $action == "home") {

		$views->getView("views/body.php");

	}elseif($action == "login") {

		$views->getView("views/loggedin.php");
		$data = array(
			"username"=>$_POST["username"],
			"password"=>$_POST["userpass"]
		);
		$test = $logins->checkUser($data);

		if($test == 1) {

			$views->getView("views/loggedin.php");

		}else {

			//$views->getView("views/body.php", $msg);

		}

	}elseif($action == "logout") {

		$_SESSION["loggedin"] = 0;
		$data = "<a href='?action=login'>LOGIN</a>";
		$views->getView("views/body.php");
		session_destroy();

	}

	$views->getView("views/optional.php");
	$views->getView("views/footer.php");