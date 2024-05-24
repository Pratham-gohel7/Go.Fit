<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
  header('location:../Login/admin_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Go.fit Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="../css/fullcalendar.css" />
  <link rel="stylesheet" href="../css/matrix-style.css" />
  <link rel="stylesheet" href="../css/matrix-media.css" />
  <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
  <link href="../font-awesome/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/jquery.gritter.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

  <!--Header-part-->
  <?php include("includes/header.php") ?>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <?php include 'includes/topheader.php' ?>
  <!--close-top-Header-menu-->

  <!--sidebar-menu-->
  <?php $page = 'members-remove';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="remove-member.php" class="current">Remove Members</a> </div>
      <h1 class="text-center">Remove Members <i class="fas fa-group"></i></h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <div class='widget-box'>
            <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
              <h5>Member table</h5>
            </div>
            <div class='widget-content nopadding'>

              <?php

              include "includes/DBcon.php";
              $qry = "select * from member_gofit";
              $cnt = 1;
              $result = mysqli_query($con, $qry);


              echo "<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                <th>sr</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>D.O.J</th>
                <th>Address</th>
                <th>Choosen Package</th>
                <th>Plan</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
              </thead>";

              while ($row = mysqli_fetch_array($result)) {

                echo "<tbody> 
               
            <td><div class='text-center'>" . $cnt . "</div></td>
            <td><div class='text-center'>" . $row['Name'] . "</div></td>
            <td><div class='text-center'>@" . $row['Username'] . "</div></td>
            <td><div class='text-center'>" . $row['Gender'] . "</div></td>
            <td><div class='text-center'>" . $row['Contact'] . "</div></td>
            <td><div class='text-center'>" . $row['DOJ'] . "</div></td>
            <td><div class='text-center'>" . $row['Address'] . "</div></td>
            <td><div class='text-center'>" . $row['Package'] . "</div></td>
            <td><div class='text-center'>" . $row['Plan'] . " Month/s</div></td>
            <td><div class='text-center'>" . $row['Amount'] . " rs </div></td>
            <td><div class='text-center'>" . $row['Status'] . "</div></td>
                <td><div class='text-center'><a href='actions/delete-member.php?id=" . $row['ID'] . "' style='color:#F66;'><i class='fas fa-trash'></i> Remove</a></div></td>
                
              </tbody>";
                $cnt++;
              }
              ?>

              </table>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>

  <!--end-main-container-part-->

  <!--Footer-part-->

  <?php include("includes/footer.php") ?>

  <!--end-Footer-part-->

  <script src="../js/excanvas.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.ui.custom.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.flot.min.js"></script>
  <script src="../js/jquery.flot.resize.min.js"></script>
  <script src="../js/jquery.peity.min.js"></script>
  <script src="../js/fullcalendar.min.js"></script>
  <script src="../js/matrix.js"></script>
  <script src="../js/matrix.dashboard.js"></script>
  <script src="../js/jquery.gritter.min.js"></script>
  <script src="../js/matrix.interface.js"></script>
  <script src="../js/matrix.chat.js"></script>
  <script src="../js/jquery.validate.js"></script>
  <script src="../js/matrix.form_validation.js"></script>
  <script src="../js/jquery.wizard.js"></script>
  <script src="../js/jquery.uniform.js"></script>
  <script src="../js/select2.min.js"></script>
  <script src="../js/matrix.popover.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script src="../js/matrix.tables.js"></script>

  </script>
</body>

</html>