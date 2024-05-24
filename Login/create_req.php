<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create An Account</title>
</head>
<body>

<form role="form" action="../members/index.php" method="POST">
    <?php
    include('../DBcon.php');

    if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['userpass'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $packages = $_POST['package'];
    $plan = $_POST['plan'];
    $doj = date("Y-m-d");
    $amount = $_POST['pay'];
    $paid_date = date("Y-m-d");

    $password = md5($password);

    $qry = "INSERT INTO member_gofit(Name,Username,Password,DOJ,Gender,Package,Amount,Plan,Address,Contact,Paid_Date) values ('$name','$username','$password','$doj','$gender','$packages','$amount','$plan','$address','$contact','$paid_date')";

    $result = mysqli_query($con,$qry);

    if(!$result){
        ?>
        <script>
        alert("Error you missed something :( ");
        </script>
        <?php
    }
    else{
        ?>
        <script>
        confirm("You have successfully creted your account :) ");
        </script>
        <?php
        header("location:../members/index.php");
    }

    }
    ?>
</body>
</html>