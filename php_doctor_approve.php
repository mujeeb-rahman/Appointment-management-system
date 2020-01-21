<!-- to approve doctor application from admin side -->
<?php
    include('php_connection.php');
    $var = $_GET['id'];
    $sql="UPDATE doctors SET dstatus = 'approved' where d_regid = '".$var."'";
        if (mysqli_query($conn,$sql))
            {
                header('location:admin_home.php');
            }

    mysqli_close($conn);
?>