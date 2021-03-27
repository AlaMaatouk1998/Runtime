<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/header&footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Le Majestic</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="_.js "></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.header {
  padding-left: 15px;
  background: transparent;
  color: #f1f1f1;
  position: absolute;
  z-index: 99;
  width: -webkit-fill-available;
  font-weight: 700;
  overflow: hidden;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  max-height: 95px;
  background-color: rgba(0,0,0,0.5)!important;
  transition: background-color 1s ease !important;
  border-radius: 0px !important;
}

.sticky + .content {
  padding-top: 102px;
}
</style>    
</head>

<body>
        <div class="header" id="myHeader">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-brand">
                        <a href="index.php"><img src="img/majes.png" style="max-width: 150px;padding: 10px;"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navbar-container" style="width: max-content;">          
                        <nav class="navbar">
                            <ul class="navbar-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="schedule.php">Schedule</a></li><!--
                                 <li><a href="TxnStatus.php" target="_blank">Status</a></li> 
                                <li><a href="#">Team</a></li>  -->         
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>    
            </div>
        </div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>
</html>