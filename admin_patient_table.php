<!-- listing patients in administration page -->
<!----------------------------------------Header Starts--------------------------------------------------->  
<?php include('header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<div class="row"> 
  <div class="col-md-3 p-3 text-center bor t-center">
	  <h2 class="fontcol">Registred Patients</h2>
	</div>		
		<div class="col-md-4 p-3 bor text-right ">
		  <p class=""><kbd>Search</kbd>  
			<input class="p-2" id="myInput" type="text" placeholder="Search.."></p>
    </div>
</div>
<table class="container-fluid table">
  <thead>
    <tr>
      <th>Sl NO</th>
      <th>Patient Name</th>
      <th>Address</th>
      <th>Mobile</th>
      <th>E-mail</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 
      require_once  'php_connection.php';
      $sql = "select * from patients";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result))
      {
    ?>
    <tr>
      <th scope="row"><?php echo $row['pid']; ?></th>
      <td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['paddress']; ?></td>
      <td><?php echo $row['pmobile']; ?></td>
      <td><?php echo $row['pemail']; ?></td>
      <td><a href="admin_patient_profile_edit.php?id=<?php echo $row['pid']; ?>" class="btn btn-outline-secondary  btn-arrow-right" role="button">More ></a></td></td>   
      </tr>
    <?php 
      }
    ?>
  </tbody>
</table>
<!----------------------------------------Footer Starts--------------------------------------------------->   
<?php include('footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->