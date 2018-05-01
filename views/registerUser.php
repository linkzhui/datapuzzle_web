<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>


<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Register</title>
  <link rel="apple-touch-icon" sizes="120x120" href="/public/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon-16x16.png">
  <link rel="manifest" href="/public/images/site.webmanifest">
  <link rel="mask-icon" href="/public/images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/site.css">

  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/container.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/header.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/image.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/form.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/input.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/button.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/list.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/message.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/icon.css">

  <script src="/public/Semantic-UI-CSS/themes/default/assets/library/jquery.min.js"></script>
  <script src="/public/Semantic-UI-CSS/components/form.js"></script>
  <script src="/public/Semantic-UI-CSS/components/transition.js"></script>

  <style type="text/css">
    /*body {
      background-color: #DADADA;
    }*/
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
    // <?php
    //     if(isset($_POST["option"]) && isset($_POST["input"]))
    //     {
    //         echo "helloworld";
    //     }
    //     else{
    //         echo "123123";
        
    //     }
    // ?>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    });
   
   function search(){
        var itemOption = document.getElementById("mySelect").value;
        var inputText = document.getElementById("inputText").value;
                if(inputText.length==0)
                {
                    alert("input length = 0");

                    <?php
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
                        $search_result = "";
                        $count = 0;
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
                document.getElementById("table").innerHTML = "<?php echo $search_result; ?>";
                }
                else{
                    alert("input test is: "+inputText);
                    $('<form action="/views/about.php" method="POST">' + '<input type="hidden" name="aid" value="' + "dawd" + '">' +'</form>').submit();
                }
            
   }
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Search the User account
      </div>
    </h2>
    <form class="ui large from" method="POST" action="">
        <div class = "field">
            <label><b>Search by: </b></label>
                <select id = "mySelect" name = "option">
                    <option value = "LastName">Last Name</option>
                    <option value = "FirstName">First Name</option>
                    <option value = "Email">Email</option>
                    <option value = "CellPhone">Cell Phone Number</option>
                </select>
                <input type="text" id = "inputText" name = "input"/>
                <button type = "submit" class = "ui fluid large teal button"">Search</button>
        </div>
    </form>
    <div id = "table">
    </div>
</div>
</div>
<p id = "p"></p>
</body>

</html>
<? 
} 
?>