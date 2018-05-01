<?php
	$inputText = $_POST["inputText"];
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
	if(strlen($inputText))
	{
		$sql = "SELECT * FROM User WHERE LastName = '$inputText' OR
            FirstName = '$inputText' OR Email = '$inputText' OR HomePhone = '$inputText' OR CellPhone = '$inputText'";
	}
	else{
		//input text is empty
		$sql = "SELECT `User`.`LastName`,
        `User`.`FirstName`,
        `User`.`Email`,
        `User`.`HomeAddress`,
        `User`.`HomePhone`,
        `User`.`CellPhone`,
        `User`.`Password`
    	FROM `ebdb`.`User`";
	}
	$result = $pdo->query($sql); 
	$search_result .= "<table border='1' width='100%'><tr><th>Last Name</th><th>First Name</th><th>Email</th><th>Home Address</th><th>Home Phone</th><th>Cell Phone</th></tr>";
    foreach ($pdo->query($sql) as $row) {
        $count++;
        $search_result .= "<tr><td>" .$row['LastName'] ."</td>";
        $search_result .= "<td>" .$row['FirstName'] ."</td>";
        $search_result .= "<td>" .$row['Email'] ."</td>";
        $search_result .= "<td>" .$row['HomeAddress'] ."</td>";
        $search_result .= "<td>" .$row['HomePhone'] ."</td>";
        $search_result .= "<td>" .$row['CellPhone'] ."</td></tr>";
    }
    $search_result .= "</table>";
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	echo $search_result ?>
</body>
</html>