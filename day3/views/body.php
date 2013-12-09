<?php

	/**
	 * Matt Antonio
	 * Class: SSL
	 * Assignment: Lab 3
	 * Date: 12/04/13
	 */

?>
	<section class="content wrap">
		<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.</p>
	</section>

	<section class="wrap">
		<form enctype="multipart/form-data" method="POST" action="?action=login">
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
				<img id="captchaImg" src="captcha.php" />
			</div>
			<input type="text" id="captchatxt" name="captchatxt">
			</p>

			<p>
				<input type="submit" id="uploadBtn" value="Submit">
			</p>
		</form>
	</section>




	<!-- Sallie Mae 877-279-7172 -->