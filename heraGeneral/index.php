<?php
session_start();
?>

<!doctype html>
<html lang="en">
  
<!-- Mirrored from simpleqode.bitbucket.io/incline/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jan 2019 03:54:56 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="app/assets/ico/apple-touch-icon.png">
    <link rel="manifest" href="app/assets/ico/site.webmanifest">
    <link rel="mask-icon" href="app/assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="app/assets/ico/bulet_logo.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="app/assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="app/assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="app/assets/libs/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="app/assets/libs/highlightjs/styles/codepen-embed.css">
    <link rel="stylesheet" href="app/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="app/assets/libs/incline-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/lib/css/dataTables.bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    

    <!-- Theme CSS -->
    <link rel="stylesheet" href="app/assets/css/theme.min.css">

    <title>Hera Estate | Beranda</title>
  </head>
  <body>

    <?php 
      include "conn/conn.php";
      error_reporting(0);
      $page = $_GET['page'];
      $aksi = $_GET['aksi'];
        if ($page == "about") {
          if ($aksi == "content") {
            include "core/page/about/content.php";
          }
        } else if ($page == "agent") {
          if ($aksi == "login") {
            include "core/page/agent/login.php";
          }
          else if ($aksi == "register") {
            include "core/page/agent/register.php";
          }
          else if ($aksi == "management") {
            include "core/page/agent/management.php";
          }
          else if ($aksi == "cardname") {
            include "core/page/agent/cardname.php";
          }
          else if ($aksi == "delete") {
            include "core/page/agent/delete.php";
          }
          else if ($aksi == "validate") {
            include "core/page/agent/validate.php";
          }
          else if ($aksi == "novalidate") {
            include "core/page/agent/nonvalidate.php";
          }
          else if ($aksi == "delete2") {
            include "core/page/agent/delete2.php";
          }
        } else if ($page == "account") {
          if ($aksi == "landing_login") {
            include "core/landing_login.php";
          }
          else if ($aksi == "logout") {
            include "core/logout.php";
          }
        } else if ($page == "property") {
          if ($aksi == "content") {
            include "core/page/property/content.php";
          }
          else if ($aksi == "view") {
            include "core/page/property/view.php";
          }
          else if ($aksi == "item") {
            include "core/page/property/item.php";
          }
        } else if ($page == "owner") {
          if ($aksi == "login") {
            include "core/page/owner/login.php";
          }
          else if ($aksi == "register") {
            include "core/page/owner/register.php";
          }
          else if ($aksi == "input") {
            include "core/page/owner/input.php";
          }
          else if ($aksi == "management") {
            include "core/page/owner/management.php";
          }
          else if ($aksi == "detail") {
            include "core/page/owner/detail.php";
          }
          else if ($aksi == "delete") {
            include "core/page/owner/delete.php";
          }
          else if ($aksi == "validate") {
            include "core/page/owner/validate.php";
          }
          else if ($aksi == "novalidate") {
            include "core/page/owner/novalidate.php";
          }
        } else if ($page == "customer") {
          if ($aksi == "login") {
            include "core/page/customer/login.php";
          }
          else if ($aksi == "register") {
            include "core/page/customer/register.php";
          }
          else if ($aksi == "management") {
            include "core/page/customer/management.php";
          }
          else if ($aksi == "cardname") {
            include "core/page/customer/cardname.php";
          }
          else if ($aksi == "delete") {
            include "core/page/customer/delete.php";
          }
          else if ($aksi == "delete2") {
            include "core/page/customer/delete2.php";
          }
        }else {
          include "core/content.php";
        }
    ?>

    <!-- FOOTER
    ================================================== -->
    <footer class="section bg-dark">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!--Content -->
      <div class="container">
        <div class="row align-self-center">
	         <div class="col-md-auto">

	            <!-- Brand -->
	            <p>
	              <a href="#" class="footer-brand text-white">
	                <img src="app/assets/ico/text_logo.png" style="width: 200px;" class="mt-3">
	              </a>
	            </p>
	        
	         </div>
        </div> <!-- / .row -->
        <div class="row align-items-center">
          <div class="col-md">
        
            <!-- Copyright -->
            <p class="text-white text-muted">
              <small>
                &copy; Copyright <span class="current-year"></span> Hera Estate Development. All rights reserved.
              </small>
            </p>

          </div>
          <div class="col-md">

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="app/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Plugins JS -->
    <script src="app/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="app/assets/libs/jquery-parallax.js/parallax.min.js"></script>
    <script src="app/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="app/assets/libs/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="app/assets/libs/fullpage.js/vendors/scrolloverflow.min.js"></script>
    <script src="app/assets/libs/fullpage.js/dist/fullpage.min.js"></script>
    <script src="app/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="https://kit.fontawesome.com/07e052a384.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
    

    <!-- Theme JS -->
    <script src="app/assets/js/theme.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#tblAdmin').DataTable();
      });
      $(document).ready(function(){
        $('#tblAgent').DataTable();
      });
      $(document).ready(function(){
        $('#tblTolak').DataTable();
      });
      $(document).ready(function(){
        $('#tblOwner').DataTable();
      });
      $(document).ready(function(){
        $('#tblCustomer').DataTable();
      });
    </script>
  </body>

<!-- Mirrored from simpleqode.bitbucket.io/incline/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Jan 2019 03:55:23 GMT -->
</html>