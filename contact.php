<?php 

		session_start();

		include "db.php";

		if (isset($_POST['send'])) {
			
			$fullname = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];

			$sql = "INSERT INTO contactus(full_name, email, phone) VALUES ('$fullname', '$phone', '$email')";
			$result = mysqli_query($conn, $sql);

			if ($result) {
			 	header("Location: index.php");
			 } else{
			 	header("Location: error.php");
			 }
		}else{
			header("Location: home.php");
		}

?>