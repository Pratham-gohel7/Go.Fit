<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
    header('location:../../Login/admin_login.php');
  }

if(isset($_GET['id'])){
$id=$_GET['id'];

include '../includes/DBcon.php';


$qry="delete from member_gofit where ID=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:../remove-member.php');
}else{
    echo"ERROR!!";
}
}
