<!-- doctor registration -->
<?php
include('php_connection.php');

if(isset($_POST['submit']))	
    {	
        $id=$_POST['id'];
        $spec=$_POST['spec'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

        if(!preg_match("/^[A-Za-z0-9.,' -]{1,20}$/", $id))
        {
            echo "Enter valid registration number";
        }
        else if (!preg_match("/^[A-Za-z' -]{1,50}$/",$spec)) 
          {
            echo "Enter valid specelized department"; 
          }
        else if (!preg_match("/^[A-Za-z' -]{1,50}$/",$name)) 
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
        $sql="INSERT INTO  doctors (d_regid,dname,daddress,dgender,dspecs,ddob,demail,dmobile,dpassword) VALUES('".$id."','".$name."','".$address."','".$gender."','".$spec."','".$dob."','".$email."','".$mobile."','".$password."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:login.php");
            }
        }
    }
mysqli_close($conn);
?>