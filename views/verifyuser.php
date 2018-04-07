<?php

$username_input = $_GET["username"];
$password_input = $_GET["password"];

$file = fopen("adminUser.txt", "r");
if(!feof($file))
{
    $username = fgets($file);
}
if(!feof($file))
{
    $password = fgets($file);
}
fclose($file);

echo strlen($username_input);
if(strcmp($username,$username_input)&&$password_input ===$password){
	header("Location:/views/currentuser.php");
}
else{
	header("Location:/views/login.php");
}

?>