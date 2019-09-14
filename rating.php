<?php
  session_start();
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Intercon Hotels and Suites | Home :: Welcome</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Intercon Hotel and Suites, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
  <!-- header -->
<div class="banner-top">

<div class="contact-bnr-w3-agile">
        <ul style="background-color: white">
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:easyisrael16@gmail.com">INFO@INTERCONHOTELS.COM</a></li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>+234 9026669396</li>  
          <li class="s-bar">
            <div class="search">
              <input class="search_box" type="checkbox" id="search_box">
              <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
              <div class="search_form">
                <form action="#" method="post">
                  <input type="search" name="Search" placeholder="Search" required=" " />
                  <input type="submit" value="Search">
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>





       <div class="social-bnr-agileits">
        <ul class="social-icons3">
                <li><a href="www.facebook.com/interconhotel" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="www.twitter.com/interconhotel" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="www.googleplus.com/interconhotel" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                
              </ul>
      </div> 

      


      

      <!--//For the new signup page that opens and closes when the button is clicked -->

      
            
      
      <div class="clearfix"></div>
    </div>
  <div class="w3_navigation">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="index.php">Intercon  <span>Hotel and Suites</span><p class="logo_w3l_agile_caption">Your Relaxation and First Class Comfort Zone</p></a></h1>
        </div>

        <!--The new position of the contact information-->


        <div style="color:#ffcc00;" id="loginSignup_block">
        <a style="color: yellow;" href="logout.php"><?php echo "Hi, "; echo $_SESSION['u_name'];?>
        </a>
        <br>
      <div id="bloc1" class="agileits_w3layouts_more1 menu__item">
      <a style="text-align: right;" href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Logout</a>
        </div>
      </div> 
<!-- The main logout section -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <!-- Modal1 -->
              <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Intercon <span>Hotel and Suites</span></h4>
                    <img src="images/1.jpg" alt=" " class="img-responsive">
                    
                    <form action="logout.php" method="POST">
                    <h5 style="text-align: center;"><?php echo "Hey "; echo $_SESSION['u_name'];?>, logging out already?</h5><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button style="text-align: center;" type="submit" name="submit">YES</button>&nbsp;&nbsp;&nbsp;
                    <button style="text-align: center;" type="submit" name="no">NO</button><br>
                    </form>
                  
                  </div>
                </div>
              </div>
      </div>
<!-- //The main logout section -->      

      

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--iris">
            <ul class="nav navbar-nav menu__list">
              <li class="menu__item"><a href="home.php" class="menu__link">Home</a></li>
              <li class="menu__item"><a href="about.php" class="menu__link">About</a></li>
              <li class="menu__item"><a href="home.php" class="menu__link">Gallery</a></li>
              <li class="menu__item"><a href="rooms.php" class="menu__link">Rooms</a></li>
              <li class="menu__item"><a href="#contact" class="menu__link">Contact Us</a></li>
              <li class="menu__item menu__item--current"><a href="rating.php" class="menu__link">Visitors</a></li>
            </ul>
          </nav>
        </div>
      </nav>

    </div>
  </div>
<!-- //header -->

  <!-- visitors -->
  <div class="w3l-visitors-agile" >
    <div class="container">
      <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
    </div>
    <div class="w3layouts_work_grids">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="w3layouts_work_grid_left">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="w3layouts_work_grid_left_pos">
                  <img src="images/c1.jpg" alt=" " class="img-responsive" />
                </div>
              </div>
              <div class="w3layouts_work_grid_right">
                <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>It was an awesome experience. Thumbs up to Intercon Hotels and its members of Staff. Hope to come again soon</p>
                <h5>Julia Rose</h5>
                <p>Germany</p>
              </div>
              <div class="clearfix"> </div>
            </li>
            <li>
              <div class="w3layouts_work_grid_left">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="w3layouts_work_grid_left_pos">
                  <img src="images/c2.jpg" alt=" " class="img-responsive" />
                </div>
              </div>
              <div class="w3layouts_work_grid_right">
                <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>The service was really first class. I enjoyed every moment at Intercon Hotel and Suites. Thank you! </p>
                <h5>Olaoluwa Smith</h5>
                <p>Nigeria</p>
              </div>
              <div class="clearfix"> </div>
            </li>
            <li>
              <div class="w3layouts_work_grid_left">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="w3layouts_work_grid_left_pos">
                  <img src="images/c3.jpg" alt=" " class="img-responsive" />
                </div>
              </div>
              <div class="w3layouts_work_grid_right">
                <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>I am really excited and impressed. I felt like a princess as a result of the class of servicing. Great job team Intercon Hotel. </p>
                <h5>Rosalind Cloer</h5>
                <p>Italy</p>
              </div>
              <div class="clearfix"> </div>
            </li>
            <li>
              <div class="w3layouts_work_grid_left">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="w3layouts_work_grid_left_pos">
                  <img src="images/c4.jpg" alt=" " class="img-responsive" />
                </div>
              </div>
              <div class="w3layouts_work_grid_right">
                <h4>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                Worth to come again
                </h4>
                <p>Sincerely, this is the best hotel i have every been to. The services, the meal, the rooms, everything was just simply fantastic. Thumbs up guys! </p>
                <h5>Amie Bublitz</h5>
                <p>Switzerland</p>
              </div>
              <div class="clearfix"> </div>
            </li>
          </ul>
        </div>
      </section>
    </div>  
  </div>
  <!-- visitors -->

  <!-- contact -->
<section class="contact-w3ls" id="contact">
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
      <div class="contact-agileits">
        <h4>Contact Us</h4>
        <p class="contact-agile2">Sign Up For Our News Letters</p>
        <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>  
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block"></p>
            </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block"></p>
            </div>
                    </div>
                    <div id="success"></div>
    

    For success/fail messages (comment)


                    <button type="submit" name="Send" class="btn btn-primary">Send</button> 
        </form>
                  
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-right">
      <h4>Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone :</strong> +234 9026669396 </p>
      <p class="contact-agile1"><strong>Email :</strong> <a href="info@interconhotels.com">info@interconhotels.com</a></p>
      <p class="contact-agile1"><strong>Address :</strong> 1-4 Riverville Estate, Zone 12, Wuse, Abuja.</p>
                                
      <div class="social-bnr-agileits footer-icons-agileinfo">
        <ul class="social-icons3">
                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
              </ul>
      </div >
      <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>
      </div>
      
    </div>
    <div class="clearfix"></div>
  </div>
</section>

    
<!-- /contact -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>  
<!-- /contact form -->  
<!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script> 
          <script type="text/javascript">
            jQuery(function($) {
              $(".swipebox").swipebox();
            });
          </script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>
      <!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
      <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
              auto: true,
              pager:true,
              nav:false,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });
      </script>
    <!--search-bar-->
    <script src="js/main.js"></script>  
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  
  <div class="arr-w3ls">
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
  </body>
</html>