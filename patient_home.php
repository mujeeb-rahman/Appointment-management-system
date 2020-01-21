<!-- patient home page with new appointment form-->
<!----------------------------------------Header Starts--------------------------------------------------->
<?php
include('php_connection.php'); 
include('patient_header.php');?>
<!----------------------------------------Header End------------------------------------------------------>
<section class="mt-5">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="p-3 fontcol">Take Appointment</h3>
                    <div class="card-body">
                        <form name="my-form" onsubmit="return validform()" action="php_new_appointment.php"
                            method="post">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Patient
                                    ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="id"
                                        value="<?php echo $_SESSION['pid'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Patient
                                    Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control box-bg" name="name"
                                        value="<?php echo $_SESSION['pname'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    class="col-md-4 col-form-label text-md-right font-weight-bolder">Department</label>
                                <div class="col-md-6 d-flex form-check">
                                    <select id="department" name="department" required>
                                        <option>Select..</option>
                                        <?php
                                            include('php_connection.php'); 
                                            $sql = "select * from doctors where dstatus = 'approved'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                        ?>
                                        <option value="<?php  echo $var = $row['dspecs'];  ?>">
                                            <?php echo $row['dspecs']; ?></option>
                                        <?php
                                        }
                                        ?>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Doctor</label>
                                <div class="col-md-6 d-flex form-check">
                                    <!-- <?php #if isset($_GET['department']) : ?> -->
                                    <select name="dname" required>
                                        <option>Select..</option>
                                        <?php 
                                            $sql = "select * from doctors";# where dspecs = '".$_POST['department']."'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                        ?>
                                        <option value="<?php echo $row['dname']; ?>"><?php echo $row['dname']; ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <!-- <?php# endif?>       -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control box-bg" name="date" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary" name="submit" onclick="say()">
                                        <a class="text-light text-decoration-none">Submit</a>
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

</section>
<!-- footer section -->
<?php include('patient_footer.php');?>
<!----------------------------------------Footer End--------------------------------------------------->