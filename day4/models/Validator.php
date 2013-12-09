<?php
	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 3
	 * Date: 12/04/13
	 */

class Validate {
	function validateInputs($array) {

		//var_dump($array);
		//echo 'validator class';

		$firstName = $array["firstName"];
		$lastName = $array["lastName"];
		$address = $array["address"];
		$city = $array["city"];
		$state = $array["state"];
		$zip = $array["zip"];
		$email = $array["email"];
		$phone = $array["phone"];
		$url = $array["url"];

		//Checking if the First Name input field is empty
		function checkFirstName($firstName) {
			if(empty($firstName)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>First Name</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the Last Name input field is empty
		function checkLastName($lastName) {
			if(empty($lastName)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>Last Name</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the Address input field is empty
		function checkAddress($address) {
			if(empty($address)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>Address</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the City input field is empty
		function checkCity($city) {
			if(empty($city)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>City</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the State is entered as a 2 letter abbreviation
		function checkState($state) {
			if(empty($state) || !preg_match("#^((AL)|(AK)|(AS)|(AZ)|(AR)|(CA)|(CO)|(CT)|(DE)|(DC)|(FM)|(FL)|(GA)|(GU)|(HI)|(ID)|(IL)|(IN)|(IA)|(KS)|(KY)|(LA)|(ME)|(MH)|(MD)|(MA)|(MI)|(MN)|(MS)|(MO)|(MT)|(NE)|(NV)|(NH)|(NJ)|(NM)|(NY)|(NC)|(ND)|(MP)|(OH)|(OK)|(OR)|(PW)|(PA)|(PR)|(RI)|(SC)|(SD)|(TN)|(TX)|(UT)|(VT)|(VI)|(VA)|(WA)|(WV)|(WI)|(WY))$#", $state)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>State</span> using only the 2 letter abbreviation. <span class='format'>Example: FL</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the Zip Code is not empty or 5 digits long
		function checkZip($zip) {
			if(empty($zip) || !preg_match("#^\d{5}(-\d{4})?$#", $zip)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter a valid <span class='format'>Zip Code</span> in the following format: <span class='format'>32792</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the Email Address is not empty or is in the following format: mantonio@fullsail.edu
		function checkEmail($email) {
			if(empty($email) || !preg_match("#^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$#", $email)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your <span class='format'>Email Address</span> in the following format: <span class='format'>you@email.com</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the Phone Number is not empty and in the following format: 123-456-7890
		function checkPhone($phone) {
			if(empty($phone) || !preg_match("#^[2-9]\d{2}-\d{3}-\d{4}$#", $phone)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter your Phone Number in the following format: <span class='format'>407-123-4567</span></div>";
			}else {
				$response = "";
			}
			echo $response;
		}

		//Checking if the URL input field is not empty or is in the following format: http://www.mywebsite.com, www.mywebsite.com, or mywebsite.com
		function checkUrl($url) {
			if(empty($url) || !preg_match("#^(http[s]?://|ftp://)?(www\.)?[a-zA-Z0-9-\.]+\.(com|org|net|mil|edu|ca|co.uk|com.au|gov)$#", $url)) {
				$response = "<div class='errorMsg'><div class='warning'>!</div>Please enter a valid URL in the following format: <span class='format'>'http://www.mywebsite.com', 'www.mywebsite.com', or 'mywebsite.com'</span></div><br>";
			}else {
				$response = "";
			}
			echo $response;
		}

		checkFirstName($firstName);
		checkLastName($lastName);
		checkAddress($address);
		checkCity($city);
		checkState($state);
		checkZip($zip);
		checkEmail($email);
		checkPhone($phone);
		checkUrl($url);
	}
}
