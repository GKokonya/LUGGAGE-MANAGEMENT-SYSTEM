
<html>
<body>

<!--<form action="available.php method="POST">
input tpye="submit" name="submit" 
</form>-->

<table border = "1" align = "center" width = "50%" >
<tr width="50px">

<td width="50px">location</td>

<td width="50px">Cancel Rersevation</td>
</tr>

<?php
 $now=date("g:i:s");
require_once "connection.php";

$sql="SELECT * FROM reserve";
$records = $connect->query($sql);
 while($row= $records ->fetch_assoc()) {
	//$id=$row['id'];
	//$avail=$row['avail'];
$id=$row['id'];
$username=$row['username'];
$booktime=$row['booktime'];

echo "<tr>";
	  echo"<td>".$row['id']."</td>";
$sql_1 = "INSERT INTO storereserve (id, username, booktime)VALUES ('$id', '$username','$booktime')";
$connect->query($sql_1);
echo'<td><a href = "cancel2.php">unreserve </a></td></tr>';
}


	
?>
<tr width="50px" >
<td colspan="3">
<br><a href="welcome.php">Back</a>
</td>
</tr>
</table>
</body>
</html>
