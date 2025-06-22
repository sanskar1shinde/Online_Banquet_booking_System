<?php
session_start();
 include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
$id = $_SESSION['id'];
$name = $_POST['name'];
$mobno = $_POST['mobno'];
$email = $_POST['email'];

$sql = "UPDATE admin SET name='$name', mobno='$mobno',email='$email' where id ='$id'";

if ($conn->query($sql) === TRUE) 
{
    echo "<script>alert('Record updated successfully')</script>";
} 
else 
{
        echo "Error updating record: " . $conn->error;
}
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Admin Profile</title>
 
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
				<h2>Profile</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Admin Profile </h3>
					</div>
					<div class="agileinfo-contact-form-grid">
							<?php

								 $id=$_SESSION['id'];
 								$sql = "SELECT * FROM admin WHERE id = $id";
								$result = mysqli_query($conn, $sql);
  									if (mysqli_num_rows($result))
  									{
     									$row = mysqli_fetch_assoc($result);
     									?>
     									<form method="post">
					 		<div class="form-group row">
                              	<label class="col-form-label col-md-4">Full Name:</label>
                                	<div class="col-md-12">
                                		<input type="text" value="<?php echo $row['name'];?>" name="name" required="true" class="form-control" >
                                	</div> 
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Mobile Number</label>
                                	<div class="col-md-12">
                                        <input type="text" name="mobno" class="form-control" required="true" maxlength="10" pattern="[0-9]+" value="<?php echo $row['mobno']?>">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" value="<?php  echo $row['email'];?>" name="email"   title="Email can't be edit">
                                    </div>
                            </div>                            
                            <div class="tp">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                            </div>
                        </form>			<?php
									} 
									else 
									{
     									echo "User not found.";
									}
							?>


						
					</div>
				</div>				
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
</body>	
</html> 