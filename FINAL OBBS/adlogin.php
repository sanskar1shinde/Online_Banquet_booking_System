<?php
session_start();
include('includes/dbconnection.php');
if(isset($_POST['login'])) 
{  
    $id = $_POST['id'];
    $password = $_POST['password'];

     
    if(!empty($id) && !empty($password))
    {
         
        $id = mysqli_real_escape_string($conn, $id);
        $password = mysqli_real_escape_string($conn, $password);

       
        $query = "SELECT * FROM admin WHERE id='$id' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) 
        {  
          $row = mysqli_fetch_assoc($result);
          $_SESSION['id'] = $row['id'];  
          header("Location: adlogged.php");  
        } 
        else 
        {  
            $error_msg = "Invalid ID or password";
        }
    } 
    else 
    {  
        $error_msg = "Please enter your ID and password";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Login</title>
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
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>                                   
                                    <li><a href="mail.php">Mail Us</a></li>
                                    <li><a href="adlogin.php">Admin</a></li>                                    
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
				<h2>Login</h2>
			</div>
		</div>
	</div>
 	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
				
					<div class="agileits-contact-address">
				<img src="images/5.jpg" alt="" height="500" width="500">
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Login to Admin Panel</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post" name="login">
							<input type="text" name="id" placeholder="Enter ID" required="true">
							<input type="password" name="password" placeholder="Password"  required="true">
							<br>
							<div class="forgot">
              <a href="adforgot-password.php">Forgot Password?</a>
              </div>
              <br>
						  <button class="btn1" name="login">LOGIN NOW</button>
						</form>
					</div>
				</div>
				<br>
				 
					</div>
				<div class="clearfix"> </div>
			</div>
</body>	
</html>