<?php
include('includes/dbconnection.php');
session_start();
 
if(isset($_POST['login'])) 
{  
    $email = $_POST['email'];
    $password = $_POST['password'];

     
    if(!empty($email) && !empty($password))
    {
         
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

       
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) 
        {  
          $row = mysqli_fetch_assoc($result);
          $_SESSION['user_id'] = $row['id'];  
          header("Location: logged.php");  
        } 
        else 
        {  
            $error_msg = "Invalid email or password";
        }
    } 
    else 
    {  
        $error_msg = "Please enter your email and password";
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
			<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
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
						<h3>Login to User Panel</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post" name="login">
							<input type="email" name="email" placeholder="E-mail" required="true">
							<input type="password" name="password" placeholder="Password"  required="true">
							<br>
							<div class="forgot">
              <a href="forgot-password.php">Forgot Password?</a>
              </div>
              <br>
						  <button class="btn1" name="login">LOGIN NOW</button>
						</form>
					</div>
				</div>
				<br>
				<div class="col-md-6 contact-form-right">
					 	<div class="forgot">
            	<a href="signup.php">Register Yourself</a>
            </div>
					</div>
				<div class="clearfix"> </div>
			</div>
</body>	
</html>