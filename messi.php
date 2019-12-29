
<html>
<body>

<table border = "1" align = "center" width = "50%" >
<tr width="50px">
<td width="50px">location status</td>
<td width="50px">
<div class="toolbar">
<a href="messi.php?id=<?php echo $row['id'];?>">Book</a>
</div>
</td>

</tr>

<?php
session_start();
require_once "connection.php";
$sql="SELECT * FROM available";

//excute query
	    $records = $connect->query($sql);
 
		while($row= $records->fetch_assoc()) {
     echo "<tr>";
	 if($row['avail']==0){
		echo "<td>availble</td>";		
	 }else{
	 echo "<td>Reserved</td>";
	 }
	 if($row['avail']==0){
                  
		 echo'<td></a><a href = "sample.php">Book</a></td>';
          
	 }else{
	 echo "<td>Closed</td>";
	 }
	 echo "</tr>";

}
?>

</table>
</body>
</html>
