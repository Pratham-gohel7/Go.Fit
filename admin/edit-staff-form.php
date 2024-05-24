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
  <?php $page = 'staff-management';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <?php
  include 'includes/DBcon.php';
  $id = $_GET['id'];
  $qry = "select * from staff_gofit where ID='$id'";
  $result = mysqli_query($con, $qry);
  while ($row = mysqli_fetch_array($result)) {
  ?>

    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="staffs.php" class="tip-bottom">Staffs</a> <a href="edit-staff-form.php" class="current">Edit Staff Records</a> </div>
        <h1 class="text-center">Update Staff's Detail <i class="fas fa-briefcase"></i></h1>
      </div>
      <div class="container-fluid">
        <hr>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                <h5>Staff-Details</h5>
              </div>
              <div class="widget-content nopadding">

                <form action="edit-staff-req.php" method="POST" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">Full Name :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="fullname" value='<?php echo $row['Name']; ?>' />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Username :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="username" value='<?php echo $row['Username']; ?>' />
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Email :</label>
                    <div class="controls">
                      <input type="email" class="span11" name="email" value='<?php echo $row['Email']; ?>' />
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Gender :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="gender" value='<?php echo $row['Gender']; ?>' />
                    </div>
                  </div>



              </div>


              <div class="widget-content nopadding">
                <div class="form-horizontal">
                </div>
                <div class="widget-content nopadding">

                </div>


              </div>
            </div>

          </div>

          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                <h5>Staff-Details</h5>
              </div>
              <div class="widget-content nopadding">
                <div class="form-horizontal">
                  <div class="control-group">
                    <label for="normal" class="control-label">Contact Number</label>
                    <div class="controls">
                      <input type="number" id="mask-phone" name="contact" value='<?php echo $row['Contact']; ?>' class="span8 mask text">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Address :</label>
                    <div class="controls">
                      <input type="text" class="span8" name="address" value='<?php echo $row['Address']; ?>' />
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


                </div>
                <div class="form-actions text-center">
                  <!-- user's ID is hidden here -->
                  <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>

                </form>

              </div>
            <?php
          }
            ?>


            </div>

          </div>
        </div>


      </div>

      <div class="row-fluid">

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

</body>

</html>