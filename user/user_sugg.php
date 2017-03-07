<?php
include('connection.php');

	if(isset($_POST['save_pref']))
		{
			$a=$_SESSION['admin'];
			$b=$_POST['mess_name'];
			$update ="select ` student` SET `messname`='$b' WHERE `sid` ='$a'";
			
			
			$run=$conn->query($update);
			if($run)
			{
				echo '<script>alert("messname updated");</script>'; 
			}
			else
			{
				echo '<script>alert("messname  not updated");</script>';
			}
			
		}
		//unset($a);
	



?>