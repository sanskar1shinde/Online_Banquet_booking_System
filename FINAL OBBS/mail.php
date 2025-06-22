<?php
include('includes/dbconnection.php');
session_start();
 if (isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO messages(name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($sql>0) 
    {
        echo "<script>alert('Your message was sent successfully!.');</script>";
				echo "<script>window.location.href ='mail.php'</script>";
    } 
    else 
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
	}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Mail</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 

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
				<h2>Contact</h2>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Get in touch</h3>
						<p>Pellentesque eget mi nec est tincidunt accumsan. Proin fermentum dignissim justo, vel euismod justo sodales vel. In non condimentum mauris. Maecenas condimentum interdum lacus, ac varius nisl dignissim ac. Vestibulum euismod est risus, quis convallis nisi tincidunt eget. Sed ultricies congue lacus at fringilla.</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
 							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>7456734347</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span>info@gmail.com</span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>D-204, Hole Town South West,Delhi-110096,India</span></li> 
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="mail.php" method="post">
							<input  type="text" placeholder="Full Name " name="name" type="text" required style="text-decoration-color: green;">
							<input  placeholder="Email" name="email" type="email" required>
							<textarea name="message" placeholder="Message" required></textarea>
							<button class="btn1" name="submit">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</body>	
</html>