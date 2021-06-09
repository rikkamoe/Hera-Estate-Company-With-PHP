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
  

    <!-- ITEMS
    ================================================== -->
    <section class="section mt-4" style="padding-bottom: 0">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <!-- Heading -->
            <h3 class="mb-4">
              Properti Hera Estate Company
            </h3>

            <!-- Form -->
            <div class="mb-5 mb-md-0">
              <div class="form-row">
                <div class="col-12">
                  
                  <label>
                    Pilih Lokasi:
                  </label>

                </div>
              </div>
              <div class="form-row">
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=seoul">
                      <label style="margin-bottom: 0">SEOUL</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=incheon">
                      <label style="margin-bottom: 0">INCHEON</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=yangpyeong">
                      <label style="margin-bottom: 0">YANGPYEONG</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=busan">
                      <label style="margin-bottom: 0">BUSAN</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=jeju">
                      <label style="margin-bottom: 0">JEJU</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=gwangju">
                      <label style="margin-bottom: 0">GWANGJU</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=yongsan">
                      <label style="margin-bottom: 0">YONGSAN</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=inje">
                      <label style="margin-bottom: 0">INJE</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=hongcheon">
                      <label style="margin-bottom: 0">HONGCHEON</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=pyeongchang">
                      <label style="margin-bottom: 0">PYEONGCHANG</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=taebaek">
                      <label style="margin-bottom: 0">TAEBAEK</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=donghae">
                      <label style="margin-bottom: 0">DONGHAE</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=pohang">
                      <label style="margin-bottom: 0">POHANG</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=gyeongju">
                      <label style="margin-bottom: 0">GYEONGJU</label>
                    </a>
                  </div>

                </div>
                <div class="col-4">
                  
                  <!-- Size -->
                  <div class="extended-radio">
                    <a class="extended-radio-label text-xs mb-1" for="seoul" href="?page=property&aksi=view&id=hamyang">
                      <label style="margin-bottom: 0">HAMYANG</label>
                    </a>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <?php
      $id = $_SESSION["login"];
      $perintah2 = "SELECT * FROM tb_users WHERE id_users = '$id'";
      $query2 = mysqli_query($conn,$perintah2);
      $user2 = mysqli_fetch_array($query2);
        
      $level2 = $user2['level'];
        
      if ($level2 == 3){
        $title = "Properti baru yang ditambahkan:";
        $perintah = "SELECT * FROM tb_properties WHERE status = '1' ORDER BY id_properties DESC LIMIT 3";
      } else {
        $title = "Properti Termahal saat ini:";
        $perintah = "SELECT * FROM tb_properties WHERE status = '2' ORDER BY price DESC LIMIT 3";
      }

    ?>

    <!-- FEATURED
    ================================================== -->
    <section class="section" style="padding-bottom: 0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
            <!-- Heading -->
            <h3 class="mb-5">
              <?php echo $title; ?>
            </h3>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <?php
            $query = mysqli_query($conn,$perintah);
            while($data = mysqli_fetch_array($query))
            {
              
          ?>
          <div class="col-12 col-md-6 col-lg-4">
            
            <!-- Item -->
            <div class="position-relative">

              <!-- Card -->
              <a class="card border-0 mb-3" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                
                <!-- Image -->
                <img src="../public/img/<?php echo $data['img']; ?>" alt="..." class="card-img">
                
                <!-- Body -->
                <div class="card-body">

                  <div class="row align-items-center mb-3">
                    <div class="col">

                      <!-- Heading -->
                      <h4 class="card-title mb-0">
                        <?php echo $data['name_properties'] ?>
                      </h4>
                      
                    </div>
                    <div class="col-auto">
                      
                      <p class="mb-0 text-sm text-muted">
                        $<?php echo $data['price'] ?>
                      </p>

                    </div>
                  </div> <!-- / .row -->

                  <!-- Text -->
                  <p class="mb-0 text-sm text-muted">
                    <?php echo $data['type'] ?>
                  </p>
                  
                  <p class="mb-0 text-sm text-muted">
                    <img src="app/assets/ico/bedroom.png" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['bedroom'] ?>
                    <img src="app/assets/ico/bath.png" class="ml-3" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['toilet'] ?>
                    <img src="app/assets/ico/pool.png" class="ml-3" style="width: 16px; margin-bottom: 1px;"> : <?php echo $data['pool'] ?>
                  </p>
                  
                </div>

              </a>

              <!-- Button -->
              <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id'] ?>">
                <i class="fas fa-eye"></i>
              </a>

            </div>

          </div>
          <?php
            }
          ?>        
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>