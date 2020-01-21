<!-- patient registration -->
<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $name=$_POST['name'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if (!preg_match("/^[A-Za-z' -]{1,50}$/",$name)) 
          {
            echo "Enter valid name"; 
          }
        else if(!preg_match("/^[A-Za-z0-9.,' -]{1,200}$/", $address))
        {
            echo "Enter valid address";
        }
        else if((getdate()<$dob))
        {
            echo "Enter valid date of birth";
        }
        else if(preg_match('/^[0-9]{10}+$/', $mobile) != true)
        {
            echo "Enter valid mobile number";
        }
        else if (!fileter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "Invalid email format";
        }
        else if(strlen($password) < 6)
        {
            echo "Failed! Enter password atleast 6 characetrs";
        }
        else if($password != $cpassword))
        {
            echo "Failed! Confirm password not match";
        }
        else
        {
            $sql="INSERT INTO  patients(pname,paddress,pdob,pmobile,pemail,pgender,ppassword) VALUES('".$name."','".$address."','".$dob."','".$mobile."','".$email."','".$gender."','".$password."')";
            if (mysqli_query($conn,$sql))
                {
                    header("location:login.php");
                }
        }
    }
mysqli_close($conn);
?>