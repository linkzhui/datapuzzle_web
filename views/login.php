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
  <title>Login</title>
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
  function verifyAdmin(){
      <?php  
        $file = fopen("adminUser.txt", "r");
        $username = "";
        $password = "";
        if(!feof($file))
        {
            $username = fgets($file);
        }
        if(!feof($file))
        {
            $password = fgets($file);
        }
        fclose($file);
      ?>
      var username_input = <?php json_decode($username); ?>;
      alert(username_input+"");
      // var username_input = document.getElementById("username");
      // var password_input = document.getElementById("password");

      // if(username===username_input && password === password_input)
      // {
      //   alert("username and password matched");
      // }
      // else if (username!==username_input||password !== password_input)
      // {
      //   alert("username does not match the password, please try again");
      // }
      // preventDefault();

  }
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Log-in to your account
      </div>
    </h2>

    <form class="ui large form" method="GET" action="/views/verifyuser.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input id="username" type="text" name="username" placeholder="user name" required>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input id = "password" type="password" name="password" placeholder="Password" required>
          </div>
        </div>
        <div> <button type="submit" class="ui fluid large teal button" value="login">Log In</button></div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="/views/register.php">Sign Up</a>
    </div>
  </div>
</div>

</body>

</html>
<? 
} 
?>