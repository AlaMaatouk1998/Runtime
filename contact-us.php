<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="_.js "></script>
</head>

<body>
    <?php
    include "connection.php";
    ?>
    <header></header>
    <div class="contact-us-container">
        <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?width=100%25&height=500&hl=en&q=Rue%20de%20Tunis,%20Bizerte%207000+()&t=&z=19&ie=UTF8&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div><div class="contact-us-section contact-us-section1">
            <h5>Contact Us</h5>
            
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required=""><br>
                <input placeholder="Last Name" name="lName"><br>
                <input placeholder="E-mail Address" name="eMail" required=""><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="1" cols="30" required=""></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                            </form>

            <h5>Address and Info</h5>
    <div class="info">
        <i class="icon_pin">
        </i>Rue de Sfax, Bizerte
    </div>
    <div class="info"><i class="icon_mobile"></i>+216 98 782 630</div>
  </div>

        
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>