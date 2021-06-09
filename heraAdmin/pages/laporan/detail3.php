<div class="content-inner">
  <section>
    <div class="container-fluid">
      <?php
      $id = $_GET['id'];
        $perintahuser = "SELECT * FROM tb_users WHERE id_users = '$id'";
        $queryuser = mysqli_query($conn, $perintahuser);
        $datauser = mysqli_fetch_array($queryuser);
        $title = "Properti ".$datauser['name']; 
      ?>
      <h4 class="mb-4"><?php echo $title; ?></h4>
      <div class="row">
        <?php
          $id = $_GET['id'];
          $perintah = "SELECT *,properties.created_at AS penginputan FROM tb_users AS user INNER JOIN tb_properties AS properties ON user.name = properties.owner WHERE id_users = '$id' AND status > 0";
          $query = mysqli_query($conn, $perintah);
          while ($data = mysqli_fetch_array($query)) {
            $status = $data['status'];
            if ($status == 1) {
              $status = "Tersedia";
            } else if ($status == 2) {
              $status = "Milik Agent";
            } else if ($status == 3){
              $status = "Milik Customer";
            }
            $input = "Penginputan : ".$data['penginputan'];

        ?>
        <div class="col-md-6 col-lg-3">
          <!-- Simple card-->
          <div class="card"><img src="../public/img/<?php echo $data['img']; ?>" alt="Card image cap" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['name_properties']; ?></h5>
              <img src="img/bedroom.png" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['bedroom'] ?>
              <img src="img/bath.png" class="ml-3" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['toilet'] ?>
              <img src="img/pool.png" class="ml-3" style="width: 16px; margin-bottom: 1px;"> : <?php echo $data['pool'] ?> <br />
              <p style="font-size: 15px; margin-top: 20px;"><?php echo $input; ?></p>
              <div class="row">
                <div class="col-sm-6">
                  <button type="button" data-toggle="modal" data-target="#myModal<?php echo $data['id_properties']; ?>" class="btn btn-primary">Detail</button>
                </div>
                <div class="col-sm-6"> 
                  <p><b><?php echo $status; ?></b></p>
                </div>
              </div>
              <div id="myModal<?php echo $data['id_properties']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="exampleModalLabel" class="modal-title">Detail Properti</h4>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <h4 align="center"><u><?php echo $data['name_properties']; ?></u></h4>  
                      </div>
                      <div>
                        <img src="../public/img/<?php echo $data['img']; ?>" class="img-fluid" alt="...">  
                      </div>
                      <div class="row ml-1 mr-1 mt-4">
                        <div class="col-sm-6">
                          <h5>- Tipe</h5> 
                            <p><?php echo $data['type']; ?></p>
                          <h5>- Spesifikasi</h5> 
                            <img src="img/bedroom.png" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['bedroom'] ?>
                            <img src="img/bath.png" class="ml-3" style="width: 16px; margin-bottom: 2px;"> : <?php echo $data['toilet'] ?>
                            <img src="img/pool.png" class="ml-3" style="width: 16px; margin-bottom: 1px;"> : <?php echo $data['pool'] ?>
                          <h5 class="mt-3">- Deskripsi Properti</h5>
                            <p><?php echo $data['description']; ?></p>
                        </div>
                        <div class="col-sm-6">
                          <h5>- Lokasi</h5>
                            <p><?php echo ucwords($data['location']); ?></p>
                          <h5>- Tahun Pembuatan</h5> 
                            <p><?php echo $data['type']; ?></p>
                          <h5 class="mt-3">- Dokumen Properti</h5>
                            <p><?php echo $data['document']; ?></p> 
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
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