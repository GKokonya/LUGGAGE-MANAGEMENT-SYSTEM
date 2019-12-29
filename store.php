
<html>
<body>

<table border = "1" align = "center" width = "50%" >
<tr width="50px">
<td width="50px">location</td>
<td width="50px">starttime</td>
<td width="50px">endtime</td>
</tr>

<?php
require_once "connection.php";
$sql="SELECT * FROM store ORDER BY id";

//excute query
	    $records = $connect->query($sql);
 
		while($row= $records->fetch_assoc()) {
     echo "<tr>";

		echo "<td>".$row['id']."</td>";	
                echo "<td>".$row['starttime']."</td>";
                echo "<td>".$row['endtime']."</td>";	

	 echo "</tr>";

}
?>

</table>
</body>
</html>
