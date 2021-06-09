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
    <section class="section mt-4">
      <div class="container">

        <div class="row">
          <div class="col-12">
            
            <!-- Nav -->
            <nav class="nav nav-pills justify-content-center mb-6">
              <a href="#menuOne" class="nav-link active" data-toggle="tab">
                Minimalis Class
              </a>
              <a href="#menuTwo" class="nav-link" data-toggle="tab">
                Classic Class
              </a>
              <a href="#menuThree" class="nav-link" data-toggle="tab">
                Medium Class
              </a>
              <a href="#menuFour" class="nav-link" data-toggle="tab">
                High Class
              </a>
              <a href="#menuFive" class="nav-link" data-toggle="tab">
                Premium Class
              </a>
              <a href="#menuSix" class="nav-link" data-toggle="tab">
                Luxury Class
              </a>
              <a href="#menuSeven" class="nav-link" data-toggle="tab">
                Super Premium Suite
              </a>
            </nav>

          </div>
        </div> <!-- / .row -->

        <div class="row">
          <div class="col-12">
          
            <!-- Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="menuOne">

                <div class="row">

                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Minimalis Class (20 x 10)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Minimalis Class (20 x 10)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?>

                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuTwo">

                <div class="row">

                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Classic Class (40 x 10)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Classic Class (40 x 10)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?> 

                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuThree">

                <div class="row">
                    
                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Medium Class (50 x 20)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Medium Class (50 x 20)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?> 

                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuFour">

                <div class="row">
                    
                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'High Class (70 x 30)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'High Class (70 x 30)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?>

                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuFive">

                <div class="row">
                    
                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Premium Class (100 x 60)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Premium Class (100 x 60)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?>
                    
                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuSix">

                <div class="row">
                    
                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Luxury Class (125 x 100)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Luxury Class (125 x 100)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?>
                    
                </div> <!-- / .row -->
                
              </div>
              <div class="tab-pane fade" id="menuSeven">

                <div class="row">
                    
                  <?php
                    $id = $_GET['id'];
                    $id_user = $_SESSION["login"];
                    $perintah = "SELECT * FROM tb_users WHERE id_users = '$id_user'";
                    $query = mysqli_query($conn,$perintah);
                    $user = mysqli_fetch_array($query);
                    $level = $user['level'];

                    if ($level == 3) {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '1' AND type = 'Super Premium Suite (150 x 170)'";  
                    } else {
                      $perintah = "SELECT * FROM tb_properties WHERE location = '$id' AND status = '2' AND type = 'Super Premium Suite (150 x 170)'";
                    }
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
                      <a class="btn btn-sm btn-circle btn-primary card-add" data-toggle="cart" data-action="add" href="?page=property&aksi=item&id=<?php echo $data['id_properties'] ?>">
                        <i class="fas fa-eye"></i>
                      </a>

                    </div>

                  </div>
                  <?php
                    }
                  ?>
                    
                </div> <!-- / .row -->
                
              </div>
            </div>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>