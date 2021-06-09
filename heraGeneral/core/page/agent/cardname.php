<?php
if (isset($_POST['kirim'])) {
  
  $id = $_GET['id'];
  $id_usersp = $_SESSION['login'];
  $perintah = "SELECT * FROM tb_validate WHERE id_properties = '$id'";
  $query = mysqli_query($conn,$perintah);
  $data = mysqli_fetch_array($query);
  $id_validatep = $data['id_validate']; 

  $hargap = $_POST['harga'];

  $pesap = "Mohon untuk menunggu konfirmasi dari owner !";
  $timezone  = +7; //(GMT -5:00) EST (U.S. & Canada)
  $wktUpdate = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));

  $perintahcek = "SELECT * FROM tb_transaction WHERE id_properties = '$id' AND id_agent = '$id_usersp'";
  $querycek = mysqli_query($conn, $perintahcek);
  $data = mysqli_num_rows($querycek);

  if ($data >= 1) {
    echo " <script>alert('Gagal, Cukup sekali saja memasang harga !'); </script> ";
  }else{
    if (empty($hargap)){
      echo " <script>alert('Gagal, Data tidak lengkap'); </script> ";
    }else{
      $perintah2 = "INSERT INTO tb_transaction (id_validate, id_properties, id_agent, price_transaction) VALUES ('$id_validatep','$id','$id_usersp','$hargap')";
      $query2 = mysqli_query($conn,$perintah2);
      $perintah3 = "UPDATE tb_validate SET message = '$pesap', updated_at = '$wktUpdate', status_validate = '2' WHERE id_properties = '$id' AND id_agent = '$id_usersp'";
      $query3 = mysqli_query($conn,$perintah3);
      if ($query2 && $query3) {
        echo " <script>alert('Berhasil, Tunggu Owner menerima harga tersebut !'); </script> ";
      }else{
        echo " <script>alert('Gagal, Memasukkan harga properti ini !'); </script> ";
      }
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

<!-- FORM
================================================== -->
<section class="section bg-light mt-4">

  <!-- Triangles -->
  <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>

  <!-- Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <?php
            $id = $_GET['id'];
            $perintah = "SELECT * FROM tb_properties INNER JOIN tb_users ON tb_properties.owner = tb_users.name WHERE id_properties = '$id'";
            $data = mysqli_query($conn, $perintah);
            $user = mysqli_fetch_array($data);
              $nama = $user['name_properties'];
              $owner = $user['owner'];
              $notlp = $user['telephone'];
              $email = $user['email'];

        ?>
        <!-- Heading -->
        <h2 class="mb-4 text-center">
          <u>Kartu Nama Owner Properti</u><br />
          <u><?php echo $nama; ?></u><br />
        </h2>

      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-lg-4"> </div>
      <div class="col-lg-4">
          
          <!-- Card -->
          <div class="card card-lg card-active mb-3 mb-lg-0">
            
            <!-- Body -->
            <div class="card-body text-center">

              <!-- Title -->
              <h4 class="card-title">
                <?php echo $owner; ?>
              </h4>

              <!-- Price -->
              <h3 class="card-title font-weight-normal text-primary">
                Telephone : <?php echo $notlp; ?>
              </h3>

              <h6 class="card-title font-weight-normal text-primary">
                Email : <?php echo $email; ?>
              </h6>

              <!-- Text -->
              <ul class="card-text list-iconed">
                <li class="list-iconed-item">
                  Hubungi owner segera mungkin agar tidak ketinggalan update !
                </li>
                <li class="list-iconed-item">
                  Kesepakati terlebih dahulu lalu tentukan harga terbaik bersama owner !
                </li>
                <li class="list-iconed-item">
                  Pasang harga terbaik untuk propertimu dan pasarkan di Hera Estate Company !
                </li>
              </ul>

              <!-- Button -->
              <a href="https://wa.me/<?php echo $notlp; ?>" class="btn btn-outline-primary">
                Whatsapps
              </a>

              <?php
                $id_usersp = $_SESSION['login'];
                $cekharga = "SELECT * FROM tb_validate WHERE status_validate = '1' AND id_properties = '$id' AND id_agent = '$id_usersp'";
                $querycekharga = mysqli_query($conn, $cekharga);
                $cekdata = mysqli_num_rows($querycekharga);

                if ($cekdata == 1) {
                  echo '
                    <form class="mt-3 mb-3" method="post">
                      <label>Harga</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="harga">
                      </div>
                      <div class="input-group mt-3">
                        <button type="submit" name="kirim" class="btn btn-outline-primary">
                          Pasang Harga
                        </button>
                      </div>
                    </form>
                  ';
                }else{
                  echo "";
                }
              ?>
            </div>
            
          </div> <!-- / .card -->

      </div>
      <div class="col-lg-4"></div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>