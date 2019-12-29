<!DOCTYPE html>
<html>

<head>


  <title>CodePen - Random Login Form</title>

  
    <script src="js/prefixfree.min.js"></script>

</head>
<?php
session_start();
if(isset($_POST['submit'])){
require 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];

/*To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connect, $username);
			$password = mysqli_real_escape_string($connect, $password);
			$password = md5($password);
			*/
//Query inserting data into the personal_details table
    $result=mysqli_query($connect,'SELECT uid FROM admin where username="'.$username.'" AND password="'.$password.'"');
	    if (mysqli_num_rows ( $result)==1) {
	$_SESSSION['username']=$username;
	//echo'success';
	header('Location:welcomeadmin.php');
    }
	else
		
      echo 'Account is invalid';
}
if(isset($_GET['logout'])){
session_unregister('username');

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
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login" name="submit">
                                <a href = "update_account.php"> forgot password </a>
				<form/>
		</div>


</body>

</html>
