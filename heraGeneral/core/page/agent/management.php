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
            $id = $_SESSION['login'];
            $perintah = "SELECT * FROM tb_users WHERE id_users = '$id'";
            $data = mysqli_query($conn, $perintah);
            $user = mysqli_fetch_array($data);
                $owner = $user['name'];
        ?>
        <!-- Heading -->
        <h2 class="mb-4 text-center">
          Management Properti Agent<br /> 
          <u><?php echo $owner; ?></u>
        </h2>

      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-12">
        
        <!-- Nav -->
        <nav class="nav nav-pills justify-content-center mb-6">
          <a href="#menuOne" class="nav-link active" data-toggle="tab">
            Proses Persetujuan Admin
          </a>
          <a href="#menuTwo" class="nav-link" data-toggle="tab">
            Proses Persetujuan Owner
          </a>
          <a href="#menuThree" class="nav-link" data-toggle="tab">
            Proses Persetujuan Customer
          </a>
          <a href="#menuFour" class="nav-link" data-toggle="tab">
            Properti Ditolak
          </a>
          <a href="#menuFive" class="nav-link" data-toggle="tab">
            Properti Agent <?php echo $owner; ?>
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="tblAdmin">
                      <thead>
                        <tr>
                          <th>Tanggal Input</th>
                          <th>Nama</th>
                          <th>Tipe</th>
                          <th>Lokasi</th>
                          <th>Tahun Pembuatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $id = $_SESSION['login'];
                          $perintah = "SELECT * FROM tb_validate INNER JOIN tb_properties ON tb_validate.id_properties = tb_properties.id_properties WHERE id_agent = '$id' AND status_validate = '0'";
                          $data = mysqli_query($conn, $perintah);
                          while ($dataAdmin = mysqli_fetch_array($data)) {
                            $tglInput = date_create($dataAdmin['created_at']);
                        ?>
                        <tr>
                          <th><?php echo date_format($tglInput, "Y-m-d"); ?></th>
                          <th><?php echo $dataAdmin['name_properties']; ?></th>
                          <th><?php echo $dataAdmin['type']; ?></th>
                          <th><?php echo ucwords($dataAdmin['location']); ?></th>
                          <th><?php echo $dataAdmin['production_year']; ?></th>
                          <th>
                            <a href="?page=owner&aksi=detail&id=<?php echo $dataAdmin['id_properties']?>" class="btn btn-info" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                            </a>
                            <a onClick="return confirm('Apakah anda ingin menghapus permintaan ini?')" href="?page=agent&aksi=delete2&id=<?php echo $dataAdmin['id_validate']?>" class="btn btn-danger" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/android/24/000000/trash.png"/>
                            </a>
                          </th>
                        </tr>
                      <?php 
                        }
                      ?>
                      </tbody>
                    </table>
                </div>
            </div> <!-- / .row -->
            
          </div>
          <div class="tab-pane fade" id="menuTwo">

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tblAgent">
                    <thead>
                      <tr>
                          <th>Tanggal Input</th>
                          <th>Tanggal Konfirmasi</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $id = $_SESSION['login'];
                          $perintah1 = "SELECT * FROM tb_validate INNER JOIN tb_properties ON tb_validate.id_properties = tb_properties.id_properties WHERE id_agent = '$id' AND status_validate = '1' OR status_validate = '2'";
                          $data1 = mysqli_query($conn, $perintah1);
                          while ($dataOwner1 = mysqli_fetch_array($data1)) {
                            $tglInput1 = date_create($dataOwner1['created_at']);
                            $tglKonfirmasi1 = date_create($dataOwner1['updated_at']);
                        ?>
                        <tr>
                          <th><?php echo date_format($tglInput1, "Y-m-d"); ?></th>
                          <th><?php echo date_format($tglKonfirmasi1, "Y-m-d"); ?></th>
                          <th><?php echo $dataOwner1['message']; ?></th>
                          <th>
                            <a href="?page=agent&aksi=cardname&id=<?php echo $dataOwner1['id_properties']?>" class="btn btn-info" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                            </a>
                          </th>
                        </tr>
                      <?php 
                        }
                      ?>
                    </tbody>
                    </table>
                </div>
            </div> <!-- / .row -->
            
          </div>
          <div class="tab-pane fade" id="menuThree">

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tblCustomer">
                      <thead>
                        <tr>
                          <th>Tanggal Pembelian</th>
                          <th>Nama Customer</th>
                          <th>Nama Properti</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $id = $_SESSION['login'];
                          $perintah2 = "SELECT * FROM tb_validate AS validate INNER JOIN tb_properties AS properties ON validate.id_properties = properties.id_properties INNER JOIN tb_users AS user ON validate.id_customer = user.id_users WHERE id_agent = '$id' AND status_validate = '5'";
                          $data2 = mysqli_query($conn, $perintah2);
                          while ($dataAgent = mysqli_fetch_array($data2)) {
                            $tglInput2 = date_create($dataAgent['created_at']);
                        ?>
                        <tr>
                          <th><?php echo date_format($tglInput2, "Y-m-d"); ?></th>
                          <th><?php echo $dataAgent['name']; ?></th>
                          <th><?php echo $dataAgent['name_properties']; ?></th>
                          <th>
                            <a href="?page=owner&aksi=detail&id=<?php echo $dataAgent['id_properties']?>" class="btn btn-info" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                            </a>
                            <a onClick="return confirm('Apakah anda ingin mensetujui transaksi ini?')" href="?page=agent&aksi=validate&id=<?php echo $dataAgent['id_validate']?>" class="btn btn-light" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/emoji/24/000000/check-mark-emoji.png"/>
                            </a>
                            <a onClick="return confirm('Apakah anda ingin menolak transaksi ini?')" href="?page=agent&aksi=novalidate&id=<?php echo $dataAgent['id_validate']?>" class="btn btn-danger" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                            <img src="https://img.icons8.com/android/24/000000/trash.png"/>
                          </a>
                          </th>
                        </tr>
                      <?php 
                        }
                      ?>
                      </tbody>
                    </table>
                </div>
            </div> <!-- / .row -->
            
          </div>
          <div class="tab-pane fade" id="menuFour">

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tblTolak">
                      <thead>
                        <tr>
                          <th>Tanggal Input</th>
                          <th>Tanggal Konfirmasi</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $id = $_SESSION['login'];
                          $perintah2 = "SELECT * FROM tb_validate INNER JOIN tb_properties ON tb_validate.id_properties = tb_properties.id_properties WHERE id_agent = '$id' AND status_validate < 0";
                          $data2 = mysqli_query($conn, $perintah2);
                          while ($dataAgent = mysqli_fetch_array($data2)) {
                            $tglInput2 = date_create($dataAgent['created_at']);
                            $tglKonfirmasi2 = date_create($dataAgent['updated_at']);
                        ?>
                        <tr>
                          <th><?php echo date_format($tglInput2, "Y-m-d"); ?></th>
                          <th><?php echo date_format($tglKonfirmasi2, "Y-m-d"); ?></th>
                          <th><?php echo $dataAgent['message']; ?></th>
                          <th>
                            <a href="?page=owner&aksi=detail&id=<?php echo $dataAgent['id_properties']?>" class="btn btn-info" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                            </a>
                          </th>
                        </tr>
                      <?php 
                        }
                      ?>
                      </tbody>
                    </table>
                </div>
            </div> <!-- / .row -->
            
          </div>
          <div class="tab-pane fade" id="menuFive">

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tblOwner">
                      <thead>
                        <tr>
                          <th>Tanggal Konfirmasi</th>
                          <th>Properti</th>
                          <th>Owner</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $id = $_SESSION['login'];
                          $perintah3 = "SELECT * FROM tb_management_agent AS management_agent INNER JOIN tb_properties AS properties ON management_agent.id_properties_management_agent = properties.id_properties WHERE id_agent_management_agent = '$id' AND status_management_agent > 0";
                          $data3 = mysqli_query($conn, $perintah3);
                          while ($dataAgent1 = mysqli_fetch_array($data3)) {
                            $tglInput3 = date_create($dataAgent1['created_at']);
                            $status = $dataAgent1['status_management_agent'];

                            if ($status == 1) {
                              $status = "Tersedia";
                            } else {
                              $status = "Sudah terjual";
                            }
                        ?>
                        <tr>
                          <th><?php echo date_format($tglInput3, "Y-m-d"); ?></th>
                          <th><?php echo $dataAgent1['name_properties']; ?></th>
                          <th><?php echo $dataAgent1['owner']; ?></th>
                          <th><?php echo $status ?></th>
                          <th>
                            <a href="?page=owner&aksi=detail&id=<?php echo $dataAgent1['id_properties']?>" class="btn btn-info" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                            </a>
                            <a onClick="return confirm('Apakah anda ingin menghapus properti ini?')" href="?page=agent&aksi=delete&id=<?php echo $dataAgent1['id_management_agent']?>" class="btn btn-danger" style="padding: 3px 4px 3px 4px; border-radius: 10%;">
                              <img src="https://img.icons8.com/android/24/000000/trash.png"/>
                            </a>
                          </th>
                        </tr>
                      <?php 
                        }
                      ?>
                      </tbody>
                    </table>
                </div>
            </div> <!-- / .row -->
            
          </div>
        </div>
      
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>