<!-- to approve patient appointment from doctor portal  -->
<?php
include('php_connection.php');
$var = $_GET['id'];
$sql="UPDATE appointments SET status = 'approved' where pname = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:doctor_home.php');
        }

mysqli_close($conn);
?>