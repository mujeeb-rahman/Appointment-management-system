<!-- patient header section -->
<!DOCTYPE html>
<?php session_start();
?>
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
                    <a class="navbar-brand" href="patient_home.php">D' Appointments</a>
                </div>
                <div class="col-2 align-items-right">
                    <a href="php_logout.php"><button class="btn btn-outline-secondary my-2"
                            type="submit">Logout</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- main section -->
    <section class="">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-2 border align-items-right">
                    <div class="mt-3 mb">
                        <h5 class="fontcol">Patient's Portal</h5>
                        <h5>Hello,</h5>
                        <h4><?php
                            include('php_connection.php');
                            $var = $_SESSION['mail'];
                            $sql = "select * from patients where pemail='".$var."'";
                            $result = mysqli_query($conn,$sql);
                            if($row = mysqli_fetch_assoc($result))
                            {
                            echo $_SESSION['pname'] = $row['pname'];
                            $_SESSION['pid'] = $row['pid'];
                            }
                        ?>
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item mt-3"><a href="patient_profile.php">Profile</a></li>
                            <li class="list-group-item"><a href="patient_report.php">Reports</a></li>
                            <li class="list-group nav-item dropdown">
                                <a class="list-group-item nav-link dropdown-toggle" href="admin_new_application.php"
                                    id="" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Appointments
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="patient_home.php">New Appointment</a>
                                    <a class="dropdown-item" href="patient_all_application.php">All Applications</a>
                                </div>
                            </li>
                            <li class="list-group-item mb-5"><a href="">Feedback</a>
                            </li>
                            <!----<li class="list-group-item dropdown dropdown-toggle dropdown-toggle-split"><a href="{% url 'admin_leave_new' %}">Leave applications</a>
                                    <ul class="list-group dropdown-menu sr-only">
                                        <li><a class="dropdown-item" href="#">Action</a></li>-->
                         </ul>
                    </div>
                </div>
                <div class="col-10">
<!-- nav section end-->