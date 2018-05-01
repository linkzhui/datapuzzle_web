<?php
$email = $_POST["email"];
$password = $_POST["password"];
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$homeAddress = $_POST["homeAddress"];
$homePhone = $_POST["homePhone"];
$cellPhone = $_POST["cellPhone"];

$dbhost = 'aa3ms9o3q88mvt.cpxjzynfvxe6.us-west-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'ebdb';
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$user = 'linkzhui';
$password_db = 'su65612265';

try {
    $pdo = new PDO($dsn, $user, $password_db);
    $sql = "INSERT INTO User VALUES ('$lastName', '$firstName', '$email', '$homeAddress', '$homePhone', '$cellPhone','$password')";
	$result = $pdo->query($sql);
	if($result){
		header("Location:/views/register.php");
	}
	else{
		header("Location:/views/register.php");
	}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>