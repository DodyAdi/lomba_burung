<?php
  include 'header.php';
  include 'koneksi.php';
 ?>
<div class="container-fluid" id='container'>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
    <a href="form_lomba.php"><button type="button" class="btn btn-info" >Tambah Lomba</button></a>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr>
            <th width='3%'>No</th>
            <th width='20%'>Nama Lomba</th>
            <th >tempat</th>
            <th  width='20%'>Waktu Lomba</th>
            <th width='15%'>Status Lomba</th>
            <th width='25%'>Aksi</th>
          </tr>
          <tr>

            <?php
            $i = 1;
            $query_lomba = "SELECT *, date_format(tanggal, '%d %M %Y / Pukul %H:%I') as waktu FROM lomba";
            $hasil_lomba = mysqli_query($konek, $query_lomba);
            while ($data = mysqli_fetch_assoc($hasil_lomba)) {
              echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>{$data['nama_lomba']} <a href='detail_lomba.php?id={$data['kd_lomba']}'>Lihat Detail</a></td>";
              echo "<td width='25%'>{$data['tempat']}</td>";
              echo "<td>{$data['waktu']}</td>";
              if ($data['status_lomba'] == 'Aktif') {
                echo "<td align='center'><button type='button' class='btn btn-primary'>{$data['status_lomba']}</button></td>";
              }
              else {
                echo "<td align='center'><button type='button' class='btn btn-warning'>{$data['status_lomba']}</button></td>";
              }
              echo "<td><a href='form_edit_lomba.php?id={$data['kd_lomba']}'><button type='button' class='btn btn-warning'>Edit</button></a>
                <a href='hapus_lomba.php?id={$data['kd_lomba']}&aksi=delete' onClick='return confirm(\"Yakin hapus Lomba {$data['nama_lomba']} ?\")'><button type='button' class='btn btn-danger'>Hapus</button></td>";
              // $query_kelas = "SELECT * FROM kelas where kd_lomba = {$data['kd_lomba']} group by nama_kelas";
              // $hasil_kelas = mysqli_query($konek, $query_kelas);
              // $kelas = '';
              // while ($data_kelas = mysqli_fetch_assoc($hasil_kelas)) {
              //   $kelas .=  "{$data_kelas['nama_kelas']}<br>";
              //   $burung = '';
              //   $query_burung = "SELECT * FROM burung join kelas on burung.id_burung = kelas.id_burung where kd_kelas = {$data['kd_lomba']}";
              //   $hasil_burung = mysqli_query($konek, $query_burung);
              //   while ($data_burung = mysqli_fetch_assoc($hasil_burung)) {
              //     $burung .= $data_burung['nama_burung'];
              //   }
              // }
              echo "</tr>";
              $i++;
            }
             ?>
          </tr>

        </table>
      </div>
    </div>
  </div>
</div
<br><br><br><br><br>
