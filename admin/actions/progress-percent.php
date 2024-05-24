<?php

$servername="localhost";
$uname="root";
$pass="";
$db="gofit";

$con=mysqli_connect($servername,$uname,$pass,$db);

if(!$con){
    die("Connection Failed");
}

$sql = "SELECT SUM( (Curr_Weight - Ini_Weight) / Ini_Weight * 100) FROM member_gofit WHERE ID='$id'";
        $amountsum = mysqli_query($conn, $sql);
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo (int)$row_amountsum['SUM( (Curr_Weight - Ini_Weight) / Ini_Weight * 100)'];

                
?>