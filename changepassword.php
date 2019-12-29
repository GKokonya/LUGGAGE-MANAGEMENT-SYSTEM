<!DOCTYPE html>
<html>

<head>


  <title>CodePen - Random Login Form</title>

  
    <script src="js/prefixfree.min.js"></script>

</head>
<?php
if(isset($_POST['change_password'])){
session_start();
require 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql= " SELECT * FROM regi_db.login where username='".$username."'";

	//excute query
	    $result_0 = $connect->query($sql);
    //Retrieve data frm datbase for authentication
	    if ($result_0->num_rows > 0) {
		// output data of each row
		// Printing the posted data
		while($row = $result->fetch_assoc()) {
        $dbusername = $_POST["username"];
        $dbpassword =$_POST["password"];
	
}
 $success=($dbusername===$username);
  $sql_1='UPDATE login SET password="'.$password.'" where username="'.$username.'"';
	      $result = $connect->query($sql_1);
if($connect->query($success)){  
		  	$_SESSSION['username']=$username;
	    echo '<script type="text/javascript">
function authenticate_login(){
	alert("password changed successfully");
	
}
authenticate_login();
</script>';

echo'</a><a href = "login.php"> CLICK TO CONTINUE</a>';
		exit();
	} else {
		echo "Error: " . $success . "<br>" . $connect->error;
	/*	echo '<script type="text/javascript">
function authenticate_login(){
	alert("password change failed");
	
}
authenticate_login();
</script>' ;*/
	}
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
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="change_password" name="change_password">
				<form/>
		</div>


</body>
</html>