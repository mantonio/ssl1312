<?php
	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 2
	 * Date: 12/02/13
	 */

	include_once "models/Validator.php";

?>

<div class="wrap">
	<section class="content">
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</section>

	<form method="POST" action="?action=validate">
		<p>
			<label for="firstName">First Name:</label>
			<input id="firstName" name="firstName" type="text" placeholder="John">
		</p>

		<p>
			<label for="lastName">Last Name:</label>
			<input id="lastName" name="lastName" type="text" placeholder="Smith">
		</p>

		<p>
			<label for="address">Address:</label>
			<input id="address" name="address" type="text" placeholder="1234 Your Street">
		</p>

		<p>
			<label for="city">City:</label>
			<input id="city" name="city" type="text" placeholder="Orlando">
		</p>

		<p>
			<label for="state">State:</label>
			<input id="state" name="state" type="text" placeholder="FL">
		</p>

		<p>
			<label for="zip">Zip Code:</label>
			<input id="zip" name="zip" type="text" placeholder="12345">
		</p>

		<p>
			<label for="email">Email:</label>
			<input id="email" name="email" type="email" placeholder="jsmith@fullsail.edu">
		</p>

		<p>
			<label for="phone">Phone:</label>
			<input id="phone" name="phone" type="text" placeholder="407-123-4567">
		</p>

		<p>
			<label for="url">Web URL:</label>
			<input id="url" name="url" type="text" placeholder="www.yourwebsite.com">
		</p>

		<p>
			<input id="submitBtn" name="submitBtn" value="Submit" type="submit">
		</p>
	</form>

	<aside id="userDetails">
		<h3>User Submitted Info</h3>
		<div id="userInfo">
			<?
				$validate = new Validate();

				if(!empty($_GET["action"])) {

					if($_GET["action"] == "validate") {

						$formInputs = array(
							"firstName" => $_POST["firstName"],
							"lastName" => $_POST["lastName"],
							"address" => $_POST["address"],
							"city" => $_POST["city"],
							"state" => $_POST["state"],
							"zip" => $_POST["zip"],
							"email" => $_POST["email"],
							"phone" => $_POST["phone"],
							"url" => $_POST["url"]
						);

						$response = $validate->validateInputs($formInputs);

						foreach($formInputs as $input => $userInfo) {
							echo "<span class='userInfoLabel'>Name:</span> ".$_POST["firstName"]." ".$_POST["lastName"]."<br>";
							echo "<span class='userInfoLabel'>Address:</span> ".$_POST["address"]."<br>";
							echo "<span class='userInfoLabel'>City, State Zip:</span> ".$_POST["city"].", ".$_POST["state"]." ".$_POST["zip"]."<br>";
							echo "<span class='userInfoLabel'>Email:</span> ".$_POST["email"]."<br>";
							echo "<span class='userInfoLabel'>Phone:</span> ".$_POST["phone"]."<br>";
							echo "<span class='userInfoLabel'>Website:</span> ".$_POST["url"];
							break;
						}
					}
				}
			?>
		</div>
	</aside>

	<!-- Sallie Mae 877-279-7172 -->