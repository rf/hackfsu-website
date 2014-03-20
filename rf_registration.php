<!DOCTYPE HTML>
<html>
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
    <body>


<script type="text/javascript">
  // GA tracking

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-49040472-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        
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
                    <li class="active"><a href="#about">REGISTRATION</a></li>
                </ul>
                <div class="clear"></div>
            </div>      
        </div>
        
        <!--Services-->
        <div id="about" class="clear services section block">
          <div class="block content-960 center-relative">
            <h2 class="section-title montserrat-font">Registration</h2>
            <div class="title-separator"></div> 

            <form id="regform">

              <ul id="register-form">

                <li>
                    <input type="text" id="username" name="username" required placeholder="Username" />
                </li>

                <li>
                    <input type="password" id="password" name="password" required placeholder="Password" />
                </li>

                <li>
                    <input type="password" id="passwordconfirm" name="passwordconfirm" required placeholder="Password Confirm" />
                </li>

                <li>
                    <input type="text" id="name" name="name" required placeholder="Full Name"  value="<?php echo $_POST['name']; ?>" />
                </li>
                <li class="email-holder">
                    <input type="email" id="email" name="email" required placeholder="Email" value="<?php echo $_POST['email']; ?>" />
                </li>
                <li class="website-holder">
                    <input type="text" id="school" name="school" required placeholder="School" value="<?php echo $_POST['school']; ?>" />
                </li>

                <li>
                  <input type="url" name="github" id="githuburl" placeholder="Github URL (optional)">
                </li>

                <li>
                  <!-- Disgusting crap to have a styled upload button -->
                  <script> function upFile() { document.getElementById('upfile').click(); } </script>
                  <button class="button" id="upload" onclick="upFile(); return false;">Select Resume PDF (Optional)</button>
                  <div style='height: 0px;width:0px; overflow:hidden;'><input id="upfile" type="file" value="upload" data-file /></div>
                </li>

                <li class="last-child"> </li>

              </ul>

              <button type="submit" class="button black" id="submitbtn">Submit Registration</button>

            </form>

            

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

        <div id="remodal" class="remodal" data-remodal-id="modal">
            <p style="font-size: 20px">
              Flat, responsive, lightweight, fast, easy customizable modal window plugin
              with declarative state notation and hash tracking.
            </p>
            <br>
            <a class="remodal-confirm" href="#">OK</a>
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
