<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login as Admin</title>
<link rel="stylesheet" href="css/stylex.css">
<style>
body 
{
  background-image: url('https://www.solidbackgrounds.com/images/1920x1080/1920x1080-light-blue-solid-color-background.jpg' );
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>



</head>
<body>
<right>
		<a href="index.php"><input type="button" id="index_btn" value="Home"/></a>
</right>
<br>
<br>
<br>
<br>
<br>
<br>



	
	<div id="main-wrapper">
		<center>
			<div class="imgcontainer">
			<img src="image/admin.png" class="avatar"/>
		</center>
	
		<form class="myform" action="adminlogin.php" method="post">

			<div class="inner_container">

			<label><b id="adminp">Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" id="adminpass" placeholder="Type your password" required/><br>
			
		

			<a href="adminlogin.php"><input  type="button" id="admin_btn" value="LogIn"/></a><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>

		
			
		
		</div>

		</form>
		
	</div>
</body>
</html>