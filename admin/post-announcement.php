<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
    header('location:../Login/admin_login.php');
}
?>

<html lang="en">

<head>
    <title>Go.fit Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/fullcalendar.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../font-awesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <!--Header-part-->
    <?php include("includes/header.php") ?>
    <!--close-Header-part-->

    <?php include 'includes/topheader.php' ?>
    <!--close-top-Header-menu-->

    <!--sidebar-menu-->
    <?php include 'includes/sidebar.php' ?>
    <!--sidebar-menu-->

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="#" class="current">Announcement</a> </div>
            <h1>Announcement</h1>
        </div>
        <form role="form" action="index.php" method="POST">
            <?php

            if (isset($_POST['message'])) {
                $message = $_POST["message"];
                $date = date("Y-m-d");

                include 'includes/DBcon.php';
                //code after connection is successfull
                $qry = "insert into announcements(Message,Date) values ('$message','$date')";
                $result = mysqli_query($con, $qry); //query executes

                if (!$result) {
                    echo "<div class='container-fluid'>";
                    echo "<div class='row-fluid'>";
                    echo "<div class='span12'>";
                    echo "<div class='widget-box'>";
                    echo "<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
                    echo "<h5>Error Message</h5>";
                    echo "</div>";
                    echo "<div class='widget-content'>";
                    echo "<div class='error_ex'>";
                    echo "<h1 style='color:maroon;'>Error 404</h1>";
                    echo "<h3>Error occured while entering your details</h3>";
                    echo "<p>Please Try Again</p>";
                    echo "<a class='btn btn-warning btn-big'  href='edit-member.php'>Go Back</a> </div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo ("<script>location.href = 'index.php';</script>");
                }
            } else {
                echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
            }


            ?>




        </form>
    </div>
    </div>
    </div>
    </div>

    <!--end-main-container-part-->

    <!--Footer-part-->

    <?php include("includes/footer.php") ?>

    <!--end-Footer-part-->

    <script src="../js/excanvas.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.ui.custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.flot.min.js"></script>
    <script src="../js/jquery.flot.resize.min.js"></script>
    <script src="../js/jquery.peity.min.js"></script>
    <script src="../js/fullcalendar.min.js"></script>
    <script src="../js/matrix.js"></script>
    <script src="../js/matrix.dashboard.js"></script>
    <script src="../js/jquery.gritter.min.js"></script>
    <script src="../js/matrix.interface.js"></script>
    <script src="../js/matrix.chat.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/matrix.form_validation.js"></script>
    <script src="../js/jquery.wizard.js"></script>
    <script src="../js/jquery.uniform.js"></script>
    <script src="../js/select2.min.js"></script>
    <script src="../js/matrix.popover.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/matrix.tables.js"></script>

    </script>
</body>

</html>