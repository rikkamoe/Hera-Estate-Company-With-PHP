<div class="content-inner">
  <section>
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">

          <h4>Verfikasi Properti Agent</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable1" style="width: 100%;" class="table">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Pesan</th>
                  <th>Agent</th>
                  <th>Owner</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $perintah = "SELECT * FROM tb_validate AS validate INNER JOIN tb_properties AS properties ON validate.id_properties = properties.id_properties INNER JOIN tb_users AS users ON validate.id_agent = users.id_users WHERE status_validate = '0'";
                  $data = mysqli_query($conn, $perintah);
                  while ($dataAdmin = mysqli_fetch_array($data)) {
                    $tglInput = date_create($dataAdmin['created_at']);
                ?>
                <tr>
                  <td><?php echo date_format($tglInput, "Y-m-d"); ?></td>
                  <td><?php echo $dataAdmin['message']; ?></td>
                  <td><?php echo $dataAdmin['name']; ?></td>
                  <td><?php echo $dataAdmin['owner']; ?></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#myModal<?php echo $dataAdmin['id_validate']; ?>" class="btn btn-info"><i class="fa fa-eye"></i></button>
                    <div id="myModal<?php echo $dataAdmin['id_validate']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Detail Properti <?php echo $dataAdmin['owner']; ?></h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div>
                              <h4 align="center"><u><?php echo $dataAdmin['name_properties']; ?></u></h4>  
                            </div>
                            <div>
                              <img src="../public/img/<?php echo $dataAdmin['img']; ?>" class="img-fluid" alt="...">  
                            </div>
                            <div class="row ml-1 mr-1 mt-4">
                              <div class="col-sm-6">
                                <h5>- Tipe</h5> 
                                  <p><?php echo $dataAdmin['type']; ?></p>
                                <h5>- Spesifikasi</h5> 
                                  <img src="img/bedroom.png" style="width: 16px; margin-bottom: 2px;"> : <?php echo $dataAdmin['bedroom'] ?>
                                  <img src="img/bath.png" class="ml-3" style="width: 16px; margin-bottom: 2px;"> : <?php echo $dataAdmin['toilet'] ?>
                                  <img src="img/pool.png" class="ml-3" style="width: 16px; margin-bottom: 1px;"> : <?php echo $dataAdmin['pool'] ?>
                                <h5 class="mt-3">- Deskripsi Properti</h5>
                                  <p><?php echo $dataAdmin['description']; ?></p>
                              </div>
                              <div class="col-sm-6">
                                <h5>- Lokasi</h5>
                                  <p><?php echo ucwords($dataAdmin['location']); ?></p>
                                <h5>- Tahun Pembuatan</h5> 
                                  <p><?php echo $dataAdmin['type']; ?></p>
                                <h5 class="mt-3">- Dokumen Properti</h5>
                                  <p><?php echo $dataAdmin['document']; ?></p> 
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a onClick="return confirm('Apakah anda ingin mensetujui permintaam ini?')" href="?page=agent&aksi=validate&id=<?php echo $dataAdmin['id_validate']?>" class="btn btn-success"><i class="fa fa-check"></i></a>
                    <a onClick="return confirm('Apakah anda ingin menolak permintaan ini?')" href="?page=agent&aksi=delete&id=<?php echo $dataAdmin['id_validate']?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
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