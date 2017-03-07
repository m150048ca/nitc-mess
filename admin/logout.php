<?php
session_start();

if(isset($_SESSION['contractor'])){
	
	unset($_SESSION['contractor']);
	session_destroy(); 	
	header('location:../index.php');
}


?>