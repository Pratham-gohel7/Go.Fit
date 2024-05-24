<?php
session_start();
include "../DBcon.php";
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['userpass']);

  $password = md5($password);

  $query     = mysqli_query($con, "SELECT * FROM member_gofit WHERE  Password='$password' and Username='$username'");
  $row    = mysqli_fetch_array($query);
  $num_row   = mysqli_num_rows($query);

  if ($num_row > 0) {
    $_SESSION['ID'] = $row['ID'];
    // $_SESSION['Mem_ID'] = $row['ID'];
    $_SESSION['Name'] = $row['Name'];
    header('location:pages/index.php');
  } else {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                                Invalid Username and Password
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login.css">
  <title>Login to Go.fit</title>
  <style>
    .alert {

      position: absolute;
      margin-top: 292px;
      margin-left: 534px;
    }
  </style>
</head>

<body style="background-image: url(../media/pics/dumbbell-gd395bb068_1920.jpg);">
  <div class="loginform">
    <div class="form">
      <form method="POST" action="">
        <div class="title">
          <div class="logos">
            <img src="../media/LoginLogo.png" alt="no Internet" class="logo">
          </div>
          <div class="til">
            <h3>Sore Today, Strong Tomorrow.....</h3>
          </div>
        </div>
        <span><b>Username</b></span>
        <input type="text" name="username" id="username" placeholder="Please Enter your Username" required />
        <br>
        <span><b>Password</b></span>
        <input type="password" name="userpass" id="pass" placeholder="Password" required />
        <br><br>
        <button id="lgbtn" name="login">Login</button>
      </form>
      <a href="../Login/createAccount.php" id="create">Create new</a>
      <a href="../Login/admin_login.php" id="admin">Admin Login</a>
    </div>
  </div>
</body>

</html>