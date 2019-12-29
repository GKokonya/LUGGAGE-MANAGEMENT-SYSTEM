<?php
include('connection.php');

$availbale="";
$sql="SELECT * FROM available";
$query = $connect->query($sql);
//$quick_check = mysqli_num_rows($query);
//if(mysqli_num_rows($query)>0){
 while($row= $query ->fetch_assoc()) {
	$id=$row['id'];
	$avail=$row['avail'];

if($avail==0){
$avail=1;
$sql= " UPDATE available SET avail='".$avail."'where id='".$id."'";
if ($connect->query($sql) === TRUE) {
		 //echo'<td></a><a href = "Cancel.php">Cancel Reservation</a></td>';
		@header("Location:sample.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
	}
}
else{
	echo'no space available';
}
 }
?>
