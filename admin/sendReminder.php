<?php

session_start();
if (!isset($_SESSION['ID'])) {
    header('location:../Login/admin_login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'includes/DBcon.php';


    $qry = "UPDATE member_gofit SET Remainder = '1' where ID=$id";
    $result = mysqli_query($con, $qry);

    if ($result) {
        echo '<script>alert("Notification sent to selected member!")</script>';
        echo '<script>window.location.href = "payment.php";</script>';
    } else {
        echo "ERROR!!";
    }
}
