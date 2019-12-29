
<html>
<body>

<form action="sample.php" method="POST">
<input type="text" name="username" />
<input type="submit" name="book" value="book"/>
</form>



<?php
session_start();
require_once "connection.php";
if(isset($_POST['book'])){
$username=htmlspecialchars($_POST['username']);

$sql="SELECT * FROM available where avail=1 ";
$connect->query($sql);
$records = $connect->query($sql);
$row= $records->fetch_assoc();
$id=$row['id'];
$sql1="INSERT INTO reserve(id,username)VALUES ('$id','$username')";
$connect->query($sql1);
@header("Location:test2.php");
exit();
}



?>
</table>
</body>
</html>
