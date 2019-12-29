<?php
session_start();
require_once "connection.php";
if(isset($_POST["Register"])){
$FirstName = htmlspecialchars ($_POST["firstName"]);
$MiddleName = htmlspecialchars ($_POST["middleName"]);
$LastName = htmlspecialchars ($_POST["lastName"]);
$PhoneNo = htmlspecialchars ($_POST["phoneNo"]);
$Email = htmlspecialchars ($_POST["email"]);
$username = htmlspecialchars ($_POST["username"]);
$password = htmlspecialchars ($_POST["password"]);
$user_type='student';



	//Query inserting data into the personal_details table
$sql = "INSERT INTO login  (firstName, middleName, lastName,phoneNo,email,username,password,user_type)VALUES ('$FirstName', '$MiddleName', '$LastName','$PhoneNo','$Email','$username','$password','$user_type')";


	//Query to verify new record was created successfully in the blog_articles table
	if ($connect->query($sql) === TRUE) {
		echo "New record created successfully";
		@header("Location:user_login.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
}
?>

