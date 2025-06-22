<?php
 
$servername = "localhost";  
$username = "root"; 
$password = ""; 
$dbname = "obbs"; 

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) 
 {
    die("Connection failed: " . $conn->connect_error);
} 
  
if (isset($_POST['signup'])) 
{
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $mobno = $_POST['mobno'];
  $password = $_POST['password'];

   $sql = "INSERT INTO users (fname, email, mobno, password) VALUES ('$fname', '$email', '$mobno', '$password')";
    
  if ($conn->query($sql) === TRUE) 
  {
    echo'<script>alert("Account SuccessFully Created");</script>";
				echo "<script>window.location.href ="login.php"</script>';
  
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
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
				<h2>Register</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
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
						<h3>Register Yourself </h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form method="post" name="signup" onsubmit="return checkpass();">
              <input type="text" name="fname" placeholder="Full Name" required="true">
              <input type="email" name="email" placeholder="E-mail" required="true">
              <input type="text" name="mobno" placeholder="Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
              <input type="password"  name="password" placeholder="Password" required="true" id="password1">
              <br>
              <input type="password"  name="confirmpassword" placeholder="Confirm Password" required="true" id="password2">
              <br>
            	 <div class="tp">
              	 <button class="btn1" name="signup">Register NOW</button>
               </div>
            </form>
					</div>
				</div>
				<br>
				<div class="col-md-6 contact-form-right">
					 <div class="forgot">
             <a href="login.php">Already have an account!!!</a>
            </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		
		</div>
	</div>	 
	<script>
    function checkpass() {
      var pass1 = document.getElementById("password1").value;
      var pass2 = document.getElementById("password2").value;
      if (pass1 != pass2) {
        alert("Passwords do not match");
        return false;
      } else {
        return true;
      }
    }
  </script>
</body>	
</html>