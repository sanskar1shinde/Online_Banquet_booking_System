<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
$id = $_SESSION['user_id'];

        $query = "SELECT id FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) 
        {
            $password = $_POST['newpassword'];
             $query = "UPDATE users SET password = '$password' WHERE id = '$id'";
            mysqli_query($conn, $query);
            echo "<script>alert('Password updated successfully.'); window.location.href='logged.php';</script>";
        }
        else 
        {
            echo "<script>alert('Please Enter the valid ID'); window.location.href= 'logged.php';</script>";
        }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Change Password</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
 <link href="css/font-awesome.css" rel="stylesheet"> 
 <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
 
 
<script>
function checkpass() 
{
  var currentpassword = document.forms["myform"]["currentpassword"].value;
  var newpassword = document.forms["myform"]["newpassword"].value;
  var confirmpassword = document.forms["myform"]["confirmpassword"].value;
  if (currentpassword == "" || newpassword == "" || confirmpassword == "") 
  {
    alert("Please fill out all fields.");
    return false;
  }
  if (newpassword != confirmpassword) 
  {
    alert("New password and confirm password do not match.");
    return false;
  }
  return true;
}
</script>
 
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
				<h2>Change Password</h2>
			</div>
		</div>
	</div>
	 
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>User Profile </h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form method="post" onsubmit="return checkpass();" name="myform">
							 <div class="form-group row">
                  <label class="col-form-label col-md-4">Current Password</label>
                    <div class="col-md-10">
                      <input type="password" class="form-control" style="font-size: 20px" name="currentpassword">
                    </div>
                </div>
                <div class="form-group row">
                   <label class="col-form-label col-md-4">New Password</label>
                      <div class="col-md-10">
                         <input type="password" class="form-control" name="newpassword" style="font-size: 20px">
                      </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-4">Confirm Password</label>
                    <div class="col-md-10">
                      <input type="password" class="form-control" name="confirmpassword" style="font-size: 20px" >
                    </div>
                </div>
                <br>
                <div class="tp">
                  <button type="submit" class="btn btn-primary" name="submit">Change</button>
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