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
  <title>Login Example - Semantic</title>
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
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

</body>

</html>
<? 
} 
?>