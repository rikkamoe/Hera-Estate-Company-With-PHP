<?php
  if (isset($_POST['beli'])) 
  {
    $id_usersp = $_SESSION['login'];
    $pesanp = "Saya tertarik dengan properti ini, Bisakah saya menghubunginya ?";
    $id_propertiesp = $_GET['id'];
      
    $perintah2 = "SELECT * FROM tb_validate WHERE id_properties = '$id_propertiesp' AND id_agent = '$id_usersp'";
    $query2 = mysqli_query($conn,$perintah2);
    $data2 = mysqli_fetch_array($query2);

    if($data2 > 1){
      echo " <script>alert('Gagal, Cukup sekali membeli properti ini !'); </script> ";
    } else {
      $perintah3 = "INSERT INTO tb_validate (message, id_properties, id_agent) VALUES ('$pesanp','$id_propertiesp','$id_usersp')";
      $query3 = mysqli_query($conn,$perintah3);
      if($query3){
        echo " <script>alert('Berhasil, Mengirimkan Notifikasi ! Tunggu beberapa saat untuk mendapatkan info lebih lanjut'); </script> ";
      }else{
        echo " <script>alert('Gagal, Mengirimkan Notifikasi !'); </script> ";
      }
    }
  } 
  else if (isset($_POST['beli2'])) 
  {
    $id_usersp = $_SESSION['login'];
    $pesanp = "Saya tertarik dengan properti ini, Bisakah saya menghubunginya ?";
    $id_propertiesp = $_GET['id'];

    $perintah4 = "SELECT * FROM tb_validate WHERE id_properties = '$id_propertiesp' AND id_customer = '$id_usersp'";
    $query4 = mysqli_query($conn,$perintah4);
    $data4 = mysqli_fetch_array($query4);

    $perintah5 = "SELECT * FROM tb_management_agent WHERE id_properties_management_agent = '$id_propertiesp'";
    $query5 = mysqli_query($conn, $perintah5);
    $data5 = mysqli_fetch_array($query5);
    $id_agentp = $data5['id_agent_management_agent'];

    if($data4 > 1){
      echo " <script>alert('Gagal, Cukup sekali membeli properti ini !'); </script> ";
    } else {
      $perintah6 = "INSERT INTO tb_validate (message, id_properties, id_agent, id_customer, status_validate) VALUES ('$pesanp','$id_propertiesp', '$id_agentp', '$id_usersp','4')";
      $query6 = mysqli_query($conn,$perintah6);
      if($query6){
        echo " <script>alert('Berhasil, Mengirimkan Notifikasi ! Tunggu beberapa saat untuk mendapatkan info lebih lanjut'); </script> ";
      }else{
        echo " <script>alert('Gagal, Mengirimkan Notifikasi !'); </script> ";
      }
    }
  }
?>
<!-- NAVBAR
================================================= -->
<nav class="navbar navbar-expand-xl navbar-light  fixed-top">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <img src="app/assets/ico/text_logo.png" style="width: 200px;" class="mt-3">
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse">

      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="index.php" id="navbarWelcome" role="button"  aria-haspopup="true" aria-expanded="false">
            Beranda
          </a>
        </li>
        <?php if (isset($_SESSION["login"])) {
            echo '';
          }else{
            echo '
              <li class="nav-item dropdown">
                <a class="nav-link" href="?page=property&aksi=content" id="navbarLandings" role="button" aria-haspopup="true" aria-expanded="false">
                  Properti
                </a>
              </li>
            ';
          }
        ?>
        <?php
          $id = $_SESSION["login"];
          $perintah = "SELECT * FROM tb_users WHERE id_users = '$id'";
          $query = mysqli_query($conn,$perintah);
          while ($user = mysqli_fetch_array($query)) {
            $level = $user['level'];
            if ($level == 2){
              echo '
                <li class="nav-item ">
                  <a href="?page=owner&aksi=management" class="nav-link">
                    Management
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="?page=owner&aksi=input" class="nav-link">
                    Input Properti
                  </a>
                </li>
              ';
            }else if ($level == 3){
              echo '
                <li class="nav-item dropdown">
                  <a class="nav-link" href="?page=property&aksi=content" id="navbarLandings" role="button" aria-haspopup="true" aria-expanded="false">
                    Properti
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="?page=agent&aksi=management" class="nav-link">
                    Management Agent
                  </a>
                </li>
              ';
            } else {
              echo '
                <li class="nav-item dropdown">
                  <a class="nav-link" href="?page=property&aksi=content" id="navbarLandings" role="button" aria-haspopup="true" aria-expanded="false">
                    Properti
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="?page=customer&aksi=management" class="nav-link">
                    Management Customer
                  </a>
                </li>
              ';
            }
          }
        ?> 
        <li class="nav-item ">
          <a href="?page=about&aksi=content" class="nav-link">
            Tentang Kami
          </a>
        </li>
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION["login"])) {
            echo '
              <a href="?page=account&aksi=logout" class="nav-link">
                Logout
              </a>
            ';
          }else{
            echo '
              <a href="?page=account&aksi=landing_login" class="nav-link">
                Login Now
              </a>
            ';
          }
          ?>
        </li>
      </ul>

    </div> <!-- / .navbar-collapse -->

  </div> <!-- / .container -->    
</nav>

<!-- ITEM
================================================== -->
<section class="section pb-0 mb-5">
  <div class="container">
    <div class="row">
      <?php
        $id = $_GET['id'];
        $id_user = $_SESSION["login"];
        $perintah2 = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
        $query2 = mysqli_query($conn,$perintah2);
        $user = mysqli_fetch_array($query2);

        $level = $user['level'];
        
        if ($level == 3) {
          $perintah = "SELECT * FROM tb_properties WHERE id_properties = '$id'";
        } else {
          $perintah = "SELECT * FROM tb_management_agent AS management INNER JOIN tb_properties AS properties ON management.id_properties_management_agent = properties.id_properties INNER JOIN tb_users AS users ON management.id_agent_management_agent = users.id_users WHERE id_properties_management_agent = '$id'";
        }

        $query = mysqli_query($conn,$perintah);
        while($data = mysqli_fetch_array($query))
        {
          $kolam = $data['pool'];
          if($kolam > 0){
            $kolam = "Tersedia";
          } else {
            $kolam = "Tidak Tersedia";
          }

          if ($level == 3) {
            $title = "Owner : ".$data['owner'];
            $harga = $data['type'];
              if($harga = "Minimalis Class (20 x 10)"){
                $harga = "200 - 300";
              }else if($harga = "Classic Class (40 x 10)"){
                $harga = "400 - 500";
              }else if($harga = "Medium Class (50 x 20)"){
                $harga = "600 - 700";
              }else if($harga = "High Class (70 x 30)"){
                $harga = "800 - 900";
              }else if($harga = "Premium Class (100 x 60)"){
                $harga = "1000 - 1100";
              }else if($harga = "Luxury Class (125 x 100)"){
                $harga = "1200 - 1300";
              }else{
                $harga = "1400 - 1500";
              } 
          } else {
            $title = "Agent : ".$data['name'];
            $harga = $data['price'];
          }
        ?>
      <div class="col-12 col-md-4 order-md-2">
        
        <!-- Preheading -->
        <p class="font-weight-medium text-xs text-uppercase text-primary">
          <?php echo $title; ?>
        </p>

        <!-- Heading -->
        <h3 class="mb-4">
          <?php echo $data['name_properties'] ?> - ($<?php echo $harga; ?>) 
        </h3>

        <!-- Text -->
        <p class="mb-2 text-muted">
          Tipe : <?php echo $data['type'] ?>
        </p>

        <p class="mb-2 text-muted">
          Kamar Tidur : <?php echo $data['bedroom'] ?>
        </p>

        <p class="mb-2 text-muted">
          Kamar Mandi : <?php echo $data['toilet'] ?>
        </p>

        <p class="mb-2 text-muted">
          Kolam Renang : <?php echo $kolam ?>
        </p>

        <!-- Form -->
        <div class="mb-5 mb-md-0">
          <div class="form-row">
            <div class="col-12">
              <form method="post">
                <?php 
                if (isset($_SESSION["login"])) {
                  $id_userp = $_SESSION['login'];
                  $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_userp'";
                  $query = mysqli_query($conn,$perintah);
                  $user = mysqli_fetch_array($query);

                  $level = $user['level'];

                  if ($level == 3) {
                    echo '
                      <button class="btn btn-outline-primary btn-block mt-3" name="beli">
                        Beli Properti
                      </button>
                    ';
                  } else {
                    echo '
                      <button class="btn btn-outline-primary btn-block mt-3" name="beli2">
                        Beli Properti Ini
                      </button>
                    ';
                  } 
                }else{
                  echo '
                    <a class="btn btn-outline-primary btn-block mt-3" href="?page=account&aksi=landing_login">
                      Login Terlebih Dahulu
                    </a>
                  ';
                }
                ?>
              </form>

            </div>
          </div>
        </div>

      </div>
      <div class="col-12 col-md-8 order-md-1">
        
        <!-- Image -->
        <img src="../public/img/<?php echo $data['img']; ?>" alt="..." class="img-fluid mb-5">

        <!-- Nav -->
        <nav class="nav nav-tabs mb-5">
          <a href="#itemDescription" class="nav-item nav-link active" data-toggle="tab">
            Deskripsi
          </a>
          <a href="#itemShipping" class="nav-item nav-link" data-toggle="tab">
            Kelengakapan Dokumen
          </a>
        </nav>

        <!-- Content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="itemDescription">
            
            <p class="text-sm">
              <?php echo $data['description'] ?>
            </p>

          </div>
          <div class="tab-pane fade" id="itemShipping">
            
            <p class="text-sm">
              <?php echo $data['document'] ?>
            </p>

          </div>
        </div>

      </div>
      <?php
        }
      ?>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

