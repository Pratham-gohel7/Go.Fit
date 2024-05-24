<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
  header('location:../../Login/admin_login.php');
}

include('../includes/DBcon.php');
date_default_timezone_set('Asia/Calcutta');
$current_date = date('Y-m-d');
$exp_date_time = explode(' ', $current_date);
$curr_date =  $exp_date_time['0'];

$user_id = $_GET['id'];


$sql = "INSERT INTO attendance (Mem_ID, Curr_Date, Present)
   VALUES ('$user_id','$curr_date',1)";


if ($con->query($sql) === TRUE) {
  $attend_count = 0;
  $attend = "select * from member_gofit where ID = '$user_id'";
  $result_attend = $con->query($attend);
  $row_attend = mysqli_fetch_array($result_attend);
  $cnt = $row_attend['Attendance_Count'];
  $attend_count = $attend_count + 1;
  $sql1 = "UPDATE member_gofit SET Attendance_Count = Attendance_Count + '$attend_count' where ID='$user_id'";
  $con->query($sql1);

?>
  <script type="text/javascript">
    confirm("Attendance Added")
    window.location = "../attendance.php";
  </script>
<?php
} else {

  $_SESSION['error'] = 'Something Went Wrong';
?>
  <script type="text/javascript">
    window.location = "../attendance.php";
  </script>
<?php
}


//}





//}

?>