<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 $sql="SELECT * FROM users";
 $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| Users </title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
 <link href="css/font-awesome.css" rel="stylesheet"> 
 <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
 </head>
<body>
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
                                    <li><a href="adprofile.php">Profile</a></li>
                                    <li><a href="adbookingrequest.php">Booking Requests</a></li> 
                                    <li><a href="adusers.php">Users</a></li>                                  
                                    <li><a href="adchange-password.php">Change Password</a></li>  
                                    <li><a href="index.php">Logout</a></li>                                             
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
				<h2>Details of Users</h2>
			</div>
		</div>
	</div>
 
	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				
				<p class="wow fadeInUp animated" data-wow-delay=".5s">List of Users.</p>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                         <th>Cutomer Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                         
                                       </tr>
                                </thead>
                                <tbody>
									<?php
 										
   											while($row=mysqli_fetch_assoc($result))
											{     
												$id = $row['id'];
                                                $fname = $row['fname'];
                                                $mobno = $row['mobno'];         
                                                $email= $row['email'];
                
												?>
                                    			<tr>                                        			
                                    				<td class="font-w600"><?php echo $id ?></td>
                                         			<td class="font-w600"><?php echo $fname ?></td>
                                        			<td class="font-w600"><?php echo $mobno ?></td>
                                        			<td class="font-w600"><?php echo $email ?></td>
                                             		 
                                        		</td>
                                        		 
                                    			<?php
                                     		} 
                                    ?> 
                         		</tbody>
                            </table>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	 
</body>	
</html> 