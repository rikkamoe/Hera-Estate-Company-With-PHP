<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
  </header>
  <!-- Dashboard Counts Section-->
  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow">
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>Jumlah<br>Owner</span>
            </div>
            <?php 
              $perintah = "SELECT * FROM tb_users WHERE level = '2'";
              $query = mysqli_query($conn, $perintah);
              $data = mysqli_num_rows($query);
            ?>
            <div class="number"><strong><?php echo $data; ?></strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>Jumlah<br>Agent</span>
            </div>
            <?php 
              $perintah2 = "SELECT * FROM tb_users WHERE level = '3'";
              $query2 = mysqli_query($conn, $perintah2);
              $data2 = mysqli_num_rows($query2);
            ?>
            <div class="number"><strong><?php echo $data2; ?></strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-user"></i></div>
            <div class="title"><span>Jumlah<br>Customer</span>
            </div>
            <?php 
              $perintah3 = "SELECT * FROM tb_users WHERE level = '4'";
              $query3 = mysqli_query($conn, $perintah3);
              $data3 = mysqli_num_rows($query3);
            ?>
            <div class="number"><strong><?php echo $data3; ?></strong></div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
          <div class="item d-flex align-items-center">
            <div class="icon bg-violet"><i class="icon-home"></i></div>
            <div class="title"><span>Jumlah<br>Properti</span>
            </div>
            <?php 
              $perintah4 = "SELECT * FROM tb_properties WHERE status > 0";
              $query4 = mysqli_query($conn, $perintah4);
              $data4 = mysqli_num_rows($query4);
            ?>
            <div class="number"><strong><?php echo $data4; ?></strong></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dashboard Header Section    -->
  <section class="dashboard-header">
    <div class="container-fluid">
      <div class="row">
        <!-- Statistics -->
        <div class="statistics col-lg-4 col-12">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
            <?php 
              $perintah5 = "SELECT * FROM tb_properties WHERE status = '0'";
              $query5 = mysqli_query($conn, $perintah5);
              $data5 = mysqli_num_rows($query5);
            ?>
            <div class="text"><strong><?php echo $data5; ?></strong><br><small>Validasi Owner</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
            <?php 
              $perintah6 = "SELECT * FROM tb_validate WHERE status_validate = '0'";
              $query6 = mysqli_query($conn, $perintah6);
              $data6 = mysqli_num_rows($query6);
            ?>
            <div class="text"><strong><?php echo $data6; ?></strong><br><small>Validasi Agent</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
            <?php 
              $perintah7 = "SELECT * FROM tb_validate WHERE status_validate = '4'";
              $query7 = mysqli_query($conn, $perintah7);
              $data7 = mysqli_num_rows($query7);
            ?>
            <div class="text"><strong><?php echo $data7; ?></strong><br><small>Validasi Customer</small></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Footer-->
  <footer class="main-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <p>Hera Estate Company &copy; 2021</p>
        </div>
      </div>
    </div>
  </footer>
</div>