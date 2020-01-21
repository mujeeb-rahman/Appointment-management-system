<!-- to delete appointment from doctors portal -->
<?php
include('php_connection.php');
$var = $_GET['id'];
$sql="DELETE FROM appointments where pname = '".$var."'";
    if (mysqli_query($conn,$sql))
        {
            header('location:doctor_patient_all_application.php');
        }

mysqli_close($conn);
?>