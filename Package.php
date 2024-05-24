<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home/css/style.css">
    <link rel="stylesheet" href="Home/css/Packages.css">
    <title>Packages Go.fit</title>
    <style>
        #package{
            color: rgba(236, 30, 30, 0.76);
        }
    </style>
</head>

<body style="background-image: url(media/pics/dumbbell-gd395bb068_1920.jpg);">
    <?php
    include("Home/header.php")
    ?>

    <div class="container1">
        <div class="diamond">
            <h1>Diamond</h1>
            <ul>
                <li>Daily access to the gym from 7 am to 12am</li>
                <li>Get trained with certified trainer</li>
                <li>Access to all the equipments</li>
                <li>Free nutrition guide</li>
                <li>Guidance through video</li>
                <li>Access to members page to set todo list</li>
                <li>Access to free WIFI</li>
                <li>Get monthly progress report</li>
            </ul>
            <div class="pbtn">
                <a href="Login/createAccount.php">Buy Now</a>
            </div>
        </div>

        <div class="gold">
            <h1>Gold</h1>
            <ul>
                <li>Daily access to the gym from 7 am to 12am</li>
                <li>Get trained with certified trainer</li>
                <li>Access to all the equipments</li>
                <li>Guidance through video</li>
                <li>Access to members page to set todo list</li>
                <li>Access to free WIFI</li>
                <li>Get monthly progress report</li>
            </ul>
            <div class="pbtn" style="left: 37rem;">
                <a href="Login/createAccount.php">Buy Now</a>
            </div>
        </div>

        <div class="silver">
            <h1>Silver</h1>
            <ul>
                <li>Daily access to the gym from 7 am to 12am</li>
                <li>Access to all the equipments</li>
                <li>Access to members page to set todo list</li>
                <li>Access to free WIFI</li>    
                <li>Get monthly progress report</li>
            </ul>
            <div class="pbtn"  style="left: 64rem;">
                <a href="Login/createAccount.php">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="footerr" style="background-color: black;">
        <?php include("Home/footer.php") ?>
    </div>
</body>

</html>