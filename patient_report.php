<!-- to list patient prescriptions /update feature -->
<!----------------------------------------Header Starts--------------------------------------------------->
<?php include('patient_header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<div class="row">
    <div class="col-md-5 p-3 text-center bor t-center">
        <h2 class="fontcol">Patient Prescription Reports</h2>
    </div>
    <div class="col-md-4 p-3 bor text-right ">
        <p class=""><kbd>Search</kbd>
          <input class="p-2" id="myInput" type="text" placeholder="Search.."></p>
    </div>
</div>
<table class="container-fluid table">
    <thead>
        <tr>
            <th>Patient Name</th>
            <th>Doctor Name</th>
            <th>Department</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- <?php 
					  require_once  'php_connection.php';
					  $sql = "select * from appointments";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
        <tr>
        <th scope="row"><?php echo $row['d_regid']; ?></th>
        <td><?php echo $row['astatus']; ?></td>

        <td><a href="" class="btn btn-outline-secondary  btn-arrow-right" role="button">Details </a></td></td> 
        <td><a href="" class="btn btn-outline-secondary  btn-arrow-right" role="button">Prescriptions</a></td></td>    

  </tr>
  <?php 
					  }
					  ?> -->
    </tbody>
</table>
<!----------------------------------------Footer Starts--------------------------------------------------->
<?php include('patient_footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->