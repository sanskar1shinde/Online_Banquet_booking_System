<?php
 
 include('includes/dbconnection.php');
if(isset($_POST['submit']))
{ 
 
    $mobno=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['newpassword'];

    $sql="UPDATE users SET password='$password' where mobno='$mobno',email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result == TRUE)
    {
        echo "<script>alert('Password updated successfully.'); window.location.href='login.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed to update Password.'); window.location.href='forgot-password.php';</script>";
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Forgot Password</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
 <link href="css/font-awesome.css" rel="stylesheet"> 
  <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
 <script>
    function valid() {
    var email = document.forms["chngpwd"]["email"].value;
    var mobile = document.forms["chngpwd"]["mobile"].value;
    var password = document.forms["chngpwd"]["newpassword"].value;
    var confirm_password = document.forms["chngpwd"]["confirmpassword"].value;
    
     var email_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email_pattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    
     var mobile_pattern = /^\d{10}$/;
    if (!mobile_pattern.test(mobile)) {
        alert("Please enter a valid 10 digit mobile number.");
        return false;
    }
    
     if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }
    
     if (password !== confirm_password) {
        alert("Password and Confirm Password fields do not match.");
        return false;
    }
    
    return true;
}
 </script>
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
                                    <li><a href="mail.php">Mail US</a></li>
                                    <li><a href="login.php">Login</a></li>
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
    <h2>Forgot Password</h2>
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
                        <h3>Reset Your Password</h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        <form action="#" method="post" name="chngpwd" onsubmit="return valid();">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" >
                            <input type="text" class="form-control"  name="mobile" maxlength="10" pattern="[0-9]+" placeholder="Mobile Number">
                            <input type="password" class="form-control"  name="newpassword" placeholder="New Password">
                            <br>
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                            <br>
                            <div class="forgot">
                                                            <a href="login.php">Already have an account</a>
                                                        </div>
                                                        <br>
                            <button class="btn1" name="submit">Reset</button>

                        </form>

                    </div>
                </div>
                
                <div class="clearfix"> </div>
            </div>
            
        
        </div>
    </div>
     </body> 
</html>