<?php

	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 3
	 * Date: 12/04/13
	 */

	include_once "models/Upload.php";

?>

<div class="wrap">
	<section class="content">
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</section>

	<form enctype="multipart/form-data" method="POST" action="?action=submit">
		<p>
			<label for="username">Username:</label>
			<input id="username" name="username" type="text" placeholder="jsmith">
		</p>

		<p>
			<label for="userpass">Password:</label>
			<input id="userpass" name="userpass" type="password">
		</p>

		<p>
			<label for="avatar">Upload Avatar:</label>
			<input id="avatar" name="avatar" type="file">
		</p>

		<p>
			<label for="captchatxt">Captcha:</label>
			<div id="captcha">
				<img id="captchaImg" src="../captcha.php" />
			</div>
			<input type="text" id="captchatxt" name="captchatxt">
		</p>

		<p>
			<input type="submit" id="uploadBtn" value="Submit">
		</p>
	</form>

	<aside id="userDetails">
		<h3>User Submitted Info</h3>
		<div id="userInfo">
			<?

				$upload = new Upload();

				if(!empty($_GET["action"])) {

					if($_GET["action"] === "submit") {

						$formInputs = array(
							"username"=>$_POST["username"],
							"userpass"=>$_POST["userpass"]
						);



						$response = $upload->submit($formInputs);

						//Loop through the form inputs, grab the user's info and display it on the page
						foreach($formInputs as $input => $userInfo) {

							$salt = "21Ude&29849*kKf1qas]-98jjhGE";

							echo "<span class='userInfoLabel'>Username:</span> ".$_POST["username"]."<br>";

							echo "<span class='userInfoLabel'>Password:</span> ".md5($salt.$_POST["userpass"]);

							break;
						}

					}
				}

			?>
		</div>
	</aside>


	<!-- Sallie Mae 877-279-7172 -->