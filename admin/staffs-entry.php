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
  <!--top-Header-menu-ends-->


  <!--sidebar-menu-->
  <?php $page = 'staff-management';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="staffs.php">Staffs</a> <a href="staffs-entry.php" class="current">Staff Entry</a> </div>
      <h1 class="text-center">GYM's Staff Entry Form <i class="fas fa-briefcase"></i></h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="fas fa-briefcase"></i> </span>
              <h5>Staff Details</h5>
            </div>
            <div class="widget-content nopadding">
              <form id="form-wizard" action="add-staffs.php" class="form-horizontal" method="POST">
                <div id="form-wizard-1" class="step">

                  <div class="control-group">
                    <label class="control-label">Enter Staff's Fullname</label>
                    <div class="controls">
                      <input id="fullname" type="text" name="fullname" required />
                    </div>
                  </div>



                  <div class="control-group">
                    <label class="control-label">Enter a Username</label>
                    <div class="controls">
                      <input id="username" type="text" name="username" />
                    </div>
                  </div>

                  <div id="form-wizard-2" class="step">
                    <div class="control-group">
                      <label class="control-label">Email ID</label>
                      <div class="controls">
                        <input id="email" type="text" name="email" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Address</label>
                      <div class="controls">
                        <input id="address" type="text" name="address" required />
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Designation</label>
                      <div class="controls">
                        <select name="designation" id="designation">
                          <option value="Cashier">Cashier</option>
                          <option value="Trainer">Trainer</option>
                          <option value="GYM Assistant">GYM Assistant</option>
                          <option value="Manager">Manager</option>
                        </select>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Gender</label>
                      <div class="controls">
                        <select name="gender" id="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Contact Number</label>
                      <div class="controls">
                        <input id="contact" type="number" name="contact" required />
                      </div>
                    </div>

                  </div>

                  <div class="form-actions">
                    <input id="back" class="btn btn-primary" type="reset" value="Back" />
                    <input id="next" class="btn btn-primary" type="submit" value="Proceed Next Step" />
                    <div id="status"></div>
                  </div>
                  <div id="submitted"></div>
              </form>
            </div>
          </div>
          <!--end of widget box-->
        </div>
        <!--end of span 12 -->
      </div>
    </div>
  </div>
  <!--Footer-part-->
  <?php include("includes/footer.php") ?>
  <!--end-Footer-part-->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery.ui.custom.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.validate.js"></script>
  <script src="../js/jquery.wizard.js"></script>
  <script src="../js/matrix.js"></script>
  <script src="../js/matrix.wizard.js"></script>
</body>

</html>