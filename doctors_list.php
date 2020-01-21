<!-- approved doctors list for index page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> D' Appointments</title>
  <!-- Custom fonts for this template-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- nav section start-->
<section class="navbar-nav navbar-dark bg-dark">
  <div class="container-fluid p-2">
      <div class="row">
          <div class="col-10">
              <a class="navbar-brand ml-3" href="index.php">D' Appointments</a>
          </div>
    </div>
</div>
</section>
<div class="row"> 
  <div class="col-md-3 p-3 text-center bor t-center">
  <h2 class="fontcol">Doctor's List</h2>
  </div>
	<div class="col-md-4 p-3 bor text-right ">
    <p class=""><kbd>Search</kbd>  
      <input class="p-2" id="myInput" type="text" placeholder="Search.."></p>
  </div>
</div>
<div class="container vh-100">
<table class="container table table-striped">
    <thead>
        <tr>
        <th>Sl NO</th>
        <th>Name</th>
        <th>Specelization</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    <?php 
      require_once  'php_connection.php';
      $sql = "select * from doctors where dstatus = 'approved'";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
      <tr>
        <th scope="row"><?php echo $row['dname']; ?></th>
        <td><?php echo $row['dspecs']; ?></td>
        <td><a href="login.php" class="btn btn-outline-secondary  btn-arrow-right" role="button">Take Appointment</a></td>   
        </tr>
        <?php 
					  }
        ?>
    </tbody>
  </table>
 </div>
<!-- Footer -->
<section class="navbar-nav navbar-dark bg-dark">
  <footer class="copyright text-center bg-gradient-primary py-2 text-light pt-100">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 text-white">Copyright &copy; Orisys Academy 2019-2020
      </div>
      <!-- Copyright -->
  </footer>
</section>
  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
  <!-- Custom scripts for student applied leave pages-->
  <script src="js/search.js"></script> 
</body>
</html>
