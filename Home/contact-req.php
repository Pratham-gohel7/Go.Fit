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

<form role="form" action="../Contact.php" method="POST">
    <?php
    include('../DBcon.php');

    if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];
    $date = date("Y-m-d");

    $qry = "INSERT INTO contact_gofit(Name,Email,Mobile,Subject,Comment,Date) values ('$name','$email','$mobile','$subject','$comment','$date')";

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
        confirm("Your Feedback Has Been Sent Successfully");
        </script>
        <?php
        header("location:../Contact.php");
    }

    }
    ?>
</body>
</html>