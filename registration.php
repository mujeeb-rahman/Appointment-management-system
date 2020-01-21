<!-- registration form for patient and doctor -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
        <title>Login</title>
	</head>
<body onload="hideDiv()">
<!------------------starts first section----------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="row">
        <div class="col-md-11">
            <a class="navbar-brand ml-4" href="login.php">D' Appointments</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<div class="row d-flex my-2">                  
    <div class="col-md-6">
        <button class="btn" id="b1" >
        <h3 class="fontcol">Patient's</h3>
        </button>             
    </div>
    <div class="col-md-6 ">
        <button class="btn" id="b2" >
        <h3 class="fontcol">Doctor's</h3>
        </button>              
    </div>
</div>
	<!---------------div section 1 end------------>
    <!---------------Subject section form 1 start------------>	
<div id="div1" class="py-5 border-top mb-5">
    <section class="mt-2">	
        <div class="cotainer ">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <form name="form1" onsubmit="return validform1()" action="php_patient_register.php" method="post">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control box-bg" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                            <div class="col-md-6">
                                <textarea  class="form-control box-bg" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date of Birth</label>
                            <div class="col-md-6">
                                <input type="date" id="email_address" class="form-control box-bg" name="dob" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder" >Gender</label>
                            <div class="col-md-6 d-flex form-check">
                                <select name="gender" required>
                                    <option >Choose..</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                            <div class="col-md-6">
                                <input type="text" name="mobile" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                            <div class="col-md-6">
                                <input type="email"  name="email" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                            <div class="col-md-6">
                                <input type="text" name="password" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="text"  name="cpassword" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary w-25 " name="submit" onclick="return validform1()">
                                <a  class="text-light text-decoration-none">Register</a>
                                </button>
                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-danger w-25 "><a href="login.php" class="text-light text-decoration-none">
                                Cancel</a>
                                </button>
                            </div>
                        </div>
                    </form>         
                </div>
            </div>
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
 </div>
 <!---------------Subject section form 1 end------------>
	<!---------------Subject section form 2 start------------>			
<div id="div2" class=" py-5">
    <section>
		<div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <form name="form2" onsubmit="return validform()" action="php_doctor_register.php" method="POST">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registration ID</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control box-bg" name="id" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Specelization</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control box-bg" name="spec" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control box-bg" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                            <div class="col-md-6">
                                <textarea  class="form-control box-bg" name="address" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder" >Gender</label>
                            <div class="col-md-6 d-flex form-check">
                                <select name="gender" required>
                                    <option >Choose..</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="other">Other</option>
                                </select>        
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                            <div class="col-md-6">
                                <input type="date" name="dob" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control box-bg" name="email" required></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                            <div class="col-md-6">
                                <input type="text"  name="mobile" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                            <div class="col-md-6">
                                <input  class="form-control box-bg" name="password" required></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="text"  name="cpassword" class="form-control box-bg" required>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary w-25 " name="submit" onclick="return validform2();">
                                <a class="text-light text-decoration-none">Register</a>
                                </button>
                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-danger w-25 "><a href="login.php" class="text-light text-decoration-none">
                                Cancel</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	    </div>
    </section>

<!-- client validation for doctor registration form start -->
    <script>
        function validform2()
        {
            var id = document.forms["form1"]["id"].value;
            var spec = document.forms["form1"]["spec"].value;
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
            //registration id check
            else if (!regadd.test(id.value)) {
                alert("Enter valid registration id");
                return false;
            }
            else if (!regname.test(spec.value)) {
                alert("Enter valid specialized department");
                return false;
            }
            //checking name 
            else if (!regname.test(name.value)) {
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
</div>
<!---------------Subject section form 2 end------------>	
<!---------------footer section start------------>
 <?php include('footer.php')?>  
<!---------------footer section end------------>
  
<script>
$(document).ready(function(){
	
	
	
  $("#b1").click(function(){
    $("#div1").show();
	 $("#div2").hide();
  });
   $("#b2").click(function(){
    $("#div1").hide();
	 $("#div2").show();
  });
});

 function hideDiv() {
     document.getElementById("div2").style.display = 'none';   
	document.getElementById("div3").style.display = 'none';   	  
    }  
 </script>	
	<!-----------------------------script style section---------------->
		<script src="js/jquery.min.js"></script>
		<script src="js/validation.js"></script>
		<Script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>
		
		
		
</body>
</html>
 
 