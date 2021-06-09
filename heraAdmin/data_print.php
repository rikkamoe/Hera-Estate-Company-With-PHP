<?php
require 'core/conn/conn.php';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$no = 1;
$id_tahun = $_POST['tahun'];
$id = $_POST['id'];
$cekuser = "SELECT * FROM tb_users WHERE id_users = '$id'";
$queryuser = mysqli_query($conn, $cekuser);
$datauser = mysqli_fetch_array($queryuser);
$user = $datauser['name'];

$html = '<!DOCTYPE html>
<html>
  <head>
    <title>Laporan Penjualan '.$user.'</title>
  </head>
  <body>
    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h1 align="center">Data Laporan Agent '.$user.'</h1>
          </div>
          <div class="card-body">
            <div class="table-responsive">   
              <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th width="40%">Tanggal Pembelian</th>
                    <th width="30%">Nama Properti</th>
                    <th width="20%">Jumlah Penjualan</th>
                  </tr>
                </thead>
                <tbody>';
                  
                  $perintah = "SELECT *,transaction.created_at_transaction AS tanggal_pembelian FROM tb_transaction AS transaction INNER JOIN tb_properties AS properties ON transaction.id_properties = properties.id_properties WHERE status_transaction > 0 AND id_agent = '$id' AND created_at_transaction LIKE '$id_tahun%'";
                  $query = mysqli_query($conn, $perintah);
                  while ($data = mysqli_fetch_array($query)) {
                  
                  $html .='
                  <tr>
                    <th>'.$no++.'</th>
                    <td>'.$data['tanggal_pembelian'].'</td>
                    <td>'.$data['name_properties'].'</td>
                    <td>$'.$data['price_transaction'].'</td>
                  </tr>';
                  }
                  
                  $perintah2 = "SELECT SUM(price_transaction) AS total FROM tb_transaction WHERE id_agent = '$id' AND status_transaction > 0 AND created_at_transaction LIKE '$id_tahun%'";
                  $query2 = mysqli_query($conn, $perintah2);
                  $data2 = mysqli_fetch_array($query2);
                  
                  $html .='
                    <tr>
                      <th colspan="3">Jumlah Keseluruhan Penjualan</th>
                        <td>$'.$data2['total'].'</td>
                    </tr>
                  ';

$html .=        '</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>