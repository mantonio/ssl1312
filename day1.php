<?php

	$name = "Matt";
	$age = 36;

	//Double quotes considered complex variables will be replaced
	echo "I am $name and I am $age <br>";

	//Single quotes considered literal variables will not be replaced
	echo 'I am $name and I am $age <br>';

	//Concatenate strings and variables using a dot
	echo 'I am '.$name.' and I am '.$age;

	echo "<p class=\"name\">$name</p>"; //backslash esc double-quote
	echo "\t<p>Tabs work too!</p>"; //tab ion source code
	echo "<p>New lines are pretty</p>\n"; //new line in source code

?>