<!-- profile page for doctor -->
<?php
	include('doctor_header.php');
?>
<!--------------doctor profile section---------------------->
<section>
    <?php
		include('php_connection.php');
		$var = $_SESSION['email'];
		$sql = "select * from doctors where demail='".$var."'";
		$result = mysqli_query($conn,$sql);
		if($row = mysqli_fetch_assoc($result))
		{
	?>
	<div class="col-md-12 mt-5">
        <table class="border table table-striped bg-table">
            <tr>
                <th>Registration Id: <?php echo $row['d_regid']; ?></th>
                <th class="text-right"><a href="doctor_profile_edit.php"><button
                    class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
                </th>
            </tr>
            <tr>
                <td class="font-weight-bolder">Name</td>
                <td><?php echo $_SESSION['name'] = $row['dname']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Address</td>
                <td><?php echo $row['daddress']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Gender</td>
                <td><?php echo $row['dgender']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Specelization</td>
                <td><?php echo $row['dspecs']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">DOB</td>
                <td><?php echo $row['ddob']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Email</td>
                <td><?php echo $row['demail']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Mobile</td>
                <td><?php echo $row['dmobile']; ?></td>
            </tr>
            <tr>
                <td class="font-weight-bolder">Password</td>
                <td><?php echo $row['dpassword']; ?></td>
            </tr>
        </table>
        <?php
			}
		?>
    </div>
</section>

<!--------------doctor profile section ends---------------------->
<!-- Footer -->
<?php
	include('doctor_footer.php'); ?>