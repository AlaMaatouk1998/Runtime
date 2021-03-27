<!DOCTYPE html>
<html lang="en">
<?php
$id = $_POST['id'];
//conditions

include "connection.php";
$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id";
$movieImageById = mysqli_query($con, $movieQuery);
$row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book <?php echo $row['movieTitle']; ?> Now</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css%22%3E
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E</script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js%22%3E</script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js%22%3E</script>
    <script src="_.js "></script>
</head>

<body style="background-color:#6e5a11;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section2" style="
    width: 300px;">
            <a href="index.php"><img src="img/majes.png" style="max-width: 150px;"></a>
</div><div class="booking-panel-section booking-panel-section1">
            <h1>RESERVE YOUR TICKET</h1>
        </div>
        
        <div class="booking-panel-section booking-panel-section3">
        <div class="movie-box">
                <?php
                echo '<img src="' . $row['movieImg'] . '" alt="">';
                ?>
            </div>
        </div>
        <div class="row">
<div class="booking-panel-section booking-panel-section4">
<div class="title" style="color:white">VICE</div>
<div class="col-6">
<div class="movie-information">
                <table>
                    <tr>
                        <td>GENGRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                    <tr>
                        <td>PRICE</td>
                        <td><?php $aDoor = $_POST['lname'];
//   if(empty($aDoor)) 
//   {
//     echo("You didn't select any buildings.");
//   } 
   $i= explode(',',$aDoor[0])     ;
   $N = count($i);
   $str=implode(",", $i);

   
   echo ($N * 10) ?> 
                </tbody></table>

            </div>
 </div>  
<div class="col-6">
            <div class="booking-form-container">
                <form action="verify.php" method="POST">


                    <select name="theatre" required="">
                        <option style="color:gray" value="" disabled="" selected="">THEATRE</option>
                        <option style="color:gray"value="main-hall">Main Hall</option>
                        <option style="color:gray"value="vip-hall">VIP Hall</option>
                        <option style="color:gray"value="private-hall">Private Hall</option>
                    </select>

                    <select name="type" required="">
                        <option style="color:gray"value="" disabled="" selected="">TYPE</option>
                        <option style="color:gray"value="3d">3D</option>
                        <option style="color:gray"value="2d">2D</option>
                        <option style="color:gray"value="imax">IMAX</option>
                        <option style="color:gray"value="7d">7D</option>
                    </select>

                    <select name="date" required="">
                        <option style="color:gray" value="" disabled="" selected="">DATE</option>
                        <option style="color:gray" value="12-3">March 12,2019</option>
                        <option style="color:gray" value="13-3">March 13,2019</option>
                        <option style="color:gray" value="14-3">March 14,2019</option>
                        <option style="color:gray" value="15-3">March 15,2019</option>
                        <option style="color:gray" value="16-3">March 16,2019</option>
                    </select>

                    <select name="hour" required="">
                        <option style="color:gray" value="" disabled="" selected="">TIME</option>
                        <option style="color:gray" value="09-00">09:00 AM</option>
                        <option style="color:gray" value="12-00">12:00 AM</option>
                        <option style="color:gray" value="15-00">03:00 PM</option>
                        <option style="color:gray" value="18-00">06:00 PM</option>
                        <option style="color:gray" value="21-00">09:00 PM</option>
                        <option style="color:gray" value="24-00">12:00 PM</option>
                    </select>

                    <input style="color:gray" placeholder=" 웃  First Name" type="text" name="fName" required="">
                    <input style="color:gray" placeholder=" 웃  Last Name" type="text" name="lName">

                    <input style="color:gray" placeholder="✆  Phone Number" type="text" name="pNumber" required="">    
                    <input style="color:gray" placeholder="⌧  email" type="email" name="email" required="">
                    <input type="hidden" name="movie_id" value="5">
                    <input type="hidden" name="seat_table" value="Q6">


                    <button href="../index.php" type="submit" value="save" name="submit" class="form-btn">Get Your ticket 
                    </button>


                </form>

               
            </div>
</div>

</div>
      
</div>
    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>



</body>
</html>
