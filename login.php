<!-- common login page -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Login</title>
	</head>
<body>
<!------------------starts main section----------------------->
<header class="bg-color p-3 pl-3">
	<a class="text-dark text-decoration-none" href="index.php"><h5>D' Appointments</h5></a>
</header>
<section>
	<h4 class="pt-4 text-dark text-center text-h">D' Appointments - an online doctor appointment portal.</h4>
	<div class="container-fluid bg-style media1">
		<div class="row">
			<div class="col-md-12 log-style">
				<form action="php_login.php" name="loginform" method="post" class="m-auto jumbotron text-light p-3 form-style rounded">
					<h3 div class="text-center text-dark">Sign In</h3>
					<input type="email" class="form-control inputcomponent mt-md-3 space" name="email" required="required" placeholder="Email">
					<input type="password" class="form-control inputcomponent mt-md-3 space" name="password" required="required" placeholder="Password">
					<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
					<button type="button" class="btn btn-default loginbutton m-t-5">
					<span class="google-button__icon">	
					</span>
					<span class="google-button__text mt-3">Not Registred?<a href="registration.php">Sign Up</a></span>
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!------------------starts main end----------------------->
<!-----------------------------start footer section---------------->
<footer class="bg-color py-2 foot text-center">
	<h5 class="text-center">Powered by Orisys Academy </h5>
</footer>	
<!-----------------------------ends footer section---------------->
<!-- scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/validation.js"></script>
<Script src="js/jquery.validate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
</body>
</html>