<?php
	$uploaddir = "/Applications/MAMP/htdocs//ssl1312/day3/lecture_examples/img/";

	$uploadfile = $uploaddir . basename($_FILES["userfile"]["name"]);

	echo "<pre>";

	if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$uploadfile)){
		echo "file is valid and was uploaded.\n";
	}else{
		echo "file not uploaded.\n";
	}

	echo "more debugging info";
	print_r($_FILES);
	echo "</pre>";

	echo "<img src=img/".$_FILES["userfile"]["name"].">";

