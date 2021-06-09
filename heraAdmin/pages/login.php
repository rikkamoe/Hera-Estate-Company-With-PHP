<?php
session_start();
include '../core/conn/conn.php';
if (isset($_POST['login'])) 
{
   $usernamep = $_POST['username'];
   $passwordp = md5($_POST['password']);

  if (empty($usernamep) || empty($passwordp))
  {
    echo " <script>alert('Gagal, Data tidak lengkap'); </script> ";
  }
  else {
    $query="SELECT * FROM tb_users WHERE username = '$usernamep' AND password = '$passwordp' AND level = '1'";
    $perintah=mysqli_query($conn,$query);

    if (mysqli_num_rows($perintah)==0) {
      echo " <script>alert('Gagal, Akun Tidak Ditemukan'); </script> ";      
    } else {
      $data_user = mysqli_fetch_array($perintah);
      $_SESSION["username"]= $data_user['username'];
      $_SESSION["login"] = $data_user['id_users'];
      header("location: ../index.php");    
    }
  } 
}

?>
<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Nov 2018 10:44:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hera Estate Dashboard - Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Hera Estate Dashboard</h1>
                  </div>
                  <p>Hera Estate Dashboard - Admin </p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Hera Estate Development</a>
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="../js/front.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-4/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Nov 2018 10:44:40 GMT -->
</html>