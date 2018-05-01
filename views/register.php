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
    body {
      background-color: #DADADA;
    }
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
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class = "column">
    <h2 class="ui teal image header">
      <div class="content">
        Register the account
      </div>
    </h2>

    <form class="ui large form" method="POST" action="/views/addUser.php">
      <div class="ui stacked segment">
        <div class="field">
            <label type="text"><b>Email: </b></label>
            <div class="ui left input">
                    <input id="email" type="email" name="email" required>
            </div>
        </div>
        <div class="field">
                    <label type="text"><b>Password: </b></label>
                    <div class="ui left input">
                        <input id="password" type="password" name="password" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>Last Name: </b></label>
                    <div class="ui left input">
                        <input id="lastName" type="text" name="lastName" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>First Name: </b></label>
                    <div class="ui left input">
                        <input id="firstName" type="text" name="firstName" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>Home Address: </b></label>
                    <div class="ui left input">
                        <input id="homeAddress" type="text" name="homeAddress" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>Home Phone: </b></label>
                    <div class="ui left input">
                        <input id="homePhone" type="text" name="homePhone" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>Cell Phone: </b></label>
                    <div class="ui left input">
                        <input id="cellPhone" type="text" name="cellPhone" required>
                    </div>
                </div>

        <div> <button type="submit" class="ui fluid large teal button" value="register">Register</button></div>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>
<div class="ui center middle" align="center">
  <div class = "column">
    <h2 class="ui teal image header">
      <div class="content">
        Search the User:
      </div>
    </h2>
<form class="ui large form" method="POST" action="/views/listUser.php">
      <div class="ui stacked segment">
        <div class="field">
            <label type="text"><b>Search the user: </b></label>
            <div class="ui left input">
                    <input id="inputText" type="text" name="inputText" placeholder="Name/Email/Phone Number/Leave it blank to display all">
            </div>
        </div>
        <div> <button type="submit" class="ui fluid large teal button" value="register">Register</button></div>
      </div>

      <div class="ui error message"></div>
    </form>
  </div>
</body>

</html>
<? 
} 
?>