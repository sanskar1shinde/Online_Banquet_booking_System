 <?php
 session_start();
 include('includes/dbconnection.php');

if(isset($_SESSION['submit']))
{
    $data = $_SESSION['data'];

    foreach ($data as $row)
    {
        $form_value = $row['bookingid'];
        $Decide= $_POST['Approve'];
     
        $query = "SELECT bookingid FROM detail WHERE bookingid='$form_value'";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($result);
         
         
        $sql = "UPDATE booking SET status = '$Decide' WHERE bookingid = '$form_value'";
            if (mysqli_query($conn, $sql)) 
            {
                echo " <h2>Submitted</h2></a>";
            } 
        
        else 
        {
            echo"<h3>Incorrect</h3>";
        }
    }
}  
?>