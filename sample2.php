
<html>
<body>

<form action="sample2.php" method="POST">
<input type="number" name="username" />
<input type="submit" name="confirm" value="confirm"/>
</form>



<?php
session_start();
require_once "connection.php";
if(isset($_POST['confirm'])){
$username=htmlspecialchars($_POST['username']);
$result=mysqli_query($connect,'SELECT * FROM reserve where username="'.$username.'"');
	    if (mysqli_num_rows ( $result)==1) {
	$_SESSSION['username']=$username;
$row= $result->fetch_assoc();
$id=$row['id'];
$sql1="INSERT INTO confirm(id,username)VALUES ('$id','$username')";
if($connect->query($sql1)){
@header("Location:test3.php");
exit();
}
else{
	echo 'error';
}
}
}


?>

</table>
</body>
</html>
