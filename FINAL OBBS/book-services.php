<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
	$user_id = $_SESSION['user_id'];

	$booking_from = $_POST['bookingfrom'];
	$booking_to = $_POST['bookingto'];
	$event_type = $_POST['eventtype'];
    $_SESSION['event_type']=$event_type;
	$no_of_guests = $_POST['nop'];
	$message = $_POST['message'];

 	$sql = "INSERT INTO booking(userid, bookingfrom, bookingto, EventType, numberofguest, message)
        VALUES ('$user_id', '$booking_from', '$booking_to', '$event_type', '$no_of_guests', '$message')";

	if (mysqli_query($conn, $sql)) 
	{
    	echo "Booking successful!";
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Book Services</title>
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
</div>			<div class="wthree-heading">
				<h2>Book Services</h2>
			</div>
		</div>
	</div>
 	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Book Services </h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form method="post">
							<div class="form-group row">
                                <label class="col-form-label col-md-4">Booking From:</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" style="font-size: 20px" required="true" name="bookingfrom">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Booking To:</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control" style="font-size: 20px" required="true" name="bookingto">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Type of Event:</label>
                                    <div class="col-md-10">
                                       <select type="text" class="form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option>
							 	<?php
                    				$result =$value = mysqli_query($conn,"SELECT id,concat( EventType,'---',fee) AS Type,fee from eventtype");;
                   
                    				while($row=mysqli_fetch_assoc($result))
                    				{
                         
                        				?>
                            				<option value="<?php echo $row['EventType']?>"> <?php echo $row['Type']?></option>
                        				<?php
                    				}

               						?>
								 </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Number of Guest:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" style="font-size: 20px" required="true" name="nop">
                                    </div>
                                </div>
                                                 <div class="form-group row">
                                    <label class="col-form-label col-md-4">Message(if any)</label>
                                    <div class="col-md-10">
                                        <textarea  class="form-control"  required="true" name="message" style="font-size: 20px"></textarea> 
                                    </div>
                                </div>
                                                
                                <br>
                                    <div class="tp">
                                                
                                        <button type="submit" class="btn btn-primary" name="submit">Book</button>
                                    </div>
                                </form>

					</div>
				</div>				
				<div class="clearfix"> </div>
			</div>		
		</div>
	</div>	 
</body>	
</html> 