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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/reset.css">
    <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/site.css">

    <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/container.css">
    <link rel="stylesheet" typenode="text/css" href="/public/Semantic-UI-CSS/components/grid.css">
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


    <!--<link rel="stylesheet" type="text/css" href="/stylesheets/index.css"/>-->
    <script>

        function click_register_function() {
            email = document.getElementById("email").value;
            password = document.getElementById("password").value;
            emailRE = "^.+@.+\..{2,4}$";
            if (!email.match(emailRE)){
                alert("Invalid email address. Should be xxxxx@xxxxx.xxx\n");
            } else if (!password || password.length === 0) {
                alert("Password is required!");
            }
        }
    </script>

    <script src="/public/Semantic-UI-CSS/themes/default/assets/library/jquery.min.js"></script>
    <script src="/public/Semantic-UI-CSS/components/form.js"></script>
    <script src="/components/transition.js"></script>


    <style type="text/css">
        body > .grid {
            height: 100%;
        }
        .bodybg {
            background-image: url("/image/bgimage.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%));
        }
        body.background {
            opacity: 0.5;
        }
        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }

    </style>
</head>
<body class="bodybg">
<div class="ui middle aligned center aligned grid">
    <div class="column">

        <form class="ui large form" method="post" action="/views/login"">

            <div class="ui stacked segment">
                <div class="field">
                    <label type="text"><b>User Name: </b></label>
                    <div class="ui left input">
                        <input id="email" type="text" name="username" required>
                    </div>
                </div>
                <div class="field">
                    <label type="text"><b>Password: </b></label>
                    <div class="ui left input">
                        <input id="password" type="password" name="password" required>
                    </div>
                </div>

                <div>
                    <input class="ui fluid large blue submit button" type="submit" name="register" value="Register" />
                </div>

            </div>

            <div id="er" class="ui error message"></div>

        </form>
    </div>
</div>


<br/>
<p id="test"></p>

</body>
</html>
