
<html>
<body>

<!--<form action="available.php method="POST">
input tpye="submit" name="submit" 
</form>-->

<table border = "1" align = "center" width = "50%" >
<tr width="50px">

<td width="50px">location</td>
<td width="50px">Username</td>
<td width="50px">Cancel Rersevation</td>
</tr>

<?php
 $now=date("g:i:s");
require_once "connection.php";
$sql="SELECT * FROM confirm";
//excute query
	    $records = $connect->query($sql);
 while($row= $records->fetch_assoc()){
$id=$row['id'];
$username=$row['username'];
///$booktime=$row['booktime'];
     echo "<tr>";
	  echo"<td>".$row['id']."</td>";
echo"<td>".$row['username']."</td>";
echo'<td><a href = "cancel.php">unreserve </a></td>';
 echo "</tr>";
}
$sql = "INSERT INTO storeconfirm (id, username)VALUES ('$id', '$username')";
$connect->query($sql); 
	
?>
<tr width="50px" >
<td colspan="3">
<br><a href="welcomeadmin.php">Back</a>
</td>
</tr>
</table>
</body>
</html>
