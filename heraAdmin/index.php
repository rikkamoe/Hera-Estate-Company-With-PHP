<?php
session_start();
include "core/conn/conn.php";
if(!isset($_SESSION["login"])) {
    header("Location: pages/login.php");
    exit;
}
$id = $_SESSION["login"];
$perintah = "SELECT * FROM tb_users WHERE id_users = '$id'";
$query = mysqli_query($conn,$perintah);
$data = mysqli_fetch_array($query);   
?>
<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Nov 2018 10:43:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hera Estate Dashboard | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- DataTables CSS-->
    <link rel="stylesheet" href="vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Hera Estate </span><strong> Dashboard</strong></div>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <li class="nav-item"><a href="pages/logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
              <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div></a>
            <div class="title">
              <h1 class="h4"><?php echo $data['name'] ?></h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li> <a href="index.php"> <i class="icon-home"></i>Beranda </a></li>
            <li> <a href="?page=owner&aksi=content"> <i class="icon-user"></i>Owner </a></li>
            <li> <a href="?page=agent&aksi=content"> <i class="icon-user"></i>Agent </a></li>
            <li> <a href="?page=customer&aksi=content"> <i class="icon-user"></i>Customer </a></li>
            <li> <a href="?page=laporan&aksi=content"> <i class="icon-page"></i>Laporan</a></li>
          </ul>
        </nav>
        <?php 
          include "core/conn/conn.php";
          error_reporting(0);
          $page = $_GET['page'];
          $aksi = $_GET['aksi'];
            if ($page == "owner") {
              if ($aksi == "content") {
                include "pages/owner/content.php";
              }
              else if ($aksi == "delete") {
                include "pages/owner/delete.php";
              }
              else if ($aksi == "validate") {
                include "pages/owner/validate.php";
              }
            } else if ($page == "agent") {
              if ($aksi == "content") {
                include "pages/agent/content.php";
              }
              else if ($aksi == "validate") {
                include "pages/agent/validate.php";
              }
              else if ($aksi == "delete") {
                include "pages/agent/delete.php";
              }
            } else if ($page == "customer") {
              if ($aksi == "content") {
                include "pages/customer/content.php";
              }
              else if ($aksi == "validate") {
                include "pages/customer/validate.php";
              }
              else if ($aksi == "delete") {
                include "pages/customer/delete.php";
              }
            } else if ($page == "laporan") {
              if ($aksi == "content") {
                include "pages/laporan/content.php";   
              } 
              else if ($aksi == "detail") {
                include "pages/laporan/detail.php";
              } 
              else if ($aksi == "detail2") {
                include "pages/laporan/detail2.php";
              }
              else if ($aksi == "detail3") {
                include "pages/laporan/detail3.php";
              }
            } else {
              include "pages/dashboard.php";
            }
        ?>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Data Tables-->
    <script src="vendor/datatables.net/js/jquery.dataTables.js"></script>
    <script src="vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="js/tables-datatable.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>

    <script>
      $(function(){
        var e=$("#datatable2").DataTable({responsive:{details:!1}});
        $(document).on("sidebarChanged",function(){e.columns.adjust(),e.responsive.recalc(),e.responsive.rebuild()
        })
        var e=$("#datatable3").DataTable({responsive:{details:!1}});
        $(document).on("sidebarChanged",function(){e.columns.adjust(),e.responsive.recalc(),e.responsive.rebuild()
        })
      });
    </script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Nov 2018 10:44:28 GMT -->
</html>