<?php
include('db_conn.php');
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/query/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       
    </head>

    <body style="background-color: lavenderblush"
    <div class="container" id="bdiv">
    <header class="blog-header py-3">
    </div>

        <div class="row flex-nowrap justify-content-between align-items-center">
    <!--registration -->
            <!-- if user is not logged in, the registration button will be displayed  -->
            <?php
                include "PHP/session.php";
                    if ($session_user==""){
                        echo ' <div class="col-4 pt-1">
                                <a href="PHP/Registration.php" class="btn btn-success">Registration</a>
                               </div>';
                    }
                    ?>
            
            <div class="col-4 text-center">
                <h3 class="blog-header-logo text-dark" id="UDW">University of DoWell</h3>
            </div>
    <!--login & logout -->
            <!--the login button will be displayed if there is no login, and the logout button will be displayed if there is a login-->
            <div class="col-4 d-flex justify-content-end align-items-center">
                <?php
                if ($session_user==""){
                    echo'<a href="PHP/Login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-align: center">Login</a>';
                } else{
                    echo'<a href="PHP/LogOut.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="text-align: center">Logout</a>';
                }
                ?>
            </div>
        </div>
    </header>

     <!-- navigation bar-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <nav class="nav d-flex justify-content-between">
                <li class="navbar-brand">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/UnitDetail.php">Unit Detail</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/UnitEnrollment.php">Unit Enrollment</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/IndividualTimetable.php">Individual Timetable</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/TutorialAllocation.php">Tutorial Allocation</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/MasterList.php">Master List</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/MasterStaff.php">Master Staff</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/EnrolledStudentDetails.php">Enrolled Student</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/UnitManagement.php">Unit Management</a>
                </li>
                <li class="navbar-brand">
                    <a class="nav-link" href="PHP/UserAccount.php">User Account</a>
                </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Whenever user sign in, their user name will be shown after "Welcome ". -->
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <img class="card-img-top" src="image/homepage 1.jpg" alt="loading" style="width: 100%" height="450"><br>
                <h4>Welcome to University of DoWell</h4>
                <p>Course Management System</p>
                <p> Welcome 
                <?php  echo $session_user;
                        echo $session_access;

              ?> </p>
            </div>
        </div>
</div>
    </body>
    <!-- footer -->
    <footer align="center" style="font-weight: bold; background-color: white">
            <p class="mt-5 mb-3 text-muted text-center">&copy; University of DoWell</p>
            <p>Copyright © 2020 Yen Vo. All right reserved. </p>
    </footer>
</html>