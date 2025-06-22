<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| Booking History </title>
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
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="booking-history.php">Booking History</a></li> 
                                    <li><a href="book-services.php">Book service</a></li>                                  
                                    <li><a href="change-password.php">Change Password</a></li>  
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
				<h2>Booking History</h2>
			</div>
		</div>
	</div>
 
	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				
				<p class="wow fadeInUp animated" data-wow-delay=".5s">List of booking.</p>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Booking ID</th>
                                        <th>Cutomer Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Booking Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                       </tr>
                                </thead>
                                <tbody>
									<?php
										$uid=$_SESSION['user_id'];
										$sql="SELECT * FROM users JOIN booking ON users.id = booking.userid WHERE users.id='$uid'";
 										$result = mysqli_query($conn, $sql);
  											if(mysqli_num_rows($result) > 0)
											{     
												$row = mysqli_fetch_assoc($result);         
												?>
                                    			<tr>                                        			
                                    				<td class="font-w600">
                                        			<td class="font-w600"><?php echo $row['bookingid'];?></td>
                                        			<td class="font-w600"><?php echo $row['fname'];?></td>
                                        			<td class="font-w600"><?php echo $row['mobno'];?></td>
                                        			<td class="font-w600"><?php echo $row['email'];?></td>
                                        			<td class="font-w600">
                                            		<span class="badge badge-primary"><?php echo $row['bookingdate'];?></span>
                                        		</td>
                                        		<?php if($row['status']=="")

                                        			{ 
                                        				?>

                     										<td class="font-w600"><?php echo "Not Updated Yet"; ?></td>
														<?php 
													} 
													else 
													{ 
														?>
                                        					<td class="d-none d-sm-table-cell">
                                            					<span class="badge badge-primary"><?php echo $row['status'];?>
                                               					</span>
                                       						 </td>
														<?php 
													} 
												?>
												
												 
                                         		<td class="d-none d-sm-table-cell"><a href="view-booking-detail.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    			</tr>
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