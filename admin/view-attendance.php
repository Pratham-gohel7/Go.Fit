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
  <link rel="stylesheet" href="../css/uniform.css" />
  <link rel="stylesheet" href="../css/select2.css" />
  <link rel="stylesheet" href="../css/matrix-style.css" />
  <link rel="stylesheet" href="../css/matrix-media.css" />
  <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
  <link href="../font-awesome/css/all.css" rel="stylesheet" />
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
  <?php $page = "attendance";
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="attendance.php" class="current">Manage Attendance</a> </div>
      <h1 class="text-center">Attendance List <i class="fas fa-calendar"></i></h1>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">

          <div class='widget-box'>
            <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
              <h5>Attendance Table</h5>
            </div>
            <div class='widget-content nopadding'>


              <table class='table table-bordered'>
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Plan</th>
                    <th>D.O.J</th>
                    <th>Attendance Count</th>
                  </tr>
                </thead>

                <?php include "includes/DBcon.php";

                $qry = "SELECT * FROM member_gofit WHERE Status = 'Active'";
                $result = mysqli_query($con, $qry);

                $cnt = 1;
                while ($row = mysqli_fetch_array($result)) { ?>

                  <tbody>

                    <td>
                      <div class='text-center'><?php echo $cnt; ?></div>
                    </td>
                    <td>
                      <div class='text-center'><?php echo $row['Name']; ?></div>
                    </td>
                    <td>
                      <div class='text-center'><?php if ($row['Plan'] == 1) {
                                                  echo $row['Plan'] . ' Month';
                                                } else if ($row['Plan'] == '0') {
                                                  echo 'Expired';
                                                } else {
                                                  echo $row['Plan'] . ' Months';
                                                } ?></div>
                    </td>
                    <td>
                      <div class='text-center'><?php echo $row['DOJ']; ?></div>
                    </td>
                    <td>
                      <div class='text-center'><?php if ($row['Attendance_Count'] == 1) {
                                                  echo $row['Attendance_Count'] . ' Day';
                                                } else if ($row['Attendance_Count'] == '0') {
                                                  echo 'None';
                                                } else {
                                                  echo $row['Attendance_Count'] . ' Days';
                                                } ?> </div>
                    </td>
                  </tbody>
                <?php $cnt++;
                } ?>


              </table>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>

  <!--end-main-container-part-->

  <!--Footer-part-->

  <?php include("includes/footer.php  ") ?>

  <!--end-Footer-part-->

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.ui.custom.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/matrix.js"></script>
  <script src="../js/jquery.validate.js"></script>
  <script src="../js/jquery.uniform.js"></script>
  <script src="../js/select2.min.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script src="../js/matrix.tables.js"></script>

  </script>
</body>

</html>