<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
    $sql = " select * from booking";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);

    $remark = $_POST['payment'];
    $status = $_POST['Approve'];
    $bookingid = $row['bookingid'];
    $sql1 = "UPDATE booking SET status = '$status',remark='$remark' WHERE bookingid = '$bookingid'";
    $result = mysqli_query($conn, $sql1);
    if($result)
    {
        echo "<script>alert('Request Approved'); window.location.href='adprofile.php'</script>";
    }
    else
    {
        echo "<script>alert('Request Denied'); window.location.href='adprofile.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Banquet Booking System || View Booking</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
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
                                     $sql="SELECT * FROM users JOIN booking ON users.id = booking.userid";
                                    $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result))
                                    {     
                                          $fname=$row['fname'];
                                          $mobno=$row['mobno'];
                                          $email=$row['email'];
                                          $bookingfrom=$row['bookingfrom'];
                                          $bookingto=$row['bookingto'];
                                          $numberofguest=$row['numberofguest'];
                                          $EventType=$row['EventType'];
                                          $message=$row['message'];
                                      ?>
                      <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <tr>
                          <th colspan="5" style="text-align: center;font-size: 20px;color: blue;">Booking Number: <?php echo $row['bookingid'];?>
                          </th>
                        </tr>
                          <tr>
                                                <th>Client Name</th>
                                                    <td><?php  echo $fname ?></td>
                                                        <th>Mobile Number</th>
                                                            <td><?php  echo $mobno ?></td>
                                            </tr>
                                            <tr>
                                              <th>Email</th>
                                                    <td><?php  echo $email ?></td>
                                                        <th>Booking From</th>
                                                    <td><?php  echo $bookingfrom ?></td>
                                            </tr>
                                            <tr>
                                                <th>Booking To</th>
                                                    <td><?php  echo $bookingto ?></td>
                                                        <th>Number of Guest</th>
                                                    <td><?php  echo $numberofguest?></td>
                                            </tr>
                                            <tr>
                                            <th>Event Type</th>
                                                <td><?php  echo $EventType ?></td>
                                                <th>Message</th>
                                                <td><?php  echo $message ?></td>
                                            </tr>
                                             
                                            <tr>
    
                                            <th>Order Remark</th>

                                            <td><form name='myform' method='post' >
                                             
<P>Select Payment:  <select type="text" class="form-control" name="payment" required="true" ><br>
                 <option value="">-- Select Payment--</option>
                   
                    <?php
                             $value = mysqli_query($conn,"SELECT id,concat( EventType,'---',fee) AS Type,fee from eventtype");
                   
                            while($line=mysqli_fetch_assoc($value))
                            {
                         
                                ?>
                                <option value="<?php echo $line['fee']?>"> <?php echo $line['Type']?></option>
                                 <?php
                            }

                        ?>
               
            </select>
                 </p> 
                   
                                            
                                                    
                                            </td>
                                                <th>Status</th>
                                                <td>
                                                <?php 
                                                    
                                                     echo "<form name='myform' method='post' >
                                                            <font size='4' color='black' required><input type='radio' name='Approve' value='Approved'> Approve </input>
                                                            <br>
                                                            <input type='radio' name='Approve' value='Disapproved'> Disapprove</font>
                                                            <br>
      
                                                            <input type='submit' name='submit' value='Submit'>
                                                        </form>";
                                                ?>
                                                </td>
                                                </tr>
                                               </form>
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