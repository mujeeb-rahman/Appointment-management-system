<!-- patient profile view -->
<?php
include('patient_header.php');
?>
<!--------------patient profile section---------------------->
<!------------session start---------------->
<section>
    <?php
		include('php_connection.php');
		$var = $_SESSION['mail'];
		$sql = "select * from patients where pemail='".$var."'";
		$result = mysqli_query($conn,$sql);
		if($row = mysqli_fetch_assoc($result))
		{
	?>
    <div class="col-md-12 mt-5">
        <table class="border table table-striped bg-table">
            <tr>
                <th>Registration Id: <?php echo $row['pid']; ?></th>
                <th class="text-right"><a href="patient_profile_edit.php"><button
                            class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
                </th>
            </tr>
            <tr>
                <td class="font-weight-bolder">Name</td>
                <td><?php echo $row['pname']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Address</td>
                <td><?php echo $row['paddress']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Gender</td>
                <td><?php echo $row['pgender']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">DOB</td>
                <td><?php echo $row['pdob']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Email</td>
                <td><?php echo $row['pemail']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Mobile</td>
                <td><?php echo $row['pmobile']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Password</td>
                <td><?php echo $row['ppassword']; ?></td>
            </tr>
        </table>
        <?php
		}
		?>
    </div>
    </div>
</section>
<!--------------patient profile section ends---------------------->
<!-- Footer -->
<?php
	  include('patient_footer.php'); ?>