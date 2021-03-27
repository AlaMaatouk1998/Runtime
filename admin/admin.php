<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style/styles.css">
<link  rel="stylesheet" href="./admin.css">
<style>
body{
    backgorund-color:white ! important;
}
</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="C:\xampp\htdocs\movie\bootstrap-5.0.0-beta3-dist\bootstrap-5.0.0-beta3-dist\css\bootstrap.min.css" rel="stylesheet">

<body>
    <?php
    $sql = "SELECT * FROM bookingtable";
    $bookingsNo = mysqli_num_rows(mysqli_query($con, $sql));
    $messagesNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedbacktable"));
    $moviesNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM movietable"));
    $userNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users"));
    ?>

    <!--<?php include('header.php'); ?>-->

    <div class="admin-container">

        <?php include('sidebar.php'); ?>
        <div>
            <?php include('header.php'); ?>
            <div class="admin-section admin-section2">
            <div class="container-fluid">
            <div class="row">
            <div class=" col-sm border ">
                        <div class="image col-sm">
                        <img src="../img/film.png" class="float-left " alt="..." >
                        </div>
                        <div class="desc col-sm ">
                            <h1>Movies</h1>
                            <h3>13</h3>
                        </div>
            </div>
            <div class=" col-sm border ">
                <div class="image col-sm">
                    <img src="../img/calendar.png" class="float-left " alt="..." >
                </div>
                <div class="desc col-sm ">
                        <h1>Bookings</h1>
                        <h3>357</h3>
                </div>
            </div>
            <div class="col-sm border ">
            <div class="ct-chart" id="dailySalesChart"></div>
            </div>
                    <div class="admin-section-panel admin-section-panel1">
                        <div class="admin-panel-section-header">
                            <h2>Recent Bookings</h2>
                        </div>
                        <div class="admin-panel-section-content">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Movie ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Theatre</th>
                                    <th>Type</th>
                                    <th>Order ID</th>
                                </tr>
                                <tbody>
                                    <?php

                                    $select = "SELECT * FROM `bookingtable`";
                                    $run = mysqli_query($con, $select);
                                    while ($row = mysqli_fetch_array($run)) {
                                        $bookingid = $row['bookingID'];
                                        $movieID = $row['movieID'];
                                        $bookingFName = $row['bookingFName'];
                                        $bookingLName = $row['bookingLName'];
                                        $mobile = $row['bookingPNumber'];
                                        $email = $row['bookingEmail'];
                                        $date = $row['bookingDate'];
                                        $theatre = $row['bookingTheatre'];
                                        $type = $row['bookingType'];
                                        $ORDERID = $row['ORDERID'];



                                    ?>
                                        <tr align="center">
                                            <td><?php echo $bookingid; ?></td>
                                            <td><?php echo $movieID; ?></td>
                                            <td><?php echo $bookingFName; ?></td>
                                            <td><?php echo $bookingLName; ?></td>
                                            <td><?php echo $mobile; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $theatre; ?></td>
                                            <td><?php echo $type; ?></td>
                                            <td><?php echo $ORDERID; ?></td>
                                        </tr>

                                    <?php }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>

            </div>
        </div>                            
        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>