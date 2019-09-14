<?php
  session_start();
  include "db.php";
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

                <!--The new position of the Register or Login panel-->
        <div style="text-align: right; color: white;">
          <a style="color: yellow;" href="signupForm.php">Register </a>or<a style="color: yellow;" href="index.php"> Login</a>
        </div>

        <!--Changing to welcome message after Signup or Login-->
        <div style="display: none; color:#ffcc00;" id="loginSignup_block">
      <a id="hi" style="color: yellow;" href="#"><?php echo "Hi, "; echo $_SESSION['u_first'];?></a>
      <br>
      <div style="" id="bloc1" class="agileits_w3layouts_more1 menu__item">
      <a id="logout" style="text-align: right;" href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Logout</a>
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
              <li class="menu__item menu__item--current"><a href="rooms.php" class="menu__link">Rooms</a></li>
              <li class="menu__item"><a href="#contact" class="menu__link">Contact Us</a></li>
              <li class="menu__item"><a href="rating.php" class="menu__link">Visitors</a></li>
            </ul>
          </nav>
        </div>
      </nav>

    </div>
  </div>
<!-- //header -->
<br>
<!-- //Availability form -->

<div id="availability-agileits">
  <h4 style="text-align: center; font-weight: bold; font-style: italic;">Check for Available Rooms here...</h4>
<div class="col-md-3 book-form-left-w3layouts">
  <h2>CHECK AVAILABILITY</h2>
</div>
<div  class="col-md-9 book-form">
         <form action="rooms.php" method="POST">
          <div class="fields-w3ls form-left-agileits-w3layouts ">
              <p>Room Type</p>
              <select class="form-control" id = "select" onchange="this.form.submit()" name="selectRoom" required="">
                <option>Select a Room</option>
                <option>Luxury Room</option>
                <option>Deluxe Room</option>
                <option>Single Room</option>
                <option>Guest House</option>
              </select>
          </div>
                
          <div style="padding-top: 65px; padding-left: 250px; font-size: 25px; text-decoration: underline;" class="agileits_w3layouts_more1 menu__item">
        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal4">CHECK AVAILABILITY</a>
      </div>
          <!-- <button type="submit" name="bookHotel" data-toggle= "modal" data-target="#myModal4">CHECK AVAILABILITY</button>  -->

        </form>       
      </div>
    </div>
    <br>
    <br>
<!-- //Availability form -->

      <!-- The table for available rooms -->
                    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
            <!-- Modal1 -->
              <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button id="exitTable" type="button" class="close" data-dismiss="modal">&times;</button>

                    <script type="text/javascript">
                      $(document).ready(function(){
                        $('#exitTable').on('click',function(){
                          $('#availability-agileits').hide();
                          $('#book-agileits').show();
                        });
                      });
                    </script>

                    <h4>Intercon <span>Hotel and Suites</span></h4>
                    <img src="images/1.jpg" alt=" " class="img-responsive">
                    <br>
                    <div class="table-responsive">
                      <h3 style="text-align: center; color: orange;">Available Rooms</h3>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Room_Type</th>
                          <th>Room_No</th>
                          <th>Status</th>
                          <th>From</th>
                          <th>To</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php 
                      $selectRoom = $_POST['selectRoom'];
                      $sql = "SELECT * FROM roomstatus WHERE Status = 'Available' AND Room_type = '$selectRoom' ";
                      $result = mysqli_query($conn, $sql);
                      $check = mysqli_num_rows($result);

                      if ($check > 0) {
                        while ($row = mysqli_fetch_array($result)) {  

                     ?>

                    
                        <tr>
                          <td><?php echo $row['Room_type'] ?></td>
                          <td><?php echo $row['Room_No'] ?></td>
                          <td><?php echo $row['Status'] ?></td>
                          <td><?php echo $row['Check_in'] ?></td>
                          <td><?php echo $row['Check_out'] ?></td>
                        </tr>
                        <?php
                      }
                      }
                    ?>
                      </tbody>
                    </table>
                    
                    </div>
                    <br> 
                    <br>
        <!-- //The table for available rooms -->
</div>
        </div>
      </div>
    </div>

    <!-- The new position for the booking form -->

    <div style="display: none;" id="book-agileits">
      <h4 style="text-align: center; font-weight: bold; font-style: italic;">Now Proceed to make your booking here...</h4>
      <div class="col-md-3 book-form-left-w3layouts">
  <h2>BOOK NOW</h2>
</div>
<div class="col-md-9 book-form">
         <form action="book.php" method="POST">
          <div style="width: 100px;" class="fields-w3ls form-left-agileits-w3layouts ">
              <p>Room Type</p>
              <select class="form-control" id = "room" name="select_room" required="">
                <option>Select a Room</option>
                <option>Luxury Room</option>
                <option>Deluxe Room</option>
                <option>Single Room</option>
                <option>Guest House</option>
              </select>
          </div>

<div style="width: 100px;" class="fields-w3ls form-left-agileits-w3layouts ">
                <p>Room No</p>
                <select class="form-control" id = "room" name="room_no" required="">
                  <option>Select room no</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                </select>
                  
                </div>
          
          <div style="width: 150px;" class="fields-w3ls form-date-w3-agileits" name="arrivalDate">
                    <p>Check-in</p>
                  <input  id="datepicker1" name="date1" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                </div>
                <div style="width: 150px;" class="fields-w3ls form-date-w3-agileits" name="departureDate">
                    <p>Check-out</p>
                  <input  id="datepicker2" name="date2" type="text" value="Select Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                </div>

                

                <div style="width: 100px;" class="fields-w3ls form-left-agileits-w3layouts ">
                <p>Adult(s)</p>
                <select class="form-control" id = "room" name="adult" required="">
                  <option>No of Adults</option>
                  <option>1</option>
                  <option>2</option>
                </select>
                  
                </div>

                <div style="width: 100px;" class="fields-w3ls form-left-agileits-w3layouts ">
                <p>Children</p>
                <select class="form-control" name="kids" required="">
                  <option>No of Children</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
                  
                </div>

                <button type="submit" name="submit">BOOK NOW</button> 
          
          <!-- <div class="agileits_w3layouts_more menu__item">
        <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal4">BOOK NOW</a>
      </div> -->
        </form> 

      </div>
    </div>
    <br>
    <br>
 <!-- //The new position for the booking form -->


   <!-- rooms & rates -->
   <br>
   <br>
      <div class="plans-section" id="rooms">
         <div class="container">
         <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
            <div class="priceing-table-main">
         <div class="col-md-3 price-grid">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r1.jpg" alt=" " class="img-responsive" />
              <h4>Deluxe Room 1</h4>
            </div>
            <div class="price-gd-bottom">
                 <div class="price-list">
                  <ul>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  
                     </ul>
              </div>
              <div class="price-selet"> 
                <h3><span>&#8358;</span>8000</h3>           
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid ">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r2.jpg" alt=" " class="img-responsive" />
              <h4>Luxury Room 1</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                  <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>10000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid lost">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r3.jpg" alt=" " class="img-responsive" />
              <h4>Guest House 1</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>15000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid wthree lost">
          <div class="price-block agile">
            <div class="price-gd-top ">
              <img src="images/r4.jpg" alt=" " class="img-responsive" />
              <h4>Single Room 1</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>7000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
   <!--// rooms & rates -->

     <!-- rooms & rates -->
      
         <div class="container">
         
            <div class="priceing-table-main">
         <div class="col-md-3 price-grid">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r1.jpg" alt=" " class="img-responsive" />
              <h4>Deluxe Room 2</h4>
            </div>
            <div class="price-gd-bottom">
                 <div class="price-list">
                  <ul>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  
                     </ul>
              </div>
              <div class="price-selet"> 
                <h3><span>&#8358;</span>8000</h3>           
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid ">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r2.jpg" alt=" " class="img-responsive" />
              <h4>Deluxe Room 3</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                  <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>8000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid lost">
          <div class="price-block agile">
            <div class="price-gd-top">
            <img src="images/r3.jpg" alt=" " class="img-responsive" />
              <h4>Guest House 2</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>15000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 price-grid wthree lost">
          <div class="price-block agile">
            <div class="price-gd-top ">
              <img src="images/r4.jpg" alt=" " class="img-responsive" />
              <h4>Single Room 2</h4>
            </div>
            <div class="price-gd-bottom">
              <div class="price-list">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
              <div class="price-selet">
                <h3><span>&#8358;</span>7000</h3>
                <a href="#availability-agileits" class="scroll" >Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <br>
    <br>
   <!--// rooms & rates -->

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