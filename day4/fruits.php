<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/6/13
 * Time: 1:53 PM
 */
	if(isset($_POST["submitBtn"])) {
		$user = "root";
		$pass = "root";
		$fruitname = $_POST["fruitName"];
		$fruitcolor = $_POST["fruitColor"];

		if(!empty($fruitname) && !empty($fruitcolor)) {
			$db = new PDO('mysql:host=localhost;dbname=ssl1312;port=8889',$user,$pass);
			$sql = "INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor)";
			$result = $db->prepare($sql);
			$result->bindParam(':fruitname',$fruitname);
			$result->bindParam(':fruitcolor',$fruitcolor);

			$result->execute();

			echo "Your ".$fruitname." has been sent to the database!";
		}else {
			echo "Your ".$fruitname." did not communicate with the database!";
		}
	}
?>

<form id="fruitForm" method="POST" action="<? $_SERVER['PHP_SELF']; ?>">
	<p>
		<label for="fruitName">Fruit Name:</label>
		<input type="text" name="fruitName">
	</p>

	<p>
		<label for="fruitColor">Fruit Color:</label>
		<input type="text" name="fruitColor">
	</p>

	<p>
		<input type="submit" value="Submit" name="submitBtn">
	</p>
</form>

