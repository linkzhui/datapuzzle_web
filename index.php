<?php
  session_start();
  extract( $_GET );
 
 if(isset($username)){
  $_SESSION["username"] = $username;
 }
 else{
  $_SESSION["username"] = "Guest";
 }
?>
<!doctype html>
<html>
<head>
  <!-- Standard Meta -->

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>About - Data Puzzle</title>
  <link rel="apple-touch-icon" sizes="120x120" href="public/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon-16x16.png">
  <link rel="manifest" href="public/images/site.webmanifest">
  <link rel="mask-icon" href="public/images/safari-pinned-tab.svg" color="#5bbad5">
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

            /* Individual bars */
.bar-5 {width: <?php if($total_rate == 0) $bar5 = 0; else{ $bar5 = (($star5/$total_rate)*100); $bar5 = intval($bar5); } echo "$bar5%"; ?>; height: 18px; background-color: #4CAF50;}
.bar-4 {width: <?php if($total_rate == 0) $bar4 = 0; else{ $bar4 = (($star4/$total_rate)*100); $bar4 = intval($bar4); } echo "$bar4%"; ?>; height: 18px; background-color: #2196F3;}
.bar-3 {width: <?php if($total_rate == 0) $bar3 = 0; else{ $bar3 = (($star3/$total_rate)*100); $bar3 = intval($bar3); } echo "$bar3%"; ?>; height: 18px; background-color: #00bcd4;}
.bar-2 {width: <?php if($total_rate == 0) $bar2 = 0; else{ $bar2 = (($star2/$total_rate)*100); $bar2 = intval($bar2); } echo "$bar2%"; ?>; height: 18px; background-color: #ff9800;}
.bar-1 {width: <?php if($total_rate == 0) $bar1 = 0; else{ $bar1 = (($star1/$total_rate)*100); $bar1 = intval($bar1); } echo "$bar1%"; ?>; height: 18px; background-color: #f44336;}



table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
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

  function click()
  {
    alert("click");
  }
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item home_page">Home</a>
    <a class="item about_page">About</a>
    <a class="item products_page">Products</a>
    <a class="item news_page">News</a>
    <a class="item contact_us_page">Contact Us</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button login_page">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button signup_page">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item home_page">Home</a>
   <a class="item about_page">About</a>
   <a class="item products_page">Products</a>
   <a class="item news_page">News</a>
   <a class="item contact_us_page">Contact Us</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item home_page">Home</a>
      <a class="item about_page">About</a>
      <a class="item products_page">Products</a>
      <a class="item news_page">News</a>
      <a class="item contact_us_page">Contact Us</a>
        <div class="right item">
          <a class="ui inverted blue">Hello <?php echo "$_SESSION[username]" ?> </a>
          <!-- <a class="signup_page ui inverted blue button">Sign Up</a> -->
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Data puzzle
      </h1>
      <h2>Protect your file in cloud storage</h2>
      <div class="ui huge primary button products_page">Check our product<i class="right arrow icon"></i></div>
    </div>

  </div>

  <!-- <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">We Help Companies and Companions</h3>
          <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Check Them Out</a>
        </div>
      </div>
    </div>
  </div> -->


  <!-- <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div> -->



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
