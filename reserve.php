
<!DOCTYPE html>
<html>
<head>
<title>date picker: HTML 5</title>
<link style ="text/css" rel="stylesheet" href="css/css.css"/>
</head>
<body>

<form method="POST" action="">
<label> Date: </label>
<input type = "datetime" name="timestamp" /><br>
<input type = "submit" name = "submit" value = "reserve"/>
</form>

</body>

</html>

<?php
require_once "connection.php";
 
if(isset($_POST["submit"])){
$timestamp = htmlspecialchars ($_POST["timestamp"]);

	//Query inserting data into the personal_details table
$sql = "INSERT INTO reserve (timestamp)VALUES ('$timestamp')";
//Query to verify new record was created successfully in the blog_articles table
	if ($connect->query($sql) === TRUE) {
		echo "New record created successfully";
		@header("Location:available.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
}
?>