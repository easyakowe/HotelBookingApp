<?php
/* Log out process, unsets and destroys session variables */
	

	include "db.php";

	if (isset($_POST['submit'])) {
		
		session_start();
		session_unset();
		session_destroy(); 
		}else{
		header("Location: home.php");
		}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
</head>

<body>
    <div style="text-align: center;" class="form">
          <h1 style=" color:orange;">You have been logged out!</h1>
              
          <h3>See you next time</h3>
          
          <a href="index.php"><button class="button button-block"/>Back to Login page</button></a>
    </div>
    <br>
    <div style="text-align: center;">
    	<img src="images/c1.jpg"><img src="images/c1.jpg">
    </div>

</body>
</html>
