<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gofit";

$con=mysqli_connect($servername,$uname,$pass,$db);

if(!$con){
    die("Connection Failed");
}

$sql = "SELECT * FROM staff_gofit";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>