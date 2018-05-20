<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Data Puzzle</title>
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
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/button.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/list.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/icon.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/transition.css">
  <link rel="stylesheet" type="text/css" href="/public/Semantic-UI-CSS/components/table.css">
  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="/public/Semantic-UI-CSS/themes/default/assets/library/jquery.min.js"></script>
  <script src="/public/Semantic-UI-CSS/components/visibility.js"></script>
  <script src="/public/Semantic-UI-CSS/components/sidebar.js"></script>
  <script src="/public/Semantic-UI-CSS/components/transition.js"></script>
  <script src="/public/js/jquery.js"></script>
  <script src="/public/js/init_page.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="item">Home</a>
    <a class="item">About</a>
    <a class="active item">Products</a>
    <a class="item">News</a>
    <a class="item contact_us_page">Contact Us</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="item home_page">Home</a>
   <a class="item about_page">About</a>
   <a class="active item products_page">Products</a>
   <a class="item news_page">News</a>
   <a class="item contact_us_page">Contact Us</a>
  <a class="item login_page">Login</a>
  <a class="item signup_page">Signup</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="item home_page">Home</a>
      <a class="item about_page">About</a>
      <a class="active item products_page">Products</a>
      <a class="item news_page">News</a>
      <a class="item contact_us_page">Contact Us</a>
        <div class="right item">
          <a class="ui inverted blue button login_page">Log in</a>
          <!-- <a class="ui inverted blue button signup_page">Sign Up</a> -->
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        User Visit Statistics
      </h1>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
          <table class="ui celled table">
              <caption><b><font size = "6">Your recent 5 visited features:</font></b></caption>
                <thead>
                  <tr>
                    <th>Feature Name:</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
    // ====== review statics ======
    $conn = mysqli_connect('cmpe272finalproject.cpxjzynfvxe6.us-west-1.rds.amazonaws.com','root','sjsucmpe272');
    $query = "SELECT * FROM ebdb.review WHERE product_name=’$product_name’";
    $result = $conn -> query($query);
    $star1 = 0;
    $star2 = 0;
    $star3 = 0;
    $star4 = 0;
    $star5 = 0;

    for($counter = 0; $row = mysqli_fetch_row($result); $counter++){
            if($row['rate'] == 1)
              $star1+=1;
            else if($row['rate'] == 2)
              $star2+=1;
            else if($row['rate'] == 3)
              $star3+=1;
            else if($row['rate'] == 4)
              $star4+=1;
            else if($row['rate'] == 5)
              $star5+=1;
    }

    $sum_rate = ($star1*1) + ($star2*2) + ($star3*3) + ($star4*4) + ($star5*5);
    $total_rate = $star1 + $star2 + $star3 + $star4 + $star5;
     if( $total_rate != 0)
     {
      $average =  $sum_rate/$total_rate;
    }
    else
    {
      $average = 0;
      $star = intval($average);
      $average2 = sprintf('%0.1f', $average);
    }

     echo "<table>  <tr>
        <th>Name</th>
        <th>Star Rate</th>
        <th>Review</th>
      </tr>";
      $query = "SELECT * FROM ebdb.review WHERE product_name=’$product_name’";
      $result = $conn -> query($query);

      for($counter = 0; $row = mysqli_fetch_array($result); $counter++){
          echo "<tr><th>". $row['user'] . "</th>";
          echo "<th>". $row['rate'] . "</th>";
          echo "<th>". $row['review'] . "</th></tr>";
      }

    ?>

            </tbody>
</table>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
          <table class="ui celled table">
            <caption><b><font size = "6">Statics for visited features:</font></b></caption>
                <thead>
                  <tr>
                    <th>Feature Name</th>
                    <th>Visited Times</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $cookies_count = array();

                        
                        if(isset($_COOKIE['signup_count'])){
                          $cookies_count['Signup/Login Feature'] = $_COOKIE['signup_count'];
                        }
                        if(isset($_COOKIE['split_count'])){
                          $cookies_count['File Split/Merge Feature'] = $_COOKIE['split_count'];
                        }
                        if(isset($_COOKIE['encrypt_count'])){
                          $cookies_count['File Encrypt/Decrypte Feature'] = $_COOKIE['encrypt_count'];
                        }
                        if(isset($_COOKIE['wifi_count'])){
                          $cookies_count['File Wifi Direct Feature'] = $_COOKIE['wifi_count'];
                        }
                        if(isset($_COOKIE['upload_count'])){
                          $cookies_count['File Upload/Download Feature'] = $_COOKIE['upload_count'];
                        }
                    foreach ($cookies_count as $key => $value) {
                            echo "<tr><td>$key</td>";
                            echo "<td>$value</td></tr>";
                      }
                  ?>
                </tbody>
              </table>
      </div>
    </div>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header about_page">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item contact_us_page">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>

