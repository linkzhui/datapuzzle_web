<?php
	$inputText = $_GET["inputText"];
	$dbhost = 'aa3ms9o3q88mvt.cpxjzynfvxe6.us-west-1.rds.amazonaws.com';
    $dbport = '3306';
    $dbname = 'ebdb';
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
    $user = 'linkzhui';
    $password_db = 'su65612265';
    $pdo = new PDO($dsn, $user, $password_db);
    $search_result = "";
    $count = 0;
	$sql = "SELECT `User`.`LastName`,
        `User`.`FirstName`,
        `User`.`Email`,
        `User`.`HomeAddress`,
        `User`.`HomePhone`,
        `User`.`CellPhone`,
        `User`.`Password`
        FROM `ebdb`.`User`";

	$result = $pdo->query($sql); 
    $rows = array();
	foreach ($result as $row) {
        $rows[] = $row;
    }
    echo json_encode($rows);
?>