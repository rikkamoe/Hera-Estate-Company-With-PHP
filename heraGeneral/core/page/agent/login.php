<?php
session_start();
include '../../../conn/conn.php';
if (isset($_POST['login'])) 
{
   $usernamep = $_POST['username'];
   $passwordp = md5($_POST['password']);

  if (empty($usernamep) || empty($passwordp))
  {
    echo " <script>alert('Gagal, Data tidak lengkap'); </script> ";
  }
  else {
    $query="SELECT * FROM tb_users WHERE username = '$usernamep' AND password = '$passwordp' AND level = '3'";
    $perintah=mysqli_query($conn,$query);

    if (mysqli_num_rows($perintah)==0) {
      echo " <script>alert('Gagal, Akun Tidak Ditemukan'); </script> ";      
    } else {
      $data_user = mysqli_fetch_array($perintah);
      $_SESSION["username"]= $data_user['username'];
      $_SESSION["login"] = $data_user['id_users'];
      header("location: index.php");    
    }
  } 
}

?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from simpleqode.bitbucket.io/incline/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jan 2019 03:56:04 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../app/assets/ico/apple-touch-icon.png">
    <link rel="manifest" href="../../../app/assets/ico/site.webmanifest">
    <link rel="mask-icon" href="../../../app/assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../../../app/assets/ico/bulet_logo.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../../../app/assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../../../app/assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="../../../app/assets/libs/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="../../../app/assets/libs/highlightjs/styles/codepen-embed.css">
    <link rel="stylesheet" href="../../../app/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../app/assets/libs/incline-icons/style.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../../../app/assets/css/theme.min.css">

    <title>Hera Estate | Sign In</title>
  </head>
  <body>
    
    <!-- FULLPAGE
    ================================================== -->
    <section class="section section-full section-top bg-light">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Form -->
            <form class="form-styled bg-white" method="post">

              <!-- Heading -->
              <h4 class="text-center mb-4">
                Welcome back Agent !
              </h4>

              <!-- Subheading -->
                <!-- <div class="alert alert-danger" role="alert">
                </div> -->

              <!-- Email -->
              <div class="form-group">
                
                <!-- Email -->
                <label>Username</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" required>
                </div>

              </div>

              <!-- Password -->
              <div class="form-group">
                
                <!-- Name -->
                <label>Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="password">
                </div>

              </div>

              <!-- Footer -->
              <div class="form-row align-items-center">
                <!-- <div class="col-md-auto">

                  <div class="custom-control custom-checkbox mb-3 mb-md-0">
                    <input type="checkbox" class="custom-control-input" id="sign-in-checkbox">
                    <label class="custom-control-label" for="sign-in-checkbox">
                      Remember me
                    </label>
                  </div>

                </div> -->
                <div class="col-md">

                  <!-- Button -->
                  <div class="text-center text-md-right">
                    <button type="submit" class="btn btn-outline-primary" name="login">
                      Sign in now
                    </button>
                  </div>

                </div>
              </div> <!-- / .form-row -->

              <!-- Link -->
              <p class="text-center text-muted mt-5 mb-0">
                <small>
                  Not a member yet? <a href="?page=agent&aksi=register">Sign up</a>.
                </small>
              </p>

            </form>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
      
    </section>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="../../../app/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Plugins JS -->
    <script src="../../../app/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../app/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="../../../app/assets/libs/jquery-parallax.js/parallax.min.js"></script>
    <script src="../../../app/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../../../app/assets/libs/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="../../../app/assets/libs/fullpage.js/vendors/scrolloverflow.min.js"></script>
    <script src="../../../app/assets/libs/fullpage.js/dist/fullpage.min.js"></script>
    <script src="../../../app/assets/libs/highlightjs/highlight.pack.min.js"></script>

    <!-- Theme JS -->
    <script src="../../../app/assets/js/theme.min.js"></script>

  </body>

<!-- Mirrored from simpleqode.bitbucket.io/incline/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jan 2019 03:56:04 GMT -->
</html>