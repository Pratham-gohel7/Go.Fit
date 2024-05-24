<?php
//Database connection
    $con = mysqli_connect("localhost", "root", "", "gofit");

//Checking if any Error occurs

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
