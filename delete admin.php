<!DOCTYPE html>
<html>

<head>


  <title>CodePen - Random Login Form</title>

  
    <script src="js/prefixfree.min.js"></script>

</head>
<?php
session_start();
if(isset($_POST['delete'])){
require 'connection.php';
$username=$_POST['username'];

    $sql='DELETE FROM login where username="'.$username.'"';

if ($connect->query($sql) === TRUE) {
		@header("Location:admin.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
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
				<input type="submit" value="delete" name="delete">
				<form/>
		</div>


</body>

</html>
