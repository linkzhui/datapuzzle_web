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
  <title>Contact Us - Data Puzzle</title>
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
    <a class="item">Products/Services</a>
    <a class="item">News</a>
    <a class="active item contact_us_page">Contact Us</a>
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
   <a class="item products_page">Products/Services</a>
   <a class="item news_page">News</a>
   <a class="active item contact_us_page">Contact Us</a>
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
      <a class="item products_page">Products</a>
      <a class="item news_page">News</a>
      <a class="active item contact_us_page">Contact Us</a>
        <div class="right item">
          <a class="ui inverted blue button login_page">Log in</a>
          <!-- <a class="ui inverted blue button signup_page">Sign Up</a> -->
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Contact the awesome data puzzle software engineers
      </h1>
      <!-- <h2>Do whatever you want when you want to.</h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div> -->
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


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned column">
      	<?php
      		$image_array  = array("/public/images/samoyed.jpg","/public/images/cute.jpg","/public/images/Golden_Retriever.png","/public/images/Hiromi.png");
      		$count=0;
      		
          $fp = fopen("contact.txt", "r");
          
          while (!feof($fp)) {
            // process current line
              $current_line = fgets($fp);
          ?>
            <div class="column">
            <h3><?php echo $current_line; ?></h3>

          <?php

            $email = fgets($fp);
            $email_mail_to = "mailto:"+ $email;
          ?>

          <p>
            <img src=<?php echo $image_array[$count]?> class="ui avatar image"> <b>Software Engineer</b> <a href=<?php echo $email_mail_to?>><?php echo $email?></a>
          </p>

          <?php
            for($x = 0; $x < 3; $x++)
            {
              $current_line = fgets($fp);
              ?>
              <p><?php echo  $current_line; ?></p>
              <?php
            }

            $current_line = fgets($fp);
            ?>

          </div>
            <?php
            $count++;
          }
          fclose($fp);
      ?>

          



        <!-- <div class="column">
          <h3>Zhemin Su</h3>
          <p>
            <img src="/public/images/samoyed.jpg" class="ui avatar image"> <b>Software Engineer</b> <a href="mailto:zhemin.su@sjsu.edu">zhemin.su@sjsu.edu</a>
          </p>
          <p>
              Integrated Google Drive API to implement the file upload and folder create features
            </p>
            <p>
              Implemented Google Account Authentication
            </p>
            <p>
              Built Android’s Activity UI
            </p>
        </div>

        <div class="column">
          <h3>Ziyu Ye</h3>
          <p>
            <img src="/public/images/cute.jpg" class="ui avatar image"> <b>Software Engineer</b> <a href="mailto:ziyu.ye@sjsu.edu">ziyu.ye@sjsu.edu</a>
          </p>
          <p>Android UI design and Implementation</p>
          <p>Used in-app advertisement (Google AdMob) to show ads from Google advertisers</p>
          <p>Implemented File Split and Merge in Android File System</p>
            
        </div>

        <div class="column">
          <h3>Meng-Huan Lee</h3>
          <p>
            <img src="/public/images/Golden_Retriever.png" class="ui avatar image"> <b>Software Engineer</b>  <a href="mailto:meng-huan.lee@sjsu.edu">meng-huan.lee@sjsu.edu</a>
          </p>
          <p>Developed File access in Android External and Internal Storage</p>
          <p>Working on the File Encryption methods in android File System</p>
          <p>Scheduling the group meeting</p>
        </div>

        <div class="column">
          <h3>Xiaoqian Ma</h3>
          <p>
            <img src="/public/images/Hiromi.png" class="ui avatar image"> <b>Software Engineer</b>  <a href="mailto:xiaoqian.ma@sjsu.edu">xiaoqian.ma@sjsu.edu</a>
          </p>
          <p>
              Integrated Google Firebase Database API to record the user’s information and file’s metadata
            </p>
            <p>
              Implemented Google Firebase Authentication to verify the user’s login and sign up information
            </p>
            <p>
              Working on File recover method
            </p>
          
        </div> -->
      </div>
    </div>
  </div>

  <!-- <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
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
<? 
} 
?>
