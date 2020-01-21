<!-- listing all patient appointment in doctor portal -->
<!----------------------------------------Header Starts--------------------------------------------------->
<?php
 include('doctor_header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<div class="row">
    <div class="col-md-5 p-3 text-center bor t-center">
        <h2 class="fontcol">All Appointments</h2>
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
            <th>Date</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            require_once  'php_connection.php';
            $var = $_SESSION['dname'];
					  $sql = "select * from appointments where dname = '".$var."'";
					  $result = mysqli_query($conn,$sql);
					  while($row = mysqli_fetch_assoc($result))
					  {
						  ?>
        <tr>
            <th scope="row"><?php echo $row['pname']; ?></th>
            <td><?php echo $row['adate']; ?></td>
            <td><?php echo $row['status']; ?></td>

            <td><a href="doctor_appointment_delete.php?id=<?php echo $row['pname']; ?>"
                    class="btn btn-outline-secondary  btn-arrow-right" role="button">Delete</a></td>
        </tr>
        <?php 
				  }
				?>
    </tbody>
</table>
<!----------------------------------------Footer Starts--------------------------------------------------->
<?php include('doctor_footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->