<?php
  include "index.php";
  include 'koneksi.php';
  $kd = $_GET['id'];
  $query_lomba = "select *, date_format(tanggal, '%d %M %Y / Pukul %H:%I') as waktu from lomba where kd_lomba = $kd";
  $hasil = mysqli_query($konek, $query_lomba);
  $data_lomba = mysqli_fetch_assoc($hasil);
 ?>
 <div class="col-md-8 col-md-offset-2">
   <h2 align='center'>Lomba Burung <?php echo $data_lomba['nama_lomba']; ?></h2>
   <div class="table-responsive">
     <table class="table table-bordered table-hover">
       <tr>
         <th>Nama Lomba</th>
         <th>Waktu Pelaksanaan</th>
         <th>Tempat</th>
         <th>Status</th>
       </tr>
       <tr>
         <td><?php echo $data_lomba['nama_lomba'] ?></td>
         <td><?php echo $data_lomba['waktu'] ?></td>
         <td><?php echo $data_lomba['tempat'] ?></td>
         <td><?php echo $data_lomba['status_lomba'] ?></td>
       </tr>
       <tr>
         <th colspan="2" ><b align='center'>Kelas Lomba</b></th>
         <th colspan="2" align='center'>Nama Burung</th>
       </tr>

         <?php
          $query_kelas = "select * from kelas where kd_lomba = {$data_lomba['kd_lomba']} group by nama_kelas";
          $hasil_kelas = mysqli_query($konek, $query_kelas);
          while ($data_kelas = mysqli_fetch_assoc($hasil_kelas)) {
            $burung = '';
            echo "<tr>";
            echo "<td colspan='2'>";
            echo $data_kelas['nama_kelas'];
            $query_burung = "select * from burung join kelas on burung.id_burung = kelas.id_burung where nama_kelas = '{$data_kelas['nama_kelas']}' and kd_lomba = {$data_lomba['kd_lomba']}";
            $hasil_burung = mysqli_query($konek, $query_burung);
            // echo $query_burung;
            while ($data_burung = mysqli_fetch_assoc($hasil_burung)) {
              $burung .= $data_burung['nama_burung'].'<br>';
            }
            echo "</td>";
            echo "<td colspan = '2'>";
            echo $burung;
            echo "</td>";
            echo "</tr>";
          }
          ?>


     </table>
   </div>
 </div>
