<?php
session_start();
$_SESSION = array(); 			//unset all session variables
session_destroy();
header("location:index.php");	//redirect to home page
?>