<?
$uploaddir = '/Applications/MAMP/htdocs/SSL/Day_03/exersize/"';

$uploadfile = $uploaddir . basename($_FILES["userfile"]["name"]);

echo "<pre>";

if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$uploadfile)){
	echo "file is valid and was uploaded.\n";
}else{
	echo "file not uploaded.\n";
}

echo "more debugging info";
print_r($_FILES);

?>
