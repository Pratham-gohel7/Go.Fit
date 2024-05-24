<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['ID'])){
header('location:../index.php');	
}

if(isset($_POST['task'])){
$task_desc = $_POST["task"];    
$task_status = $_POST["status"];
$id = $_POST["id"];

include '../DBcon.php';
//code after connection is successfull
//update query
$qry = "update todo_gofit set Task='$task_desc', Status='$task_status' where ID='$id'";
$result = mysqli_query($con,$qry); //query executes

if(!$result){
    echo"ERROR!!";
}else {

    header('Location:../index.php');

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='../index.php'> DASHBOARD </a></h3>";
}
?>