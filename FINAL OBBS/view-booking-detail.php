<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| View Booking </title>
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
    	<h2>View Booking</h2>
	</div>
</div>
</div>
	 <div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">				
				<p class="wow fadeInUp animated" data-wow-delay=".5s">View Your Booking Details.</p>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						  <?php
                  $uid=$_SESSION['user_id'];
									$sql="SELECT * FROM users JOIN booking ON users.id = booking.userid WHERE users.id='$uid'";
 									$result = mysqli_query($conn, $sql);
  								if(mysqli_num_rows($result) > 0)
									{     
										$row = mysqli_fetch_assoc($result);  
									  ?>
                      <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                  	    <tr>
                          <th colspan="5" style="text-align: center;font-size: 20px;color: blue;">Booking Number: <?php echo $row['bookingid'];?>
                          </th>
                        </tr>
                    	  <tr>
    											<th>Client Name</th>
    												<td><?php  echo $row['fname'];?></td>
     													<th>Mobile Number</th>
    														<td><?php  echo $row['mobno'];?></td>
  											</tr>
  											<tr>
  											  <th>Email</th>
    												<td><?php  echo $row['email'];?></td>
     													<th>Booking From</th>
    												<td><?php  echo $row['bookingfrom'];?></td>
  											</tr>
  											<tr>
   												<th>Booking To</th>
    												<td><?php  echo $row['bookingto'];?></td>
    													<th>Number of Guest</th>
    												<td><?php  echo $row['numberofguest'];?></td>
 												  </tr>
 												<tr>
    									    <th>Event Type</th>
    											<td><?php  echo $row['EventType'];?></td>
    											<th>Message</th>
    											<td><?php  echo $row['message'];?></td>
  											</tr>
  											 
												<tr>
    
     										<th>Order Final Status</th>

    										<td>
    										<?php  $status=$row->Status;
    
												if($row['status']=="Approved")
												{
 													 echo "Approved";
												}

												if($row['status']=="Cancelled")
												{
 														echo "Cancelled";
												}	
												if($row['status']=="")
												{
  												echo "Not Response Yet";
												}
												;?>
													
												</td>
												<th >Admin Remark</th>
    											<?php 
    											if($row['status']=="")
    											{ 
    												?>
                        			<td><?php echo "Not Updated Yet"; ?></td>
														<?php 
													} 
													else 
													{ 
														?>
														  <td><?php  echo $row['remark'];?></td>
                  					<?php 
                  				} 
                  				?>
 												 </tr>
 												 <?php
 										}
 							?>

</table> 
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>	
</html> 