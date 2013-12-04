<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/4/13
 * Time: 2:10 PM
 */

	session_start();

	$name = "myname";
	$password = "mypassword";

	if(!isset($_SESSION['name'])) {
		$_SESSION['name'] = $name;
	}

	if(!isset($_SESSION['password'])) {
		$_SESSION['password'] = $password;
	}

//	$email = $_GET['email'];
//	$username = $_GET['username'];
//	$password = $_GET['password'];
//
//
//	if(!isset($_SESSION['email'])) {
//		$_SESSION['email'] = $email;
//	}
//
//	if(!isset($_SESSION['username'])) {
//		$_SESSION['username'] = $username;
//	}
//
//	if(!isset($_SESSION['password'])) {
//		$_SESSION['password'] = $password;
//	}


	//session_start();
	//unset($_SESSION['count']); //remove the session variable count
	//
	//Destroy the session
	//session_destroy();
