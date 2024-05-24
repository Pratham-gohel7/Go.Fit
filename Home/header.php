<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Header</title>
</head>

<body>
    <div class="header">
        <img src="media/TransparentLogo.png" alt="gofit">

        <div class="navbar">
            <a href="index.php" id="home">Home</a>
            <a href="Package.php" id="package">Packages</a>
            <a href="Facalities.php" id="facalities">Facalities</a>
            <a href="Contact.php" id="contact">Contact Us</a>
        </div>

        <div class="icons">
            <div id="menubar" class="fas fa-bars"></div>
            <a href="members/index.php">Sign in</a>
        </div>
    </div>



    <script>
        let menubar = document.querySelector('#menubar');
        let mynav = document.querySelector('.navbar');



        menubar.onclick = () => {
            menubar.classList.toggle('fa-times')
            mynav.classList.toggle('active')
        }

        document.querySelector('#loginbtn').onclick = () => {
            document.querySelector('.login-form').classList.toggle('active');
        }
        document.querySelector('#closeloginform').onclick = () => {
            document.querySelector('.login-form').classList.remove('active');
        }
    </script>
</body>

</html>