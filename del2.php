<form method="POST" action="del.php">
<input type="number" name="username" / >
<input type="submit" name="del" value="remove"/>
</form>

<?php
session_start();
require 'connection.php';;
if(isset($_POST["del"])){
$username=htmlspecialchars($_POST['username']);
	    $records = $connect->query($sql);
      $usernam = htmlspecialchars ($_POST["username"]);
    $sql='DELETE FROM reserve where username="'.$username.'"';
$connect->query($sql);
$sql='DELETE FROM confirm where username="'.$username.'"';
if ($connect->query($sql) === TRUE) {
@header("Location:test.php");
exit();
} else {
echo "Error: " . $sql . "<br>" . $connect->error;
}



}

?>
