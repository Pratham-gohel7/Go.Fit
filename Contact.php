<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home/css/style.css">
    <link rel="stylesheet" href="Home/css/contact.css">
    <title>Contact Go.fit</title>
    <style>
        #contact{
        color: rgba(236, 30, 30, 0.76);
    }
    </style>
</head>

<body  style="background-color: white;">
    <?php include("Home/header.php") ?>

    <div class="home">
        <div class="main">
            <div class="inner-content">
                <h1>Contact Us</h1>
                <p>Tell us your feedback, we will definately improve it</p>

                <div class="btn">
                    <a href="Package.php">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="center">
            <div class="contact_form">
                <form action="Home/contact-req.php" method="POST">
                    <input type="text" name="name" id="name" placeholder="Enter Name" required>
                    <input type="email" name="email" id="email" placeholder="Enter E-mail" required>
                    <input type="number" name="mobile" id="mobile" placeholder="Enter Mobile Number" required>
                    <select name="subject" id="subject" required>
                        <option value disable="disable">Select An Subject</option>
                        <option value="general">General</option>
                        <option value="plan">Subscription Plan</option>
                        <option value="website">Website</option>
                        <option value="care">Customer Care</option>
                        <option value="trainer">Trainer</option>
                    </select>
                    <textarea name="comment" id="comment" cols="20" rows="5" placeholder="comment"></textarea>
                    <button class="conbtn">SUBMIT</button>
                </form>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14907.308921077465!2d70.3414196078125!3d20.9192695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bfd3235c69a20f9%3A0x6eb18b7a6c71d3a8!2sLife%20Fitness!5e0!3m2!1sen!2sin!4v1661684787603!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </div>
        </div>
    </div>
    <div class="footerrr" style="background-color: black;">
        <?php include("Home/footer.php")?>        
    </div>
</body>

</html>