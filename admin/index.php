<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link  rel="stylesheet" href="./admin.css">
    <link href="C:\xampp\htdocs\movie\bootstrap-5.0.0-beta3-dist\bootstrap-5.0.0-beta3-dist\css\bootstrap.min.css" rel="stylesheet">
    <style>
        *{
            font-family:poppins;
        }
        </style>

</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>
                <div class="field">
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div class="field">
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" />
                </div>
                <div style="padding-left: 47%;margin: 0%;padding-bottom: 3%;">
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include "config.php";

if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: admin.php');
        } else {
            echo "Invalid username and password";
        }
    }
}
?>