<?php
include "config.php";

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
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
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link  rel="stylesheet" href="./admin.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="C:\xampp\htdocs\movie\bootstrap-5.0.0-beta3-dist\bootstrap-5.0.0-beta3-dist\css\bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $sql = "SELECT * FROM bookingTable";
    $bookingsNo = mysqli_num_rows(mysqli_query($con, $sql));
    $messagesNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM feedbackTable"));
    $moviesNo = mysqli_num_rows(mysqli_query($con, "SELECT * FROM movieTable"));
    ?>


    <div class="admin-container">
    <?php include('sidebar.php'); ?>
    <div>
        <?php include('header.php'); ?>
            <div class="admin-section admin-section2">
                <div class="admin-section-column">
                    <div class="admin-section-panel admin-section-panel2">
                        <div class="admin-panel-section-header">
                            <h2>Movies</h2>
                            <i class="fas fa-film" ></i>
                        </div>
                        <form action="" method="POST">
                            <input placeholder="Title" type="text" name="movieTitle" required>
                            <input placeholder="Genre" type="text" name="movieGenre" required>
                            <input placeholder="Duration" type="number" name="movieDuration" required>
                            <input placeholder="Release Date" type="date" name="movieRelDate" required>
                            <input placeholder="Director" type="text" name="movieDirector" required>
                            <input placeholder="Actors" type="text" name="movieActors" required>
                            <input placeholder="Price" type="text" name="price" required><br />
                            <input type="textarea" rows="4" placeholder="Movie's Descreption" >
                            <br>
                            <label>Add Poster</label>
                            <input class="form-control-file"type="file" >
                            <button type="submit" value="submit" name="submit" class="form-btn">Add Movie</button>
                            <?php
                            if (isset($_POST['submit'])) {
                                $insert_query = "INSERT INTO 
                                movieTable (  movieImg,
                                                movieTitle,
                                                movieGenre,
                                                movieDuration,
                                                movieRelDate,
                                                movieDirector,
                                                movieActors,
                                                mainhall,
                                                viphall,
                                                privatehall)
                                VALUES (        'img/" . $_POST['movieImg'] . "',
                                                '" . $_POST["movieTitle"] . "',
                                                '" . $_POST["movieGenre"] . "',
                                                '" . $_POST["movieDuration"] . "',
                                                '" . $_POST["movieRelDate"] . "',
                                                '" . $_POST["movieDirector"] . "',
                                                '" . $_POST["movieActors"] . "',
                                                '" . $_POST["mainhall"] . "',
                                                '" . $_POST["viphall"] . "',
                                                '" . $_POST["privatehall"] . "')";
                            $rs= mysqli_query($con, $insert_query);
                            if ($rs) {
                                echo "<script>alert('Sussessfully Submitted');
                                    window.location.href='addmovie.php';</script>";
                            }
                            }
                            ?>
                        </form>
                    </div>
                    <div class="admin-section-panel admin-section-panel2">
                        <div class="admin-panel-section-header">
                            <h2>Recent Movies</h2>
                        </div>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>MovieID</th>
                                <th>MovieTitle</th>
                                <th>Movie_Genre</th>
                                <th>Release_date</th>
                                <th>Director</th>
                                <th>More</th>
                                
                            </tr>
                            <tbody>
                                <?php
                                $host = "localhost"; /* Host name */
                                $user = "root"; /* User */
                                $password = ""; /* Password */
                                $dbname = "cinema_db"; /* Database name */

                                $con = mysqli_connect($host, $user, $password, $dbname);
                                $select = "SELECT * FROM `movietable`";
                                $run = mysqli_query($con, $select);
                                while ($row = mysqli_fetch_array($run)) {
                                    $ID = $row['movieID'];
                                    $title = $row['movieTitle'];
                                    $genere = $row['movieGenre'];
                                    $releasedate = $row['movieRelDate'];
                                    $movieactor = $row['movieDirector'];
                                ?>
                                    <tr align="center">
                                        <td><?php echo $ID; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $genere; ?></td>
                                        <td><?php echo $releasedate; ?></td>
                                        <td><?php echo $movieactor; ?></td>
                                        <!--<td><?php echo  "<a href='deletemovie.php?id=" . $row['movieID'] . "'>delete</a>"; ?></td>-->
                                        <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-danger"><?php echo  "<a href='deletemovie.php?id=" . $row['movieID'] . "'>delete</a>"; ?></button></td>
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

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>