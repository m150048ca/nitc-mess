<!DOCTYPE html>
<html >
  <head><style>
  #bor{
	  border-color:blue;
	  
  }</style>
    <meta charset="UTF-8">
    <meta>
    <link href="assets/icons-64/home-2.png" rel="icon">
    <title>NITC MESS</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/external.css" rel="stylesheet">
    <script src="js/prefixfree.min.js"></script> 
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>	
  
  <script>
	$(document).ready(function(){
		$("a[href*='#']:not([href='#'])").click(function(){
			var target = $(this.hash);
			target = target.length ? target : $('[name]=' + this.hash.substr(1) + ']');
			if(target.length)
			{
				$('html,body').animate({
					scrollTop : target.offset().top
				},1000);
			return false; 
			}
		});
	});
	
  </script>
  <style>
 
  </style>
  </head>
  <body>
  <div id="loading"></div>
<header ><img src="assets/NITC.jpg" height="300" class="img " alt="top image" ></header>

<div id="row overlap"><div id="top"></div>
<nav class="main-nav navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NITC</a>
    </div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home">&ensp;</span>Home</a></li>
            <li><a href="index.html#about-nitc"><span class="glyphicon glyphicon-question-sign">&ensp;</span>About NITC</a></li>
            			
						
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home">&ensp;</span>Mess <span class="caret"></span></a>
			  <ul class="dropdown-menu">
			
				<li><a href="messa.php">Mess A</a></li>
				<li><a href="messb.php">Mess B</a></li>
				<li><a href="messc.php">Mess C</a></li>
				<li><a href="messe.php">Mess E</a></li>
				<li><a href="messf.php">Mess F</a></li>
				<li><a href="messg.php">Mess G</a></li>
				<li><a href="messpg1.php">Mess PG-I</a></li>
				<li><a href="messpg2.php">Mess pg-II</a></li>
				<li><a href="messmba.php">Mess MBA</a></li>
				<li><a href="messinternational.php">Mess INTERNATIONAL</a></li>
				<li><a href="messmega.php">Mess MEGA</a></li>
				<li><a href="messladies.php">Mess LADIES</a></li>
			
			  </ul>
			</li>

			<li class="dropdown">
			  <a href="index.php"><span class="glyphicon glyphicon-log-in">&ensp;</span>Log In<span class="caret"></span></a>

			</li>
            <li><a href="#footer"><span class="glyphicon glyphicon-info-sign">&ensp;</span>About Us</a></li>	
		  </ul>
	</div>	
  </div>
</nav>




<div class="main"></div>
<div class="row" style="width:103%;">
	<h3 id="text" align="center"></h3>
</div>

<div class="row">
	<div class="col col-sm-3">
		<div class="panel panel panel-primary">
			  <div class="panel-heading"><h4 align="center">Quick Navigation</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">
				<li class="list-group-item"><span class="glyphicon glyphicon-home">&nbsp;</span><a href="http://nitc.ac.in">Nitc Home page</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-lock">&nbsp;</span><a href="">Nitc Library</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-globe">&nbsp;</span><a href="">Eduserver</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-user">&nbsp;</span><a href="#">Admin Panel</a></li>
				<li class="list-group-item"><span class="glyphicon glyphicon-ok">&nbsp;</span><a href="#">Check Payment Status</a></li>
               	<li class="list-group-item"><span class="glyphicon glyphicon-education">&nbsp;</span><a href="#">Student's Profile </a></li>
			   </ul>
			  </div>
			   
		</div>
		<div class="panel panel-success">
			  <div class="panel-heading"><h4 align="center">Contact</h4></div>
			  <div class="panel-body"> 
				<ul class="list-group">

					<li class="list-group-item"><a href="messd.php#hofficewarder">Hostel Office Wardern</a></li>
					<li class="list-group-item"><a href="messd.php#about">Contact webmaster </a></li>
					<li class="list-group-item"><a href="messd.php#time">Time table</a></li>
					<li class="list-group-item"><a href="messd.php#menu">Menu-List</a></li>
				  </ul>
			  
			  </div>
				  
		</div>
		
		<div class="panel panel-info">
			  <div class="panel-heading">NOTIFICATION</div>
			  <div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item"><a href="files/holidays.pdf">Check Holidays</a></li>
					<li class="list-group-item"><a href="files/fee_hostel.pdf">NITC hostel Fee Structure 2016</a></li>
					<li class="list-group-item">list item</li>
					<li class="list-group-item">Plist item</li>
					<li class="list-group-item">list item</li>
				  </ul>

			  </div>
				  
		</div>
		
		
		
						
	</div>
	<div class="col col-sm-6">
		<div class="row"><!-- About NITC -->
        	<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
        		<div id="about-nitc">
                <h3 align="center">Welcome to D mess</h3>
        		
                <br/>
                
                </div>
        
        	</div>
        </div><!-- Aboutends here -->
		<div class="row">

		</div>
		<br/>
		<div class="row">

			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12" >
			
			</div>	
		</div>	<!-- form part ends here -->
		<div class="row"><!-- Content Part starts from here -->
			<div class="col col-sm-12 col-lg-12 col-xl-12 col-md-12">
				
                <section>
		          	<h2 class="h2" align="center"><abbr title="a general description About Nitc Hodtels">NITC Hostels</abbr></h2>

                    <p class="lead">National Institute of Technology Calicut Hostels</p>
                    
                     <img src="assets/mess_images/d-mess.jpg"  id="mess_img" alt="paralex image " class="img img-responsive img-thumbnail" width="100%">
					
					<div id="hofficewarder">
                    <h2>Contact Hostel  D Warden Office</h2>
					
                   
                    <div class="col col-sm-6">
                    
                    	<h3 > Warden</h3>
                    	<p> Dr.RamaSubrahmanyamKomaragiri. ECED.</p>
                    
                    
                        <p>0495 2286711(O), 9446063327</p>
                        <p>Email: rama@nitc.ac.in</p>
                    </div>
					<div class="col col-sm-6">
                    
                    	<h3 > Warden</h3>
                    	<p> Asso. Prof. ECED Mr.S.Krishnan </p>
                          <p> 9446063327</p>
                        <p>Email: krishn@nitc.ac.in</p>
                    </div>
                  </div> 

                   <br/>
                  <div id="con">				   
                    <h3>  D Hostel contractor </h3>
                    
                    <div class="col col-sm-6">
                    
                    	<p>mr.satendra sharma</p>
                    
                         <p></p>
                        <p>9761456789</p>
                        
                     <p> Email:satn@nitc.ac.in</p>
                    </div>
                    
					 <div class="col col-sm-6">
                    
                    	<p>mr.manoj sharma</p>
                    
                    
                        <p>9763456789</p>
                        <p> Email: man@nitc.ac.in</p>
                    
                    </div>
					</div>
                    </section>
                <div id="time">
					<br/>
					<br/>
					<br/>
					<br/>
					<h3>  D mess time table </h3>
							
					<table border class="table table-hover">
					   <tr><th> 7:00-9:30</th><th> 11:45-2:00</th><th> 4:00-5:30</th><th> 7:00-9:00</th></tr>
					   <tr><td>Breakfast</td><td>Lunch</td><td>Tea</td><td>Dinar</td></tr>
				   </table>
				   
            </div>
			
			
			   <div id="menu">
					<br/>
				
	
					<h3>  D Mess Menu-List </h3>
									
					<table border class="table table-hover">
					     <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Tea</th><th>Dinar</th></tr>
						<tr><th>Sunday</th><td>puri,sabji,bread,jaim</td><td>Biriyani,paneer</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Monday</th><td>bread,jaim,amlet</td><td>rice,chpati,daal,chiken egg</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Tuesday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Wednesday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>thursday</th><td>puri,sabji</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Friday</th><td>puri,sabji</td><td>Biriyani,paneer</td><td>Tea,coefie,cake</td><td>chpati,sabji,chiken,rice</td></tr>
						<tr><th>Saturday</th><td>allu,pratha</td><td>rice,daal,sabji,amlet</td><td>Tea,coefie,cake</td><td>chpati,sabji,egg,rice</td></tr>
				   </table>
            </div>
			</div>
			
		</div><!-- Content Part ends here -->	
	</div>
	
	<div class="col col-sm-3">
		<div class="mess-list col-md-12 col-lg-12 ">          
            <div class="panel panel panel-primary">
			  <div class="panel-heading"><h4 align="center">Click on Mess Image to visit</h4></div>
			  <div class="panel-body"> 
		        <div class="mess col-xs-6"> 
                	
                    <p id="mess_name1"><a href="messa.php">visit mess A</a></p>
                    <img src="assets/mess_images/a-mess.jpg"  id="mess_img" alt="paralex image ">
                    <br/>
                
                </div>
                
                
              <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messb.php">visit mess B</a></p>
                    <img src="assets/mess_images/b-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messc.php">visit mess C</a></p>
                    <img src="assets/mess_images/c-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messd.php"> visit mess D</a></p>
                    <img src="assets/mess_images/d-mess.jpg"  id="mess_img">
                </div>
                
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messe.php">visit mess E</a></p>
                    <img src="assets/mess_images/e-mess.jpg"  id="mess_img">
                </div>
               
                <div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messf.php">visit mess F</a></p>
                    <img src="assets/mess_images/f-mess.jpg"  id="mess_img">
                </div>
				<div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messg.php">visit mess g</a></p>
                    <img src="assets/mess_images/g-mess.jpg"  id="mess_img">
                </div>
				<div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messpg1.php">visit mess PG-I</a></p>
                    <img src="assets/mess_images/pg-1.jpg"  id="mess_img">
                </div>
				
				<div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messpg2.php">visit mess PG-II</a></p>
                    <img src="assets/mess_images/pg2.jpg"  id="mess_img">
                </div>
				
				<div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messmba.php">visit mess MBA</a></p>
                    <img src="assets/mess_images/mba.jpg"  id="mess_img">
                </div>
				
				<div class="mess col-xs-6">
                    <p id="mess_name1"><a href="messladies.php">visit mess GIRLS</a></p>
                    <img src="assets/mess_images/girls.jpg"  id="mess_img">
                </div>
              
              </div> 
			</div>   
            
		</div>	
	</div> <!-- Mess List Ends Here -->
</div> <!-- left right ans right panel ends here -->
</div> <!-- overlap class ends here -->  
	
 
<div class="row">
<div id="about" style="background-color:#EF15AA; color:#000000;">
<div class="footer" id="footer"><a href="index.html#top" ><br/><h5 align="center">BACK TO TOP</h5> </a></div>
		<div class="foot" id="social">
            <a href="#"><img src="assets/fb.png"  class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/gp.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/sk.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/tt.png" class="img-circle img-thumbnail"></a>
            <a href="#"><img src="assets/wt.png" class="img-circle img-thumbnail"></a>
	   </div>
</div>
</div><!-- footer pf the page ends here -->
<script type="text/javascript">
var s ="Welcome to mess Managment System ......! ! ";
var t=0;
function type()
{     
	document.getElementById('text').innerHTML += s[t];
	t++;
	if(t>s.length-1) 
	{
		//t=0; if required later i can change it 
		//document.getElementById('text').innerHTML=" ";
		clearInterval(typing);
	}	
}
typing=setInterval(type,200);
</script>
    <script src="js/sticky-index.js"></script>
	<script src="js/bootstrap.js"></script>
  </body>
</html>