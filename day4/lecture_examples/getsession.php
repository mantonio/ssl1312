<?php
/**
* Created by PhpStorm.
* User: matt
* Date: 12/4/13
* Time: 2:10 PM
*/

session_start();

echo "Name is: ".$_SESSION['name']."<br>";
echo "Password is: ".$_SESSION['password'];

