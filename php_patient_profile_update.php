<!-- to update patient profile  -->
<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $rid=$_POST['rid'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql="UPDATE patients SET pname = '".$name."',paddress = '".$address."',pdob = '".$dob."',pmobile = '".$mobile."',pemail = '".$email."',pgender = '".$gender."',ppassword = '".$password."' where pid = '".$rid."'";
        if (mysqli_query($conn,$sql))
            {
                header('location:patient_profile.php');
            }
    }
mysqli_close($conn);
?>