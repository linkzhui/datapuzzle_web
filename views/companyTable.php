<?php 
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://www.izzy-ye.com/user_list_to_JSON.html"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        $output_object = json_decode($output);
        // close curl resource to free up system resources 
        curl_close($ch);  

        $output_result = "<table border='1' width='100%'><caption><b>Sleep Truck User Account Table</b></caption><tr><th>Last Name</th><th>First Name</th><th>Email</th><th>Home Address</th><th>Home Phone</th><th>Cell Phone</th></tr>";
        foreach ($output_object as $output_row) {
                $output_result .= "<tr><td>" .$output_row->lastName ."</td>";
                $output_result .= "<td>" .$output_row->firstName ."</td>";
                $output_result .= "<td>" .$output_row->email ."</td>";
                $output_result .= "<td>" .$output_row->homeAddress ."</td>";
                $output_result .= "<td>" .$output_row->homePhone ."</td>";
                $output_result .= "<td>" .$output_row->cellPhone ."</td></tr>";
        }
        $output_result .= "</table>";

        $inputText = $_POST["inputText"];
        $dbhost = 'aa3ms9o3q88mvt.cpxjzynfvxe6.us-west-1.rds.amazonaws.com';
        $dbport = '3306';
        $dbname = 'ebdb';
        $charset = 'utf8' ;

        $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
        $user = 'linkzhui';
        $password_db = 'su65612265';
        $pdo = new PDO($dsn, $user, $password_db); 
        $sql = "SELECT `User`.`LastName`,
        `User`.`FirstName`,
        `User`.`Email`,
        `User`.`HomeAddress`,
        `User`.`HomePhone`,
        `User`.`CellPhone`,
        `User`.`Password`
        FROM `ebdb`.`User`";

        $result = $pdo->query($sql); 
        $search_result .= "<table border='1' width='100%'><caption><b>Data Puzzle User Account Table</b></caption><tr><th>Last Name</th><th>First Name</th><th>Email</th><th>Home Address</th><th>Home Phone</th><th>Cell Phone</th></tr>";
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
        echo $search_result; ?>
        <br />
        <br />
        <br />
        <?php echo $output_result; ?>
</body>
</html>