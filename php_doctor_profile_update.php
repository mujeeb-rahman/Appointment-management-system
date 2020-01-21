<!-- to update doctor profile from doctor -->
<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $rid=$_POST['rid'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $specs=$_POST['specs'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="UPDATE doctors SET dname = '".$name."',daddress = '".$address."',dgender = '".$gender."',dspecs = '".$specs."',ddob = '".$dob."',demail = '".$email."',dmobile = '".$mobile."',dpassword = '".$password."' where d_regid = '".$rid."'";
        if (mysqli_query($conn,$sql))
            {
                header('location:doctor_profile.php');
            }
    }
mysqli_close($conn);
?>