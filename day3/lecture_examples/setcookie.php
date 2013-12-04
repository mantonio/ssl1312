<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/4/13
 * Time: 1:46 PM
 */

$value = "This is my cookie!";
setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);
