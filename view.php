
<html>
<body>

<script type="text/javascript">
function authenticate_login(){
	alert("reserve successful");
	
}
authenticate_login();
</script>
<table border = "1" align = "center" width = "50%" >
<tr width="70px">

<td width="50px">location</td>
<td width="50px">starttime</td>
<td width="50px">endtime</td>
<td width="50px">time_remaining</td>
<td width="50px">Cancel reservation</td>

</tr>

<?php
session_start();
 $now=date("g:i:s");
require_once "connection.php";
$sql="SELECT * FROM reserve";
$timeup="00:00:00";
//excute query
//$username=$_POST['username'];
	    $records = $connect->query($sql);
 	while($row= $records->fetch_assoc()){
       $id=$row['id'];
       $starttime=$row['starttime'];
       $endtime=$row['endtime'];
     echo "<tr>";
	  echo"<td>".$row['id']."</td>";
     echo"<td>".$row['starttime']."</td>";
	 echo"<td>".$row['endtime']."</td>"; 
        
$sql = "INSERT INTO store (id, starttime, endtime)VALUES ('$id', '$starttime','$endtime')";
$connect->query($sql); 

$diff=abs(strtotime($row['endtime']) - strtotime($now));
$hours=floor($diff/ (60*60));
$minutes=floor(($diff - $hours * 60*60)/(60));
$seconds=floor(($diff - $hours * 60*60-$minutes*60));
$time= $hours.':'.$minutes.':'.$seconds;
if($now>=$endtime){
 echo"<td>". $timeup."</td>";
echo'<td>expired</td>';
}
else{
 echo"<td>". $time."</td>";
echo'<td><a href = "cancel.php">unreserve </a></td>';

};
}

	
?>

</table>
</body>
</html>
