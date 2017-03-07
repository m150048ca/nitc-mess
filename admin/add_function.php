<?php
$c = $_SESSION['contractor'];
function print_list()
{
	$list_all_stud = "SELECT ` student`.`sid`, ` student`.`name`, ` student`.`branch`,` student`.`sem`. from ` student`,mess,contractor  WHERE ` student`.`sid` = mess.sid AND mess.cid = '$c'";

	$list_result  =$conn->query($list_all_stud);

	if($list_result->num_rows>0){
		
		while($r = $list_result->fetch_assoc()){
			echo $r['sid'] . '<br/>';
			echo $r['name'] . '<br/>';
			echo $r['brach'] . '<br/>';
			echo $r['sem'] . '<br/>';
		}
	}	
}


?>