<?php

include('connection.php');



	
for($id=1; $id<=100; $id++)
{
	$sql="INSERT INTO available (id) VALUES ($id)";
	$query = $connect->query($sql);
}


if ($connect->query($sql) === TRUE) {
		echo"successfully";
	
		exit();
		} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
?>
