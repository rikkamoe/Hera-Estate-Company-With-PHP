    <?php
    if (isset($_POST['tambah'])) 
    {
      $namap = $_POST['nama'];
      $tipep = $_POST['tipe'];
      $lokasip = $_POST['lokasi'];
      $tidurp =  $_POST['tidur'];
      $mandip =  $_POST['mandi'];
      $kolamp =  $_POST['kolam'];
      $deskripsip = $_POST['deskripsi'];
      $dokumenp = $_POST['dokumen'];
      $ownerp = $_POST['owner'];
      $tahunp = $_POST['tahun'];

      if (empty($namap) || empty($tipep) || empty($lokasip) || empty($tidurp) || empty($mandip) || empty($kolamp) || empty($deskripsip) || empty($dokumenp) || empty($ownerp) || empty($tahunp))
      {
        echo " <script>alert('Gagal, Data tidak lengkap'); </script> ";
      }
      else {
        $ekstensi_diperbolehkan  = array('png','jpg');
        $fotop = $_FILES['foto']['name'];
        $x = explode('.', $fotop);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 2044070){      
            move_uploaded_file($file_tmp, '../public/img/'.$fotop);
            $perintah = "INSERT INTO tb_properties (name_properties, type, bedroom, toilet, pool, location, description, document, production_year, owner, img) VALUES ('$namap','$tipep','$tidurp','$mandip','$kolamp','$lokasip','$deskripsip','$dokumenp','$tahunp','$ownerp','$fotop')";
            $query = mysqli_query($conn,$perintah);
            if($query){
              echo " <script>alert('Berhasil, Memasukkan Properti'); </script> ";
            }else{
              echo " <script>alert('Gagal, Memasukkan Properti'); </script> ";
            }
          }else{
            echo " <script>alert('Gagal, File Terlalu Besar !'); </script> ";
          }
        }else{
          echo " <script>alert('Gagal, File harus PNG Atau JPG'); </script> ";
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
                    <li class="nav-item ">
                      <a href="?page=about&aksi=content" class="nav-link">
                        Management Owner
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="?page=owner&aksi=input" class="nav-link">
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
  
      </div> <!-- / .container -->    
    </nav>

    <!-- FORM
    ================================================== -->
    <section class="section pb-0 mb-5 mt-5">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">

            <!-- Title -->
            <h6 class="title">
              Input Properti Anda
            </h6>
            
          </div>
          <div class="col-md-10">

            <!-- Form -->
            <form enctype="multipart/form-data" method="post">
              <div class="form-row">
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Nama Properti</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nama">
                  </div>

                </div>
                <div class="form-group col-md-4">
                  
                  <!-- Email -->
                  <label>Tipe Properti</label>
                  <div class="input-group">
                    <select class="custom-select" name="tipe">
                      <option selected>--- Pilih Tipe Properti ---</option>
                      <option value="Minimalis Class (20 x 10)">Minimalis Class (20 x 10)</option>
                      <option value="Classic Class (40 x 10)">Classic Class (40 x 10)</option>
                      <option value="Medium Class (50 x 20)">Medium Class (50 x 20)</option>
                      <option value="High Class (70 x 30)">High Class (70 x 30)</option>
                      <option value="Premium Class (100 x 60)">Premium Class (100 x 60)</option>
                      <option value="Luxury Class (125 x 100)">Luxury Class (125 x 100)</option>
                      <option value="Super Premium Suite (150 x 170)">Super Premium Suite (150 x 170)</option>
                    </select>
                  </div>

                </div>
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Lokasi Properti</label>
                  <div class="input-group">
                    <select class="custom-select" name="lokasi">
                      <option selected>--- Pilih Lokasi Properti ---</option>
                      <option value="seoul">SEOUL</option>
                      <option value="incheon">INCHEON</option>
                      <option value="yangpyeong">YANGPYEONG</option>
                      <option value="busan">BUSAN</option>
                      <option value="jeju">JEJU</option>
                      <option value="gwangju">GWANGJU</option>
                      <option value="yongsan">YONGSAN</option>
                      <option value="inje">INJE</option>
                      <option value="hongcheon">HONGCHEON</option>
                      <option value="pyeongchang">PYEONGCHANG</option>
                      <option value="taebaek">TAEBAEK</option>
                      <option value="donghae">DONGHAE</option>
                      <option value="pohang">POHANG</option>
                      <option value="gyeongju">GYEONGJU</option>
                      <option value="hamyang">HAMYANG</option>
                    </select>
                  </div>

                </div>
              </div> <!-- / .form-row -->
              <div class="form-row">
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Kamar Tidur</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="tidur">
                  </div>

                </div>
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Kamar Mandi</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="mandi">
                  </div>

                </div>
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Kolam Renang</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="kolam">
                  </div>

                </div>
              </div> <!-- / .form-row -->
              <div class="form-row">
                <div class="form-group col-12">
                  
                  <!-- Message -->
                  <label>Deskripsi Properti</label>
                  <textarea class="form-control" name="deskripsi" rows="7"></textarea>
                  
                </div>
              </div> <!-- / .form-row -->
              <div class="form-row">
                <div class="form-group col-12">
                  
                  <!-- Message -->
                  <label>Dokumen Properti</label>
                  <textarea class="form-control" name="dokumen" rows="3"></textarea>
                  
                </div>
              </div> <!-- / .form-row -->
              <div class="form-row">
                <div class="form-group col-md-8">
                  
                  <!-- Name -->
                  <label>Owner Properti</label>
                  <div class="input-group">
                    <?php
                      $id = $_SESSION['login'];
                      $perintah = "SELECT * FROM tb_users WHERE id_users = '$id'";
                      $data = mysqli_query($conn, $perintah);
                      while ($user = mysqli_fetch_array($data)) {
                        $owner = $user['name'];
                    ?>
                    <input type="text" class="form-control" name="owner" value="<?php echo $owner; ?>" readonly="readonly">
                    <?php
                      }
                    ?>
                  </div>

                </div>
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Tahun Pembuatan Properti</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="tahun">
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-8">
                  
                  <!-- Name -->
                  <label>Foto Properti</label>
                  <div class="input-group">
                    <input class="form-control" type="file" name="foto">
                  </div>

                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  
                  <!-- Submit -->
                  <button type="submit" class="btn btn-outline-primary" name="tambah">
                    Tambah Properti
                  </button>

                  <!-- Reset -->
                  <button type="reset" class="btn btn-link">
                    Reset
                  </button>

                </div>
              </div>
            </form>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>