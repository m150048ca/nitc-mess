<?php

if(isset($_POST['i_forgotten']))
{
		

		include('connection.php');

		$a = $_POST['user_type'];
		$b = $_POST['fusername'];

		if($a == "student")
		{
			$student_search ="select password from ` student` where sid = '$b'";
			$student_search_result = $conn->query($student_search);
			if($student_search_result ->num_rows ==1)
			{
				while($r = $student_search_result->fetch_assoc())			
				{

					echo '<script>alert ("Please Note Down Your Password is ' . $r['password'] . '");</script>'; 
					
					echo '<br/><a href="index.php">Back To Login </a>';
				}			
				$conn->close();

			}else{
						
					echo '<script> window.alert("Cant find Student  ..!");</script>';	
			}
						
				
		}


		if($a == "contractor")
		{
			$contractor_search = "SELECT mob FROM contractor WHERE cid ='$b'";
			$contractor_search_result = $conn->query($contractor_search);
			if($contractor_search_result ->num_rows ==1)
			{
				while($r = $contractor_search_result->fetch_assoc())			
				{

					echo '<script>alert ("Please Note Down Your Password is ' . $r['mob'] . '");</script>'; 
					echo '<br/><a href="index.php">Back To Login </a>';
				}			
				$conn->close();

			}else{
						
					echo '<script> window.alert("Cant find Contractor   ..!");</script>';	
			}
						
		}
}
?>