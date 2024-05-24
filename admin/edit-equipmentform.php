<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('location:../index.php');
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
  <?php $page = 'update-equip';
  include 'includes/sidebar.php' ?>
  <!--sidebar-menu-->
  <?php
  include 'includes/DBcon.php';
  $id = $_GET['id'];
  $qry = "select * from equipments_gofit where ID='$id'";
  $result = mysqli_query($con, $qry);
  while ($row = mysqli_fetch_array($result)) {
  ?>

    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="#" class="tip-bottom">Equipments</a> <a href="#" class="current">Edit Equipments</a> </div>
        <h1>Equipment Entry Form</h1>
      </div>
      <div class="container-fluid">
        <hr>
        <div class="row-fluid">
          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                <h5>Eqipment-info</h5>
              </div>
              <div class="widget-content nopadding">
                <form action="edit-equipment-req.php" method="POST" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">Equipment Name :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="name" value='<?php echo $row['Name']; ?>' required />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Description :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="description" value='<?php echo $row['Description']; ?>' required />
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label">Date of Purchase :</label>
                    <div class="controls">
                      <input type="date" name="date" value='<?php echo $row['Date']; ?>' class="span11" />
                      <span class="help-block">Please mention the date of purchase</span>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Quantity :</label>
                    <div class="controls">
                      <input type="number" class="span4" name="quantity" value='<?php echo $row['Quantity']; ?>' required />
                    </div>
                  </div>


              </div>


              <div class="widget-content nopadding">
                <div class="form-horizontal">

                </div>
                <div class="widget-content nopadding">
                  <div class="form-horizontal">


                  </div>

                </div>



              </div>
            </div>


          </div>



          <div class="span6">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                <h5>Other Details</h5>
              </div>
              <div class="widget-content nopadding">
                <div class="form-horizontal">
                  <div class="control-group">
                    <label for="normal" class="control-label">Contact Number</label>
                    <div class="controls">
                      <input type="text" id="mask-phone" name="contact" minlength="10" maxlength="10" value='<?php echo $row['Contact']; ?>' class="span8 mask text" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Vendor :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="vendor" value='<?php echo $row['Vendor']; ?>' required />
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Address :</label>
                    <div class="controls">
                      <input type="text" class="span11" name="address" value='<?php echo $row['Address']; ?>' required />
                    </div>
                  </div>
                </div>

                <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
                  <h5>Pricing</h5>
                </div>
                <div class="widget-content nopadding">
                  <div class="form-horizontal">




                    <div class="control-group">
                      <label class="control-label">Total Cost: </label>
                      <div class="controls">
                        <div class="input-append">
                          <span class="add-on">rs</span>
                          <input type="number" placeholder="120000" name="amount" value='<?php echo $row['Amount']; ?>' class="span11" required>
                        </div>
                      </div>
                    </div>

                    <div class="form-actions text-center">
                      <!-- user's ID is hidden here -->
                      <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                      <button type="submit" class="btn btn-success">Submit Details</button>
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

      <!-- <?php include("includes/footer.php") ?> -->

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