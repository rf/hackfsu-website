<!DOCTYPE html>
<html>

<head>
<head>
        <title>HackFSU</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Fueling innovation and interdisciplinary collaboration in Tallahassee" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Minimal Awesomness" />
        <meta name="author" content="DryThemes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="css/clear.css"/>
        <link type="text/css" rel="stylesheet" href="css/carouFredSel.css"/>
        <link type="text/css" rel="stylesheet" href="css/supersized.css"/>
        <link type="text/css" rel="stylesheet" href="css/common.css"/>
        <link type="text/css" rel="stylesheet" href="css/columns.css"/>
        <link type="text/css" rel="stylesheet" href="css/prettyPhoto.css"/>
        <link type="text/css" rel="stylesheet" href="css/accordion-tabs.css"/>

        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link type="text/css" rel="stylesheet" href="css/isotope.css"/>
        <link type="text/css" rel="stylesheet" href="css/colors.css"/>
        <link type="text/css" rel="stylesheet" href="css/responsive.css"/>

        <link type="text/css" rel="stylesheet" href="css/jquery.remodal.css"/>

        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
</head>

<body>

  <!--Loading gif -->
  <table class="doc-loader">
      <tr>
          <td>
              <img src="images/ajax-document-loader.gif" alt="Loading..." />
          </td>
      </tr>
  </table>


  <!--Navigation Menu-->
  <div id="main-menu" class="main-menu main-menu-fixbg">
      <div class="center-relative menu-holder">
          <div class="menu-logo left"><img src="images/menu_logo.png" alt="Sensa"/></div>
          <ul class="right montserrat-font">
              <li class=""><a href="index.html">HOME</a></li>
          </ul>
          <div class="clear"></div>
      </div>
  </div>

        <!--Services-->
        <div id="about" class="clear services section block">
          <div class="block content-960 center-relative">


            <?php
if (isset($_POST['send-message'])) {
  $to = 'sponsors@hackfsu.com';
  $subject = 'Mail from website';
  $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($email) {
      $message .= 'Email: ' . $_POST['email'];
  } else {
    $message .= 'Invalid Email';
  }
  $headers = "From: info@hackfsu.com\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  $success = mail($to, $subject, $message, $headers, '‑finfo@hackfsu.com');
  if (isset($success) && $success) { ?>
<h3 class="section-title montserrat-font">Message Sent. Thank You.</h3>
  <?php } else { ?>
<h3 class="section-title montserrat-font">Oops! There was a problem. Message not sent. <a href="index.html">Try Again.</a></h3>
  <?php } }?>



            <div class="full-width top-150 bottom-100">
            <div class="picfull">

            </div>
            </div>

            <div class="clear"></div>

        </div>
        <div class="full-width top-150 bottom-100">
        <img src="images/service_graphic_01.png" alt="">
                    <div id="sponsors"></div>
        </div>




                <div class="clear"></div>
            </div>
        </div>




  <!--Footer-->
  <div class="clear center-text footer">
  <div class="scroll-top-holder relative block content-960 center-relative">

  </div>
  <div class="footer-content center-text block content-960 center-relative">
  <img class="bottom-100" src="images/footer_logo.png" alt="" />
  <div class="title-separator"></div>
  <!--
  <div class="big-social center-text top-100">
  <a href=""><img src="images/social_twitter.png" alt="" /></a>
  <a href="#"><img src="images/socia_pinterest.png" alt="" /></a>
  <a href="#"><img src="images/social_facebook.png" alt="" /></a>
  </div>
  -->
  </div>
  <div class="footer-copyright center-text">Created by: <a href="http://www.technolegy.org/">TechNOLEgy</a> at Florida State University</div>
  </div>


<!--Load JavaScript-->
  <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/accordion-tabs.min.js"></script>
  <script type="text/javascript" src="js/portfolio.js"></script>
  <script type="text/javascript" src="js/supersized.3.2.7.js"></script>
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="js/jquery.dryMenu.js"></script>
  <script type="text/javascript" src="js/small-menu.js"></script>
  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.myHint.js"></script>
  <script type="text/javascript" src="js/jquery.vticker-min.js"></script>
  <script type="text/javascript" src="php/scriptsData.php"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/jquery.remodal.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.2.17.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/registration.js"></script>
</body>
</html>

</body>

</html>
