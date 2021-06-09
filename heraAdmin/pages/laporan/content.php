<div class="content-inner">
  <section>
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h4>Laporan</h4>
        </div>
        <div class="card-body">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Customer</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Agent</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Owner</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table-responsive mt-3">
                <table id="datatable1" style="width: 100%;" class="table">
                  <thead>
                    <tr>
                      <th>Nama Customer</th>
                      <th>Jumlah Properti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $perintah = "SELECT *, COUNT(id_customer_management_customer) AS jumlah_properties FROM tb_management_customer AS management_customer INNER JOIN tb_management_agent AS management_agent ON management_customer.id_management_agent_management_customer = management_agent.id_management_agent INNER JOIN tb_users AS user ON management_customer.id_customer_management_customer = user.id_users WHERE status_management_customer > 0 GROUP BY id_customer_management_customer";
                      $query = mysqli_query($conn, $perintah);
                      while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['jumlah_properties']; ?></td>
                      <td>
                        <a href="?page=laporan&aksi=detail&id=<?php echo $data['id_customer_management_customer']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="table-responsive mt-3">
                <table id="datatable2" style="width: 100%;" class="table">
                  <thead>
                    <tr>
                      <th>Nama Agent</th>
                      <th>Jumlah Keseluruhan Properti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $perintah2 = "SELECT *,COUNT(id_agent_management_agent) AS jumlah_properties FROM tb_management_agent INNER JOIN tb_users ON tb_management_agent.id_agent_management_agent = tb_users.id_users WHERE status_management_agent > 0 GROUP BY id_agent_management_agent";
                      $query2 = mysqli_query($conn, $perintah2);
                      while ($data2 = mysqli_fetch_array($query2)) {
                    ?>
                    <tr>
                      <td><?php echo $data2['name']; ?></td>
                      <td><?php echo $data2['jumlah_properties']; ?></td>
                      <td>
                        <a href="?page=laporan&aksi=detail2&id=<?php echo $data2['id_agent_management_agent']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        <button type="button" data-toggle="modal" data-target="#myModal<?php echo $data2['id_agent_management_agent']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></button>
                        <div id="myModal<?php echo $data2['id_agent_management_agent']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                          <div role="document" class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel" class="modal-title">Data Laporan <?php echo $data2['name']; ?></h4>
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-body">
                                <div>
                                  <h4 align="center"><u>Pilih Tahun Laporan Penjualan</u></h4>  
                                </div>
                                <form method="post" action="data_print.php" target="_blank">
                                  <div class="form-group">
                                    <label>Tahun</label>
                                    <select name="tahun" class="form-control mb-3">
                                      <option value="2020">2020</option>
                                      <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                      <option value="2023">2023</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="id" value="<?php echo $data2['id_agent_management_agent']; ?>" hidden>
                                  </div>
                                  <div class="form-group">       
                                    <button type="submit" class="btn btn-success">Cari Laporan</button>
                                  </div>
                                </form>                              
                              </div>
                              <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="table-responsive mt-3">
                <table id="datatable3" style="width: 100%;" class="table">
                  <thead>
                    <tr>
                      <th>Nama Owner</th>
                      <th>Jumlah Keseluruhan Properti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $perintah3 = "SELECT *, COUNT(owner) AS jumlah_properties FROM tb_properties AS properties INNER JOIN tb_users AS user ON properties.owner = user.name WHERE status > 0 GROUP BY owner";
                      $query3 = mysqli_query($conn, $perintah3);
                      while ($data3 = mysqli_fetch_array($query3)) {
                    ?>
                    <tr>
                      <td><?php echo $data3['name']; ?></td>
                      <td><?php echo $data3['jumlah_properties']; ?></td>
                      <td>
                        <a href="?page=laporan&aksi=detail3&id=<?php echo $data3['id_users']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
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