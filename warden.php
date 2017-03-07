<?php
include('connection.php');

	
			//$update ="SELECT * FROM `bill`  ";
			$sql ="SELECT * FROM `bill` ";
			$run= $conn->query($sql);

			echo '<div class="col col-sm-12 pull-right"><h2 align="center">Student Profile</h2><table class="table">';
			echo"<tr><th>bref_no:</th><th>sid:</th><th>extra_charge:</th><th>date:</th></tr>";
				while($row=$run->fetch_assoc())
				{
					
				echo "<tr>";
				echo "<td>".$row['bref_no']."</td>";
				echo "<td>".$row['sid']."</td>";
				
				echo "<td>".$row['extra_charge']."</td>";
					echo "<td>".$row['date']."</td>";
				
				echo "</tr>";
				
			
				}
			echo"</table></div>";	
//}   


?>


