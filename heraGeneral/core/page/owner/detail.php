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
                      <a href="?page=about&aksi=content" class="nav-link">
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
<section class="section pb-0 mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 order-md-2">
        <?php
          $id = $_GET['id'];
          $id_user = $_SESSION["login"];
          $perintah2 = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
          $query2 = mysqli_query($conn,$perintah2);
          $user = mysqli_fetch_array($query2);

          $namaowner = $user['name'];
          $level = $user['level'];
          
          if ($level == 3) {
            $perintah = "SELECT * FROM tb_properties WHERE id_properties = '$id'";
          } else if ($level == 2) {
            $perintah = "SELECT * FROM tb_properties WHERE id_properties = '$id' AND owner = '$namaowner'";
          }else {
            $perintah = "SELECT * FROM tb_management_agent AS management INNER JOIN tb_properties AS properties ON management.id_properties_management_agent = properties.id_properties INNER JOIN tb_users AS users ON management.id_agent_management_agent = users.id_users WHERE id_properties_management_agent = '$id'";
          }

          $query = mysqli_query($conn,$perintah);
          $data = mysqli_fetch_array($query);
            $kolam = $data['pool'];
            if($kolam > 0){
              $kolam = "Tersedia";
            }else{
              $kolam = "Tidak Tersedia";
            }

            if ($level == 3) {
              $title = "Owner : ".$data['owner'];
            } else if ($level == 2) {
              $title = "Owner : ".$data['owner'];
            }else {
              $title = "Agent : ".$data['name'];
            }
          ?>
        
        <!-- Preheading -->
        <p class="font-weight-medium text-xs text-uppercase text-primary">
          <?php echo $title; ?>
        </p>

        <!-- Heading -->
        <h3 class="mb-4">
          <?php
            $id = $_SESSION["login"];
              $perintah = "SELECT * FROM tb_users WHERE id_users = '$id'";
              $query = mysqli_query($conn,$perintah);
              while ($user = mysqli_fetch_array($query)) {
                $level = $user['level'];
                if ($level == 2){
                  echo $data['name_properties'];
                } else if ($level == 3) {
                  echo $data['name_properties']." - $".$data['price']; 
                } else {
                  echo "";
                }
              }
          ?>  
        </h3>

        <!-- Text -->
        <p class="mb-2 text-muted">
          Tipe : <?php echo $data['type']; ?>
        </p>

        <p class="mb-2 text-muted">
          Kamar Tidur : <?php echo $data['bedroom']; ?>
        </p>

        <p class="mb-2 text-muted">
          Kamar Mandi : <?php echo $data['toilet']; ?>
        </p>

        <p class="mb-2 text-muted">
          Kolam Renang : <?php echo $data['pool']; ?>
        </p>
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
            Kelengkapan Dokumen
          </a>
        </nav>

        <!-- Content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="itemDescription">
            
            <p class="text-sm">
              <?php echo $data['description']; ?>
            </p>

          </div>
          <div class="tab-pane fade" id="itemShipping">
            
            <p class="text-sm">
              <?php echo $data['document']; ?>
            </p>

          </div>
        </div>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>