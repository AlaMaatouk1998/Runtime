<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<title>update</title>
</head>

<body>
<?php

include "config.php";
$id = $_GET['id']; // get id through query string
$setting = "select * from bookingtable where bookingID='$id'";
$qry = mysqli_query($con, $setting); // select query

// while($row = mysqli_fetch_array($qry)){
//     $First_Name = $row['bookingFName'];
//     $Last_Name = $row['bookingLName'];
//     $phone_mobile = $row['bookingPNumber'];
//     $email1 = $row['bookingEmail'];
// }

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    $edit = mysqli_query($con, "update bookingtable set bookingFName='$firstname', bookingLName='$lastname',bookingPNumber='$phone',bookingEmail='$email',amount='$amount' where bookingID='$id'");

    if ($edit) {
        mysqli_close($con); // Close connection
        header("location:view.php"); // redirects to all records page
        exit;
    } else {
        echo "error";
    }
}
?>

    <?php include('header.php'); ?>

    <div class="admin-container">
        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">


                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>UPDATE DATA</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <div class="booking-form-container">
                        <form method="POST">
                            <input type="text" name="first" value="<?php echo $data['bookingFName'] ?>" placeholder="Enter First Name" Required>
                            <input type="text" name="last" value="<?php echo $data['bookingLName'] ?>" placeholder="Enter Last Name" Required>
                            <input type="text" name="number" value="<?php echo $data['bookingPNumber'] ?>" placeholder="Enter Last Name" Required>
                            <input type="text" name="email" value="<?php echo $data['bookingEmail'] ?>" placeholder="Enter Age" Required>
                            <input type="text" name="amount" value="<?php echo $data['amount'] ?>" placeholder="Enter Amount" Required>
                             <input type="submit" name="update" class="form-btn" value="Update">
                             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    
</body>

</html>