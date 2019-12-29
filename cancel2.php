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

if($avail==1){
	$avail=0;
$sql= " UPDATE available SET avail='".$avail."'where id='".$id."'";
if ($connect->query($sql) === TRUE) {
		@header("Location:del2.php");
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
