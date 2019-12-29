
<?php
require_once "connection.php";
$sql="SELECT * FROM reserve";
//excute query
	    $records = $connect->query($sql);
 	while($row= $records->fetch_assoc()){
       $id=$row['id'];
       $starttime=$row['starttime'];
       $endtime=$row['endtime'];


 $id=$row['id'] = htmlspecialchars ($_POST["id"]);
 $starttime=$row['starttime'] = htmlspecialchars ($_POST["starttime"]);
$endtime=$row['endtime'] = htmlspecialchars ($_POST["endtime"]);

	//Query inserting data into the personal_details table
$sql = "INSERT INTO store (id, starttime, endtime)VALUES ('$id', '$starttime','$endtime')";


	//Query to verify new record was created successfully in the blog_articles table
	if ($connect->query($sql) === TRUE) {
		echo "New record created successfully";
		//@header("Location:addaccount.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
}
?>
