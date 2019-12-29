
<html>
<body>

<form action="view_p.php" method="POST">
<input tpye="number" name="id">
<input type="submit" name="p" value="checkLocation" >
</form>

<table border = "1" align = "center" width = "50%" >


<td width="50px">username</td>
<td width="50px">booktime</td>
<td width="50px">storetime</td>
</tr>

<?php
require_once "connection.php";
 
if(isset($_POST["p"])){

$id = htmlspecialchars ($_POST["id"]);
$sql='SELECT * FROM storereserve,storeconfirm WHERE storereserve.id=storeconfirm.id';
//excute query
	    $records = $connect->query($sql);
 	while($row= $records->fetch_assoc()){
$username=$row['username'];
$booktime=$row['booktime'];
     echo "<tr>";
echo"<td>".$row['username']."</td>";
  echo"<td>".$row['booktime']."</td>";
echo"<td>".$row['confirmtime']."</td>";
 echo "</tr>";

}
}
	
?>
<tr width="50px" >
<td colspan="3">
<br><a href="welcomeadmin.php">Back</a>
</td>
</tr>
</table>
</body>
</html>
