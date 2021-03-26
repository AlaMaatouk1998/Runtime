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
</head>

<body><!--
        <div class="header_menu">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-brand">
                        <a href="index.php"><img src="img/majes.png" style="max-width: 215px;"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navbar-container">          
                        <nav class="navbar">
                            <ul class="navbar-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="schedule.php">Schedule</a></li>
                                 <li><a href="TxnStatus.php" target="_blank">Status</a></li> 
                                <li><a href="#">Team</a></li>           
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>    
            </div>
        </div>  -->
        <header>
<!--<div class="bg-warning py-2">
	<div class="container">
		Some top header info
	</div>
</div>-->
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <div class="navbar-brand">
        <a href="index.php"><img src="img/majes.png" style="max-width: 215px;"></a>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">	
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="index.php"> Home</a></li>
      <li class="nav-item"><a class="nav-link" href="schedule.php"> Schedule</a></li>
      <li class="nav-item"><a class="nav-link" href="contact-us.php"> Contact</a></li>
    </ul>
  </div> <!-- navbar-collapse.// -->
</div> <!-- container.// -->
</nav>
</header>
<script>
///////////////// fixed menu on scroll for desktop
if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if  
</script>
</body>
</html>