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
    
    <!-- HEADER
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col">
            
            <!-- Header -->
            <div class="header bg-cover" style="background-image: url(app/assets/img/15.jpg);"></div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Sepatah dua kata tentang kami
            </h6>

          </div>
          <div class="col-md-5">
            
            <!-- Heading -->
            <h3 class="mb-4">
              <span class="text-primary">Hera Estate Development Company</span>, tempat dimana anda bisa membeli properti berupa apartemen dan rumah.
            </h3>

            <!-- Content -->
            <blockquote class="blockquote">
              <p class="mb-0">
                Kami menyediakan beberapa type pilihan dimulai dari Minimalis Class, Classic Class, Medium Class, High Class, Premium Class, Luxury Class, Super Premium Suite properti kami tersebar dibeberapa lokasi yang strategis.
              </p>
            </blockquote>

          </div>
          <div class="col-md-5">
            
            <!-- Content -->
            <p class="text-muted">
              Bagi kalian yang ingin mencari tempat tinggal modern. kami menyediakan market place bagi anda yang ingin menjual propertinya menggunakan jasa kami. kami menyediakan layanan 24 jam bagi anda yang bingung dalam membeli ataupun menjual properti. “Biarkan Keluarga Kita Menunjukkan Jalan Pulang Kepada Keluarga Anda”
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- TEAM
    ================================================== -->
    <section class="section pb-0">
      
      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Team Development
            </h6>

          </div>
          <div class="col-md-10">
            
            <!-- Heading -->
            <h3 class="mb-4">
              Team Development Hera Estate Company | Basis Data Lanjutan
            </h3>

            <!-- Subheading -->
            <p class="text-muted mb-5">
              Tak kenal maka tak sayang, Beginilah orang - orang dibalik layar dari Hera Estate Development Company
            </p>

            <!-- Team -->
            <div class="row">
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="app/assets/img/bayu.jpg" alt="..." class="card-img-top" height="300px">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title">
                      I Gede Bayu Widiastika, <small class="text-muted">Development</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item ml-3">
                        <a href="https://www.instagram.com/bayuwidiastika32/">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="app/assets/img/suwin.jpg" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title">
                      I Putu Suwindratama, <small class="text-muted">Development</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item ml-3">
                        <a href="https://www.instagram.com/putusuwindratama/">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="app/assets/img/zipperiz.jpg" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title">
                      I Made Apriliadi Artama, <small class="text-muted">Designer</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item ml-3">
                        <a href="https://www.instagram.com/zipperiz">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="app/assets/img/suan.jpg" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title">
                      Suandewi, <small class="text-muted">Designer</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item ml-3">
                        <a href="https://www.instagram.com/suandw99/">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
