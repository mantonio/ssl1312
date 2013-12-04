<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/4/13
 * Time: 3:09 PM
 */

//$uploaddir = "/Applications/MAMP/htdocs/ssl1312/day3/lecture_examples/img/";
//$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
//
//echo '<pre>';
//if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//	echo "File is valid and was successfully uploaded.\n";
//}else {
//	echo "Possible file upload attack!\n";
//}

print_r($_FILES['userfile']);

echo '</pre>';

