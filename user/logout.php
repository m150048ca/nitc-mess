<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['userType'])){
	
	session_destroy(); 
	
	unset($_SESSION['username']);
	unset($_SESSION['userType']);
	
	header('location:../index.php');
}


?>