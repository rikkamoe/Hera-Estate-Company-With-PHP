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
              $perintah = "SELECT * FROM tb_users WHERE id = '$id'";
              $query = mysqli_query($conn,$perintah);
              while ($user = mysqli_fetch_array($query)) {
                $level = $user['level'];
                if ($level == 1) {
                  echo '
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="?page=property&aksi=content" id="navbarLandings" role="button" aria-haspopup="true" aria-expanded="false">
                        Properti
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Management
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarLandings">
                        <a class="dropdown-item " href="app.html">
                          Customer
                        </a>
                        <a class="dropdown-item " href="company.html">
                          Agent
                        </a>
                        <a class="dropdown-item " href="fullpage.html">
                          Owner
                        </a>
                      </div>
                    </li>
                  ';    
                }else if ($level == 2){
                  echo '
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="?page=property&aksi=content" id="navbarLandings" role="button" aria-haspopup="true" aria-expanded="false">
                        Properti
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="?page=about&aksi=content" class="nav-link">
                        Management Agent
                      </a>
                    </li>
                  ';
                }else if ($level == 3){
                  echo '
                    <li class="nav-item ">
                      <a href="?page=about&aksi=content" class="nav-link">
                        Management Owner
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="?page=about&aksi=content" class="nav-link">
                        Input Properti
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

    <!-- FEATURED
    ================================================== -->
    <section class="mt-5 mb-5">
      <div class="container section pb-0">
        <h2 class="text-center mb-4">
          Login sebagai
        </h2>
        <div class="row align-items-stretch">
          <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            
            <a class="card h-100" href="?page=customer&aksi=login">
              <div class="card-body">

                <!-- Meta -->
                <div class="row align-items-center no-gutters mb-4">
                  <div class="col-auto">
                    
                    <div class="avatar mr-3">
                      <img src="app/assets/img/customer.jpg" alt="..." class="img-cover rounded-circle">
                    </div>

                  </div>
                  <div class="col">
                    
                    <p class="mb-0 text-xs text-muted">
                      <strong class="text-body">Customer</strong>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
                <!-- Heading -->
                <h4>
                  Dapatkan properti anda dan nikmati keuntungannya
                </h4>

              </div>
            </a>

          </div>
          <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            
            <a class="card h-100" href="?page=agent&aksi=login">
              <div class="card-body">

                <!-- Meta -->
                <div class="row align-items-center no-gutters mb-4">
                  <div class="col-auto">
                    
                    <div class="avatar mr-3">
                      <img src="app/assets/img/agent.jpg" alt="..." class="img-cover rounded-circle">
                    </div>

                  </div>
                  <div class="col">
                    
                    <p class="mb-0 text-xs text-muted">
                      <strong class="text-body">Agent</strong>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
                <!-- Heading -->
                <h4>
                  Dapatkan properti dari owner dan sepakati harga terbaik
                </h4>

              </div>
            </a>

          </div>
          <div class="col-12 col-lg-4">
            
            <a class="card h-100" href="?page=owner&aksi=login">
              <div class="card-body">

                <!-- Meta -->
                <div class="row align-items-center no-gutters mb-4">
                  <div class="col-auto">
                    
                    <div class="avatar mr-3">
                      <img src="app/assets/img/owner.jpg" alt="..." class="img-cover rounded-circle">
                    </div>

                  </div>
                  <div class="col">
                    
                    <p class="mb-0 text-xs text-muted">
                      <strong class="text-body">Owner</strong>
                    </p>

                  </div>
                </div> <!-- / .row -->
                
                <!-- Heading -->
                <h4>
                  Pasarkan properti anda dan dapatkan keuntungannya
                </h4>

              </div>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>