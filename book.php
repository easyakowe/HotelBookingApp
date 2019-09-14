<?php
	session_start();

	include "db.php";

		$selectRoom = $_POST['select_room'];
		
		$Room_no = $_POST['room_no'];

		$arrival_date = $_POST['date1'];
		$departure_date = $_POST['date2'];

		$Check_in = date('Y:m:d', strtotime($arrival_date));		
		$Check_out = date('Y:m:d', strtotime($departure_date));

		$adult = $_POST['adult'];
		$kids = $_POST['kids'];


		
	if (isset($_POST['submit'])) {

		if (!$_SESSION['u_name'] == "admin") {
			echo '<script>alert("Please Register or Login");</script>';
		}else{
			
		

		if (empty($selectRoom) || empty($Room_no) || empty($Check_in) || empty($Check_out) || empty($adult) || empty($kids)) {
			echo '<script>alert("Please fill out all the fields");</script>';
		}else{



		 //For storage in the database
		

		$sql = "INSERT INTO reservation(Room_type, Room_no, Check_in, Check_out, Adult, Children) VALUES ('$selectRoom', '$Room_no', '$Check_in', '$Check_out', '$adult', '$kids')";
		$sql1 = "UPDATE roomstatus SET Status='Occupied', Check_in='$Check_in', Check_out='$Check_out' WHERE Room_No= '$Room_no'";
		$price = "SELECT * FROM room WHERE room_type='$selectRoom'";

		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);
		$result2 = mysqli_query($conn, $price);

		if ($result && $result1) {
			
			echo '<script>alert("Booking Successfully made!");</script>';
	
		}else{
			echo '<script>alert("Unsuccessful, please try again!");</script>';

			header("Location: ../home.php?request=error");
		}
		}
		}
	}else{
			header("Location: error.php");
			exit();
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Intercon Hotels and Suites | Success</title>
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
	


			</nav>

		</div>
	</div>
	<div style="text-align: center;">
	<br>
	
	<h1>Booking Successful</h1>
	<br>
	<h2>Your Reservation code is:<span style="color: #191970;"> <?php echo $_SESSION['u_name'], $Room_no;?> </span></h2>

	<?php 
		$row = mysqli_fetch_assoc($result2);
	 ?>
	 <br>
	<h2>Price per night:<span style="color: #191970;">&nbsp;&#8358; <?php echo $row['room_price'];?> </span></h2>
	<br>

	<form action="book.php" method="POST">
	<button type="submit" name="view">View Bookings</button>
	</form>
	
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Room_type</th>
					<th>Room_no</th>
					<th>Check_in</th>
					<th>Check_out</th>
					<th>Adult</th>
					<th>Children</th>
				</tr>
			</thead>
			<tbody>

				<?php 
                      if (isset($_POST['view'])) {
                      	
                      	$sql = "SELECT * FROM reservation WHERE Room_no = '$Room_no' ";
                      $result = mysqli_query($conn, $sql);
                      $check = mysqli_num_rows($result);

                      if ($check > 0) {
                        while ($row = mysqli_fetch_array($result)) { 
                      
                       

                     ?>

				<tr>
					<td><?php echo $row['Room_type'] ?></td>
					<td><?php echo $row['Room_no'] ?></td>
					<td><?php echo $row['Check_in'] ?></td>
					<td><?php echo $row['Check_out'] ?></td>
					<td><?php echo $row['Adult'] ?></td>
					<td><?php echo $row['Children'] ?></td>
				</tr>

				<?php 
			}
		}
		}
				 ?>

			</tbody>
		</table>
		
	</div>
</div>
</body>
</html>