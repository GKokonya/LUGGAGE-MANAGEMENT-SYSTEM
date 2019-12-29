<?php
// Declaring database constants
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "library";

//Create the database connection
$connect = new mysqli($servername, $serveruser, $serverpass, $dbname);

// Check connection
if ($connect->connect_error){
die("Connection Failed: ". $connect->connect_error);
}
//echo "connected succefully to ".$dbname

?>
