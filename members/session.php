<?php
//Start session
// session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['Mem_ID']) || (trim($_SESSION['Mem_ID']) == '')) {
    header("location:../index.php");
    exit();
}
$session_id=$_SESSION['Mem_ID'];

?>