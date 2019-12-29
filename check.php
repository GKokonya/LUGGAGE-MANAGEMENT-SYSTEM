
<?php
require_once "connection.php";
//$sql="SELECT * FROM available";
$sql="SELECT COUNT(*) FROM  available";
 $records=$connect->query($sql);
echo $records;  
/*excute query
	    $records = $connect->query($sql);
 
		while($row= $records->fetch_assoc()) {
     echo "<tr>";

	 if($row['avail']==0){
 $sql="SELECT COUNT(*) FROM  available";
    $records1 = $connect->query($sql);
		echo "<td>". $records1."</td>";		
	 echo "</tr>";
}
}
*/
?>


