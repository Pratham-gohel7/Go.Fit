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
  <?php $page = 'members-update';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->

  <?php
  include 'includes/DBcon.php';
  $id = $_GET['id'];
  $qry = "select * from member_gofit where ID='$id'";
  $result = mysqli_query($con, $qry);
  while ($row = mysqli_fetch_array($result)) {
  ?>

    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="#" class="tip-bottom">Manamge Members</a> <a href="#" class="current">Add Members</a> </div>
        <h1>Update Member Details</h1>
      </div>
      <div class="container-fluid">
        <hr>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                <h5>Personal-info</h5>
              </div>
              <div class="widget-content nopadding">

                <form action="edit-member-req.php" method="POST" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">Full Name :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="fullname" value='<?php echo $row['Name'] ?>' placeholder="" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Username :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="username" value='<?php echo $row['Username'] ?>' placeholder="" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Password :</label>
                    <div class="controls">
                      <input type="password" class="span11" name="password" placeholder="**********" disabled="true" />
                      <span class="help-block">Note: you cannot update password. </span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Gender :</label>
                    <div class="controls">
                      <select name="gender" required="required" id="select">
                        <option value='<?php echo $row['Gender'] ?>'><?php echo $row['Gender'] ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">D.O.J :</label>
                    <div class="controls">
                      <input type="date" name="doj" class="span11" value='<?php echo $row['DOJ'] ?>' />
                      <span class="help-block">Date of joining</span>
                    </div>
                  </div>

                  <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                    <h5>Contact Details</h5>
                  </div>
                  <div class="form-horizontal">
                    <div class="control-group">
                      <label for="normal" class="control-label">Contact Number :</label>
                      <div class="controls">
                        <input type="number" id="mask-phone" name="contact" value='<?php echo $row['Contact'] ?>' placeholder="" class="span8 mask text">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Address :</label>
                      <div class="controls">
                        <input type="text" class="span11" name="address" value='<?php echo $row['Address'] ?>' placeholder="" />
                      </div>
                    </div>
                  </div>

              </div>


              <div class="widget-content nopadding">
                <div class="form-horizontal">

                </div>
                <div class="widget-content nopadding">
                  <div class="form-horizontal">

                    <div class="control-group">


                    </div>
                  </div>

                </div>



              </div>
            </div>


          </div>



          <div class="span6">
            <div class="widget-box">

              <div class="widget-content nopadding">


                <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                  <h5>Service Details</h5>
                </div>
                <div class="widget-content nopadding">
                  <div class="form-horizontal">


                    <div class="control-group">
                      <label class="control-label">Packages : </label>
                      <div class="controls">
                        <label>
                          <input type="radio" value="Diamand" name="packages" required />
                          Diamond <small>- 1200 per month</small></label>
                        <label>
                          <input type="radio" value="Gold" name="packages" required />
                          Gold <small>- 1000 per month</small></label>
                        <label>
                          <input type="radio" value="Silver" name="packages" required />
                          Silver <small>- 700 per month</small></label>
                      </div>
                    </div>


                    <div class="control-group">
                      <label for="normal" class="control-label">Plans :</label>
                      <div class="controls">
                        <select name="plan" required="required" id="select">
                          <option value='<?php echo $row['Plan'] ?>'><?php echo $row['Plan'] . ' Month/s' ?></option>
                          <option value="1">1 Month</option>
                          <option value="3">3 Months</option>
                          <option value="6">6 Months</option>
                          <option value="12">1 Year</option>

                        </select>
                      </div>

                    </div>

                    <div class="control-group">
                      <label class="control-label">Status :</label>
                      <div class="controls">
                        <label>
                          <input type="radio" value="Active" name="status" required />
                          Active</label>
                        <label>
                          <input type="radio" value="Pending" name="status" required />
                          Pending</label>
                        <label>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Total Amount :</label>
                      <div class="controls">
                        <div class="input-append">
                          <span class="add-on">rs</span>
                          <input type="number" placeholder="" value='<?php echo $row['Amount'] ?>' name="amount" class="span11">
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