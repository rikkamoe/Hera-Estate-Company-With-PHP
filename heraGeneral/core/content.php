    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-xl navbar-dark  navbar-togglable  fixed-top">
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
    
  <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(app/assets/img/38.jpg);"></div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 col-lg-7">

          	<img class="rounded mx-auto d-block mb-3" alt="..." src="app/assets/ico/bulet_logo.png" style="width: 120px;">

            <!-- Preheading -->
            <p class="font-weight-medium text-center text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
              by Hera Estate Development
            </p>
            
            <!-- Heading -->
            <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              The Best Way To Future
            </h1>

            <!-- Subheading -->
            <p class="lead text-white text-muted text-center mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
              " Bagaimana menurut mu orang bisa menjadi kaya? Mereka menjadi kaya karena mereka meragukan segalanya, dan tidak percaya pada siapapun "
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- SECTIONS
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">
        
            <!-- Image -->
            <div class="img-effect img-effect-solid mb-5 mb-md-0">
              <img src="app/assets/img/47.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1 order-md-1">

            <!-- Heading -->
            <h2 class="mb-4">
              Keunggulan Hera Estate Company
            </h2>

            <!-- Content -->
            <ul class="list-iconed text-muted">
              <li class="list-iconed-item">
                Desain yang simple tapi mewah, elegan, dan rapi 
              </li>
              <li class="list-iconed-item">
                Mudah dan simple dalam penggunaan sistem  
              </li>
              <li class="list-iconed-item">
                Bisa diakses dimana saja karena sistem ini mendukung open source
              </li>
            </ul>
        
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
    <!-- QUOTE
    ================================================== -->
    

    <!-- FEATURES
    ================================================== -->
    <section class="section bg-dark">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
        
            <!-- Heading -->
            <h2 class="text-white text-center mb-4">
              Fitur Hera Estate
            </h2>

            <!-- Subheading -->
            <p class="text-white text-muted text-center mb-5">
              Pembelian properti semakin mudah, aman, dan simple.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center mb-5 mb-md-0">
          
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon-devices icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="text-white mb-3">
                Resposive
              </h4>

              <!-- Content -->
              <p class="text-white text-muted mb-0">
                Terlihat menarik dan hebat di semua browser, tablet, dan perangkat seluler.
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center mb-5 mb-md-0">
          
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon-shield icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="text-white mb-3">
                Keamanan
              </h4>

              <!-- Content -->
              <p class="text-white text-muted mb-0">
                Data sudah diamankan di database yang sangat aman
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center">
          
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-support icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="text-white mb-3">
                Akses 24 Jam
              </h4>

              <!-- Content -->
              <p class="text-white text-muted mb-0">
                Sistem bisa diakses selama 24 jam full 
              </p>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- MAP
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Alamat Hera Estate Company
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Daeso-myeon | Daerah Eumseong, Chungcheong Utara Korea Selatan
            </p>
          
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Map -->
            <div class="map pb-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51008.4069336738!2d127.45808158729429!3d36.96144940823192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3564c78a0a9fc4af%3A0x2bcbebd581ae892f!2sDaeso-myeon%2C%20Daerah%20Eumseong%2C%20Chungcheong%20Utara%2C%20Korea%20Selatan!5e0!3m2!1sid!2sid!4v1623074438088!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>
