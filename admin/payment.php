<?php
session_start();
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
  <?php $page = 'payment';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="payment.php" class="current">Payments</a> </div>
      <h1 class="text-center">Registered Member's Payment <i class="fas fa-group"></i></h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <div class='widget-box'>
            <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
              <h5>Member's Payment table</h5>
              <form id="custom-search-form" role="search" method="POST" action="search-result.php" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                  <input type="text" class="search-query" placeholder="Search" name="search" required>
                  <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>

            <div class='widget-content nopadding'>

              <?php

              include "includes/DBcon.php";
              $qry = "SELECT * FROM member_gofit";
              $cnt = 1;
              $result = mysqli_query($con, $qry);


              echo "<table class='table table-bordered data-table table-hover'>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Member</th>
                  <th>Last Payment Date</th>
                  <th>Amount</th>
                  <th>Choosen Service</th>
                  <th>Plan</th>
                  <th>Action</th>
              
                </tr>
              </thead>";

              while ($row = mysqli_fetch_array($result)) { ?>

                <tbody>

                  <td>
                    <div class='text-center'><?php echo $cnt; ?></div>
                  </td>
                  <td>
                    <div class='text-center'><?php echo $row['Name'] ?></div>
                  </td>
                  <td>
                    <div class='text-center'><?php echo ($row['DOJ'] == 0 ? "New Member" : $row['DOJ']) ?></div>
                  </td>

                  <td>
                    <div class='text-center'><?php echo $row['Amount'] . " rs" ?></div>
                  </td>
                  <td>
                    <div class='text-center'><?php echo $row['Package'] ?></div>
                  </td>
                  <td>
                    <div class='text-center'><?php echo $row['Plan'] . " Month/s" ?></div>
                  </td>
                  <td>
                    <div class='text-center'><a href='sendReminder.php?id=<?php echo $row['ID'] ?>'><button class='btn btn-danger btn'>Alert</button></a></div>
                  </td>
                </tbody>

              <?php $cnt++;
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

  <style>
    #custom-search-form {
      margin: 0;
      margin-top: 5px;
      padding: 0;
    }

    #custom-search-form .search-query {
      padding-right: 3px;
      padding-right: 4px \9;
      padding-left: 3px;
      padding-left: 4px \9;
      /* IE7-8 doesn't have border-radius, so don't indent the padding */

      margin-bottom: 0;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
    }

    #custom-search-form button {
      border: 0;
      background: none;
      /** belows styles are working good */
      padding: 2px 5px;
      margin-top: 2px;
      position: relative;
      left: -28px;
      /* IE7-8 doesn't have border-radius, so don't indent the padding */
      margin-bottom: 0;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
    }

    .search-query:focus+button {
      z-index: 3;
    }
  </style>


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