<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gofit";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$con){
    die("Connection Failed");
}

$sql = "SELECT * FROM announcements";
                $query = $con->query($sql);

                echo "$query->num_rows";
?>