<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| About </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
 
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
		<div class="header">
    <div class="container">
        <div class="header-top-grids">
            <div class="agileits-logo">
                <h1><a href="index.php">OBBS </a></h1>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">                                
                    </div>
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav>
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>                                   
                                    <li><a href="mail.php">Mail Us</a></li>                                 
                                </ul>
                            </nav>
                        </div>
                    </nav>
               </div>
            <br>
                         
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
			<div class="wthree-heading">
				<h2>Services</h2>
			</div>
		</div>
	</div>
	 
	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				
				<p class="wow fadeInUp animated" data-wow-delay=".5s">List of services which is prvided by us.</p>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Package Name</th>
									<th>Description</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							 	<tr>
									<td>1</td>
									<td>Wedding DJ	</td>
									<td>we install the DJ equipment before your ceremony or after your wedding breakfast</td>
									<td>	$800</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td> 
								</tr>  
								<tr>
									<td>2</td>
									<td>Party DJ	</td>
									<td>we install the DJ equipment 1 hour before your selected event start time</td>
									<td>	$700</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td>
 								</tr>  
								<tr>
									<td>3</td>
									<td>Ceremony Music</td>
									<td>Our ceremony music service is a popular add on to our wedding DJ stay all day hire.</td>
									<td>	$600</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td>  
								</tr>  
								<tr>
									<td>4</td>
									<td>Photo Booth Hire</td>
									<td>early equipment setup included</td>
									<td>	$650</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td>  
								</tr>  
								<tr>
									<td>5</td>
									<td>Karaoke Add-on	</td>
									<td>Karaoke is a great alternative to a disco. It’s perfect for staff parties and children’s parties.</td>
									<td>	$600</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td>  
								</tr>  
								<tr>
									<td>6</td>
									<td>Uplighters</td>
									<td>Uplighters are bright lighting fixtures which are installed on the floor and shine a vibrant wash of colour over the walls of your venue</td>
									<td>	$500</td>
									<td><a href="login.php" class="btn btn-default">Book Services</a></td>  
								</tr>  
							</tbody>
						</table>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>	
</html>