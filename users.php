
<html>
<body>

<!--<form action="available.php method="POST">
input tpye="submit" name="submit" 
</form>-->

<table border = "1" align = "center" width = "50%" >
<td width="50px">firstName</td>

<td width="50px">middleName</td>
<td width="50px">LastName</td>

<td width="50px">phoneNo</td>
<td width="50px">Email</td>

<td width="50px">username</td>
<td width="50px">password</td>

</tr>

<?php
require_once "connection.php";
$sql='SELECT * FROM register,login where login.uid=register.uid';
//excute query
	    $records = $connect->query($sql);
 	while($row= $records->fetch_assoc()){
     echo "<tr>";
echo"<td>".$row['firstName']."</td>";
  echo"<td>".$row['middleName']."</td>"; 
  echo"<td>".$row['lastName']."</td>"; 
echo"<td>".$row['phoneNo']."</td>";
  echo"<td>".$row['email']."</td>"; 
echo"<td>".$row['username']."</td>";
  echo"<td>".$row['password']."</td>"; 
 echo "</tr>";

}

	
?>
<tr width="50px" >
<td colspan="7">
<br><a href="welcomeadmin.php">Back</a>
</td>
</tr>
</table>
</body>
</html>
