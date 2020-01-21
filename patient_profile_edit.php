<!-- patient profile edit page for patient -->
<?php 
    session_start();
    include('patient_header.php');
    include('php_connection.php'); 
    $var = $_SESSION['mail'];
    $sql = "select * from patients where pemail='".$var."'";
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_assoc($result))
    {
?>
<section>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="p-3 fontcol">Edit Your Profile</h3>
                    <div class="card-body">
                        <form name="my-form" onsubmit="return validform1()" action="php_patient_profile_update.php"
                            method="post">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registration
                                    ID</label>
                                <div class="col-md-6 ">
                                    <input type="text" id="full_name" class="form-control box-bg " name="rid"
                                        value="<?php echo $row['pid']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control box-bg" name="name"
                                        value="<?php echo $row['pname']; ?>" required>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="address"
                                        value="<?php echo $row['paddress']; ?>" required>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control box-bg" name="dob"
                                        value="<?php echo $row['pdob']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Gender</label>
                                <div class="col-md-6 d-flex form-check">
                                    <select name="gender" required>
                                        <option selected value="<?php echo $row['pgender']; ?>">
                                            <?php echo $row['pgender']; ?></option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control box-bg"
                                        value="<?php echo $row['pemail']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="mobile"
                                        value="<?php echo $row['pmobile']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg"
                                        value="<?php echo $row['ppassword']; ?>" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm
                                    Password</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="cpassword" required>
                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary" name="submit" onclick="return validform1()">
                                        <a class="text-light text-decoration-none">Save</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
        }
    ?>
    </div>
</section>
<!-- client validation for patient registration form start -->		
    <script>
        function validform1()
        {
            var name = document.forms["form1"]["name"].value;
            var address = document.forms["form1"]["address"].value;
            var dob = document.forms["form1"]["dob"].value;
            var gender = document.forms["form1"]["gender"].value;
            var mobile = document.forms["form1"]["mobile"].value;
            var email = document.forms["form1"]["email"].value;
            var pass = document.forms["form1"]["password"].value;
            var cpassword = document.getElementById('password').value;
            var regname = /^[a-zA-Z ]{2,30}$/;
            var regadd = /^[A-Za-z0-9.,' -]{1,200}$/;
            var regmob = /^[0-9]{10}+$/;
            var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; 

            //empty fields
            if(name=="" || address=="" || dob=="" || gender=="" || mobile=="" || email=="" || password=="" || cpassword=="" )
            {
                alert("Enter valid data");
                return false;
            }
            //checking name 
            else if(!regname.test(name.value)) {
                alert("Enter valid name");
                return false;
            }
            //address validation
            else if (!regadd.test(address.value)) {
                alert("Enter valid address");
                return false;
            }
            //mobile number validation
            else if (!regmob.test(mobile.value)) {
                alert("Enter valid mobile number");
                return false;
            }
            //email validation
            else if (!regexEmail.test(email.value)) {
            alert("Enter valid email");
            return false;
            }
            //passsword checking
            else if(password.length<6)
            {
                alert("password must be at least 6 characters long");
                password.focus();
                return false;
            }
            else if(password != cpassword)
            {
            alert("password doesn't match");
                password.focus();
                return false;
            }
        
        }
    </script>
<!-- client validation for doctor registration form end -->
<!-- Footer -->
<?php include('patient_footer.php'); ?>