<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
     header('location:../../Login/admin_login.php');
}

include('../includes/DBcon.php');

$user_id = $_GET['id'];


$sql = "DELETE FROM attendance WHERE ID = '$user_id'";
$res = $con->query($sql);


$attend = "select * from member_gofit where ID = '$user_id'";
$result_attend = $con->query($attend);
$row_attend = mysqli_fetch_array($result_attend);
$cnt = $row_attend['Attendance_Count'];
$attend_count = $cnt - 1;
$sql1 = "update member_gofit set Attendance_Count ='$attend_count' where ID='$user_id'";
$con->query($sql1);
?>
<script>
     alert("Delete Successfully");
     window.location = "../attendance.php";
</script>