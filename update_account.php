<!DOCTYPE html>
<html>

<head>


  <title>CodePen - Random Login Form</title>

  
    <script src="js/prefixfree.min.js"></script>

</head>
<?php
session_start();
if(isset($_POST['update_account'])){
require 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$result=mysqli_query($connect,'SELECT uid FROM login where username="'.$username.'"');
	    if (mysqli_num_rows ( $result)==1) {
	$_SESSSION['username']=$username;
$sql=" UPDATE  login SET password='".$password."' where username='".$username."'";
if ($connect->query($sql) === TRUE) {
		$_SESSSION['username']=$username;
		@header("Location:user_login.php");
		exit();
	}
    }
	else
		
      echo 'Account is invalid';
}

?>
<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Strathmore<span></span></div>
		</div>
		<br>
		<div class="login">
		<form method="POST" >
		
				<input type="number" placeholder="username" name="username">   <br>
				<input type="text" placeholder="password" name="password">   <br>
				<input type="submit" value="update" name="update_account">
				<form/>
		</div>


</body>

</html>
