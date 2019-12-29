<?php
require 'connection.php';
session_start();
//$_SESSSION['username']=$username;
echo '<br><a href="test.php">Check for space</a>';
echo '<br><a href="update_account.php">Change password</a>';
echo '<br><a href="delete.php">Delete Account</a>';
echo '<br><a href="index.html?action=logout">logout</a>';

?>  
