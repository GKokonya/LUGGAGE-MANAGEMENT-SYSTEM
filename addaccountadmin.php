<!DOCTYPE html>
<html>

<body>
 <div id="login">
  <form id="login_form" method="POST">
    <div class="field_container">
      <input type="number" name="username" placeholder="Admission_Number" required="">
    </div>
	<div class="field_container">
      <input type="password"  name="password" placeholder="password" required="">
	  
    <div class="field_container">
       <input type="submit" name="addaccount" value="addaccount" >
    </div>

      </div>
</form>

</div>

</body>


</html>




<?php
session_start();
require_once "connection.php";
if(isset($_POST["addaccount"])){
$username = htmlspecialchars ($_POST["username"]);
$password = htmlspecialchars ($_POST["password"]);





	//Query inserting data into the personal_details table
$sql = "INSERT INTO admin(username,password)VALUES ('$username', '$password')";
$_SESSSION['username']=$username;

	//Query to verify new record was created successfully in the blog_articles table
	if ($connect->query($sql) === TRUE) {
			$_SESSSION['username']=$username;
	header('Location:admin.php');
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
}
?>
