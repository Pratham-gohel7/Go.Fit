<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="create.css">
  <title>Create An Account</title>
  <style>
    .back {
      position: absolute;
    }

    a img {
      margin-top: 90px;
      margin-left: 321px;
      height: 20px;
      width: 22px;
    }
  </style>
</head>

<body style="background-image: url(../media/pics/dumbbell-gd395bb068_1920.jpg);">
  <div class="loginform">
    <div class="form">
      <div class="title">
        <div class="logos">
          <img src="../media/LoginLogo.png" alt="no Internet" class="logo">
        </div>
        <div class="til">
          <h3>Sore Today, Strong Tomorrow.....</h3>
        </div>
      </div>
      <form method="POST" action="create_req.php">
        <span style="margin-left: 27px"><b>Name</b></span>
        <input type="text" name="name" id="name" class="text" placeholder="Enter your fullname" required>
        <br>
        <span><b>Username</b></span>
        <input type="text" name="username" id="userid" class="text" placeholder="Set your Email or Username" required />
        <br>
        <span><b>Password</b></span>
        <input type="password" name="userpass" id="pass" class="text" placeholder="Set your Password" required />
      
        <span><b>Address</b></span>
        <input type="text" name="address" id="address" class="text" placeholder="Enter your Address" required />


        <!-- <div style="display: flex; text-align: center;"> -->
        <div style="display: flex; text-align: center;">
          <span style="margin: 15px 6px;"><b>Contact</b></span>
        <input type="contact" name="contact" id="contact" placeholder="Enter your Number" required />

        <span style="margin: 15px 4px;"><b>Gender</b></span>
        <select name="gender" required="required" id="select">
          <option value="Male" selected="selected">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>

        
      </div>
        <div style="display: flex; text-align: center;">

          <span style="margin: 15px 4px;"><b>Package</b></span>
        <select name="package" required="required" id="select">
          <option value="#">Select the Package</option>
          <option value="Diamond">Diamond <small>- 1200 per month</small></option>
          <option value="Gold">Gold <small>- 1000 per month</small></option>
          <option value="Silver">Silver <small>- 700 per month</small></option>
        </select>
      </div>
        
      <div style="display: flex; text-align: center;">
        <span style="margin: 15px 15px;"><b>Plan</b></span>
        <select name="plan" required="required" id="select">
          <option value="#">Select the plan</option>
          <option value="1">One month</option>
          <option value="3">Three month</option>
          <option value="6">Six month</option>
          <option value="12">One Year</option>
        </select> 
         <span style="margin: 15px 6px;"><b>Pay</b></span>
        <input type="number" name="pay" id="pay" required>
      </div>
        <button id="lgbtn" name="create">Create</button>

      </form>
    </div>
    <a href="../members/" class="back"><img src="../media/back.png" alt="#"></a>
  </div>
</body>

</html>