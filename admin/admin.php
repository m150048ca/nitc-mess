<?php
session_start();
include('../connection.php');
	if(isset($_SESSION['contractor'])){
		
		$newC =$_SESSION['contractor'];
		//echo $_SESSION['contractor'];
		
	}else{
		
		header("location:../index.php");
		
	}
	
	if(isset($_POST['search_student']))
	{
		if($_POST['seach_stu'] == ""){
			
			echo '<script>alert("Please Enter Student Id ");</script>';
				
		}else{
			
			$s =$_POST['seach_stu'];
			$sexrch_student ="select sid from mess, contractor where mess.cid = '$newC' and mess.cid=contractor.cid and mess.sid ='$s'";
			$sexrch_student_result =$conn->query($sexrch_student);
			
			if($sexrch_student_result->num_rows>0){
				
				echo '<script>alert("Student Is Registered In Your Mess ");</script>';	
			}else{
				echo '<script>alert("Student Is Not Registered In Your Mess ");</script>';	
				
				}		
			
		}							
		
									
	}
	
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
	<link href="../assets/icons-64/home-2.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/animation.css" rel="stylesheet">
	<style>
	.sidebar{background-color:#B8AFAF;}	
	</style>	
  </head>
  <body>
  <nav class="main-nav navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">&nbsp;NITC</a>
      
      <div id="circle"></div>
       <div id="rev_circle"></div>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			<li><a href="admin.php"><span class="glyphicon glyphicon-home">&ensp;</span>Home</a></li>
            <li><a href="#footer"><span class="glyphicon glyphicon-info-sign">&ensp;</span>About Us</a></li>	
		  	<li><a href="logout.php"><span class="glyphicon glyphicon-info-sign">Logout</a></li>
          </ul>
	</div>	
  </div>
</nav>


  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo" style="margin-left:3%;">
	                 <h1><a>NITC MESS CONTRACTOR PAGE </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
					<br/>
	                  <form class="input-group form" action="admin.php" method="POST">
	                       <input type="text" name="seach_stu" class="form-control" placeholder="Enter Student id ...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="submit" name="search_student">Search</button>
	                       </span>
	                  </form>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
						<br/>
	                      <li class="dropdown" style="list-style-type:none;">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                  
	              
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
			
                <ul class="nav">
                    <!-- Main menu -->
					
					
					
					
					
                    <li class="current"><a href="admin.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="admin.php?list_student"><i class="glyphicon glyphicon-calendar"></i>List Of Student </a></li>
                   
                    <li><a href="admin.php?comp"><i class="glyphicon glyphicon-list"></i>Show Complaints </a></li>
                    <li><a href="admin.php?feedback"><i class="glyphicon glyphicon-record"></i>Show feedbacks</a></li>
                    <li><a href="admin.php?ball"><i class="glyphicon glyphicon-pencil"></i> Bill of Students </a></li>
                    <li><a href=""><i class="glyphicon glyphicon-tasks"></i> MENU 5</a></li>
                 	
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title"><h2>Welcome Contractor  -<?php echo $_SESSION['contractor']; ?></h2></div>
							<br/>
                            Time is :
                            <span id="show_h"></span>:
                            <span id="show_m"> </span>:
                            <span id="show_s"></span>
							<hr>
						</div>
				<?php		
				if(isset($_GET['ball']))
				{	
				
				$sql = "SELECT mess.sid,mess.mcharge FROM mess";
				$result=$conn->query($sql);
				if($result->num_rows > 0)
				{    echo"Student_id  &nbsp&nbsp mess_bill<hr/>";
					while($row=$result->fetch_assoc())
					{
						echo" ".$row['sid']." &nbsp&nbsp  ".$row['mcharge']." <br/>" ;
					}
	
				}
				}
						
		?>				
						
		  				<div class="panel-body">
		  					<h3>User Feed Back   Goes Here</h3>
                            <?php 
							
								if(isset($_GET['feedback']))
								{

									$feed =  "SELECT c.sid,c.statement from feedback c,mess m where c.sid=m.sid and m.cid='$newC'";

									$feed_res =$conn->query($feed);

									
									echo '<table class="table table-hover">';
									echo '<tr><th>Student ID</th><th>Student Feedback </th></tr>';	
									if($feed_res->num_rows>0)
									{
										while($er = $feed_res->fetch_assoc())
										{

										echo '<tr><td>'. $er['sid'] . '</td>';
										echo '<td>' .$er['statement'] . '</td></tr>';

										}	
									}else{

										echo "No Feedback given  ";
									}
									
								}
								
								if(isset($_GET['comp'])){
									
									$complaint = "SELECT c.sid,c.statement from complaint c,mess m where c.sid=m.sid and m.cid='$newC'";
									
									$comp_res =$conn ->query($complaint); 
									if($comp_res->num_rows >0){
										
										echo '<table class="table table-hover">';
										echo '<tr><th>Student ID</th><th>Student Complaint </th></tr>';
										while($rt =$comp_res->fetch_assoc())
										{
											
											echo '<tr><td>' .$rt['sid'] . '</td>';
											echo '<td>' .$rt['statement'] . '</td></tr>'; 	
											
										}	
										echo '</table>';
										
									}else{
											
										echo '<div class="alert alert-warning alert-dismissible" role="alert">
  												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  												<span aria-hidden="true">&times;</span>
  												</button>
  											<h5 align="center">There Is No Complaint</h5>
												</div>';	
											
									}
								}
								
								
								if(isset($_GET['ball'])){
									
									
									$sql = "SELECT bill.extra_charge from bill WHERE sid=\"m150479ca\"";
									
								}
								
                            
                            ?>
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					
				  			<div class="content-box-large box-with-header">
				  				
					  			<h3></h3>
								<?php
								if(isset($_GET['list_student'])){
									
									$search_student_cont ="SELECT ` student`.sid,` student`.`name`,` student`.branch,` student`.`sem` from ` student`,mess,contractor  where ` student`.sid=mess.sid and mess.cid =contractor.cid and mess.cid ='$newC'";
									
									$search_re = $conn->query($search_student_cont);
									if($search_re ->num_rows>0)
									{
										echo '<table class="table table-hover">';
										echo '<tr><th>Student ID</th><th>Student Name</th><th>Branch</th><th>Current Semester</th></tr>';
										while($abc =$search_re->fetch_assoc()){
											
											echo '<tr><td>' .$abc['sid'] . '</td>';
											echo '<td>' .$abc['name'] . '</td>';
											echo '<td>' .$abc['branch'] . '</td>';
											echo '<td>' .$abc['sem'] . '</td></tr>';	
										}
										echo '</table>';
									}
								}
								unset($search_student_cont);
								unset($search_re);
								unset($abc);
			
								?>
                                
                                <br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016 <a href='#'>NITC MESS </a>
            </div>
            
         </div>
      </footer>
  <script>
  
  function show_time(){
	var nt =new Date();
	document.getElementById('show_h').innerHTML =nt.getHours();
	document.getElementById('show_m').innerHTML =nt.getMinutes();
	document.getElementById('show_s').innerHTML =nt.getSeconds();

}
setInterval(show_time,1000);
  </script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>