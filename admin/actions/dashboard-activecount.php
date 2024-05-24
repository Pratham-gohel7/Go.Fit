<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gofit";

$con=mysqli_connect($servername,$uname,$pass,$db);

if(!$con){
    die("Connection Failed");
}

$sql = "SELECT * FROM member_gofit WHERE Status ='Active'";
                $query = $con->query($sql);

                echo "$query->num_rows";
?>