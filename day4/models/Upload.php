<?php
	//session_start();

	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 3
	 * Date: 12/04/13
	 */

class Upload {
	function submit($array) {

		$username = $array["username"];
		$userpass = $array["userpass"];

		if(!isset($_SESSION['username'])) {
			$username = $_SESSION['username'];
		}

		if(!isset($_SESSION['userpass'])) {
			$_SESSION['userpass'] = $userpass;
		}


		//Check if the Username input field is empty
		//Display error message if it is
		function checkUsername($username) {

			if(empty($username)) {

				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>Username</span></div>";

			}else {

				$response = "";

			}

			echo $response;

		}


		//Check if Password input field is empty
		//Display error message if it is
		function checkPassword($userpass) {

			if(empty($userpass)) {

				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>Password</span></div>";

			}else {

				$response = "";

			}
			echo $response;
	    }

		//Resize User Avatar. Calculates the width/height and scales proportionally to 100px on the longest side
		function imageResize($orgfile, $newfile, $w, $h, $target) {

			if ($w > $h) {
				$percentage = ($target / $w);
			} else {
				$percentage = ($target / $h);
			}

			//gets the new value and applies the percentage, then rounds the value
			$w = round($w * $percentage);
			$h = round($h * $percentage);

			$n = imagecreatefromjpeg($orgfile);
			$ar = getimagesize($orgfile);
			$orgw = $ar[0];
			$orgh = $ar[1];

			$cont = imagecreatetruecolor($w, $h);
			imagecopyresampled($cont,$n,0,0,0,0,$w,$h,$orgw,$orgh);
			imagejpeg($cont,$newfile,100);
			imagedestroy($n);
		}


		//Check if captcha code matches
		if ($_POST["captchatxt"] != $_SESSION["captchatxt"] OR $_SESSION["captchatxt"] == "")  {

			echo  '<strong>Incorrect verification code.</strong><br>';

		}else {

			// add form data processing code here
			echo  '<strong>Verification successful.</strong><br>';

		}


		//Directory to upload files to
		$uploaddir = "/Applications/MAMP/htdocs/ssl1312/day3/images/";

		//The uploaded file's path and name
		$uploadfile = $uploaddir . basename($_FILES["avatar"]["name"]);


		//Check if user file was uploaded successfully and if so, display it
		if(move_uploaded_file($_FILES["avatar"]["tmp_name"],$uploadfile)) {

			$image = "images/".$_FILES["avatar"]["name"];
			$imageThumb = "images/th_".$_FILES["avatar"]["name"];

			$wh = list($width, $height) = getimagesize("images/".$_FILES["avatar"]["name"]);

			imageResize($image, $imageThumb, $wh[0], $wh[1], 100);

			echo '<img src="',$imageThumb,'" />'.'<br>';

		}else {

			echo "File not uploaded. Please try again";

		}

		checkUsername($username);
		checkPassword($userpass);

	}
}