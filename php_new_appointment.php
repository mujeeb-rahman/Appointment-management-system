<!-- to create new appointment from patiients -->
<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $pid=$_POST['id'];
        $pname=$_POST['name'];
        $department=$_POST['department'];
        $dname=$_POST['dname'];
        $date=$_POST['date'];

        $sql="INSERT INTO  appointments(pid,pname,dspecs,dname,adate) VALUES('".$pid."','".$pname."','".$department."','".$dname."','".$date."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:patient_home.php");
            }
    }
mysqli_close($conn);
?>