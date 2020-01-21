<!-- header for admin -->
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
    <section class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="row">
                <div class="col-md-11">
                    <a class="navbar-brand ml-4" href="admin_home.php">D' Appointments</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-md-1 navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-5">
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link dropdown-toggle btn btn-outline-secondary ml-5 my-2 pl-2 pr-2" href=""
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Doctors
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="admin_doctors.php">All Doctors</a>
                                <a class="dropdown-item" href="admin_doctors_all_application.php">All Applications</a>
                            </div>
                        </li>
                        <li class="nav-item ml-5">
                            <a href="admin_patient_table.php"><button
                                    class="btn btn-outline-secondary my-2 p-2 pl-3 pr-3"
                                    type="submit">Patients</button></a>
                        </li>
                        <li class="nav-item ml-5">
                            <a href="php_logout.php"><button class="btn btn-outline-secondary ml-4 my-2 p-2 pl-4 pr-4"
                                    type="submit">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- main section -->
    <section class="">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-2 border align-items-right">
                    <div class="mt-3 mb">
                        <h6 class="fontcol">Administration Portal</h6>
                        <ul class="list-group">
                            <li class="list-group-item mt-5"><a href="admin_doctors.php">Doctors</a></li>
                            <li class="list-group-item"><a href="admin_patient_table.php">Patients</a></li>
                            <li class="list-group nav-item dropdown">
                                <a class="list-group-item nav-link dropdown-toggle" href="admin_new_application.php"
                                    id="" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Applications
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="admin_home.php">New Registrations</a>
                                    <a class="dropdown-item" href="admin_doctors_all_application.php">All
                                        Applications</a>
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