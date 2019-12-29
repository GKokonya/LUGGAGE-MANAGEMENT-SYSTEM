
<html>
<body>
<table border = "1" align = "center" width = "50%" >


<?php
session_start();
require_once "connection.php";
$sql="SELECT COUNT(*) id FROM available where avail=0";

//excute query
	    $records = $connect->query($sql);
 $row= $records->fetch_assoc();

		$row['id'];
$answer=$row['id'].'   '.'spaces are available';	
            	


?>
<tr width="50px">
<td width="50px">
<form action="sample.php">
<input type="button" value="<?php echo $answer ?>" onclick = "location.href='available.php';" />
</form>
</td>
<td>
Click to reserve
</td>
</tr>
<tr width="50px" >
<td colspan="3">
<br><a href="welcome.php">Back</a>
</td>
</td>
</tr>
</table>
</body>
</html>
