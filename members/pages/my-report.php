<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if (!isset($_SESSION['ID'])) {
  header('location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Go.fit Member</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="../css/fullcalendar.css" />
  <link rel="stylesheet" href="../css/matrix-style.css" />
  <link rel="stylesheet" href="../css/matrix-media.css" />
  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/jquery.gritter.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

  <!--Header-part-->
  <?php include("../includes/header.php") ?>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <?php include '../includes/topheader.php' ?>
  <!--close-top-Header-menu-->

  <!--sidebar-menu-->
  <?php $page = "report";
  include '../includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <?php
  include 'DBcon.php';
  $qry = "select * from member_gofit WHERE ID='" . $_SESSION['ID'] . "'";
  $result = mysqli_query($con, $qry);
  while ($row = mysqli_fetch_array($result)) {
  ?>


    <!--main-container-part-->
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="my-report.php" class="current">My Report</a> </div>
      </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">

              <div class="widget-content">
                <div class="row-fluid">
                  <div class="span4">
                    <table class="">
                      <tbody>
                        <tr>
                          <td>
                            <h4>Go.fit Club</h4>
                          </td>
                        </tr>
                        <tr>
                          <td>Veraval, Gujarat</td>
                        </tr>

                        <tr>
                          <td>Tel: 9898989898</td>
                        </tr>
                        <tr>
                          <td>Email: support@go_fitgym.com</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="span8">
                    <table class="table table-bordered table-invoice-full">
                      <thead>
                        <tr>
                          <th class="head0">Membership ID</th>
                          <th class="head1">Package Taken</th>
                          <th class="head0 right">My Plans (Upto)</th>
                          <th class="head1 right">Address</th>
                          <th class="head0 right">Charge</th>
                          <th class="head0 right">Attendance Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="text-center">GFC-SS-<?php echo $row['ID']; ?></div>
                          </td>
                          <td>
                            <div class="text-center"><?php echo $row['Package']; ?></div>
                          </td>
                          <td>
                            <div class="text-center"><?php echo $row['Plan']; ?> Month/s</div>
                          </td>
                          <td>
                            <div class="text-center"><?php echo $row['Address']; ?></div>
                          </td>
                          <td>
                            <div class="text-center"><?php echo $row['Amount'] . " rs"; ?></div>
                          </td>
                          <td>
                            <div class="text-center"><?php echo $row['Attendance_Count']; ?> Day/s</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered table-invoice-full">
                      <tbody>
                        <tr>
                          <td class="msg-invoice" width="55%">
                            <div class="text-center">
                              <h4>Last Payment Done: <?php echo $row['Amount']; ?>/-</h4>
                              <em><a href="#" class="tip-bottom" title="Registration Date" style="font-size:15px;">Member Since: <?php echo $row['DOJ']; ?> </a></em>
                          </td>
                  </div>
                  </tr>
                  </tbody>
                  </table>
                </div> <!-- end of span 12 -->

              </div>

              <div class="row-fluid">
                <div class="pull-left">
                  <h4>Dear Member <?php echo $row['Name']; ?>,<br /> <br />Your Membership is currently <?php echo $row['Status']; ?>! <br /></h4>
                  <p>Thank you for choosing our services.<br />- on the behalf of whole team</p>
                </div>
                <div class="pull-right">
                  <h4><span>Approved By:</h4>
                  <img src="../img/report/stamp.png" width="124px;" alt="">
                  <p class="text-center">Note:AutoGenerated</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
  }
    ?>
    </div>
    <div class="text-center">
      <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
    </div>
    </div>

    </div>
    <!--end-main-container-part-->

    <!--Footer-part-->

    <?php include("../includes/footer.php") ?>

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

</body>

</html>