<?php
include 'koneksi.php';
include 'header.php';
$query = "SELECT *,DATE_FORMAT(tgl_bayar, '%d %M %Y / Pukul %H:%I') AS waktu FROM konfirmasi_bayar k_b
JOIN jual j ON k_b.`kd_jual` = j.`kd_jual`
JOIN detail_jual d_j ON j.`kd_jual`=d_j.`kd_jual`
JOIN kelas k ON	k.`kd_kelas` = d_j.`kd_kelas`
JOIN lomba l ON l.`kd_lomba` = k.`kd_lomba`
WHERE j.`kd_jual` IN (SELECT kd_jual FROM konfirmasi_bayar) AND k_b.`status` = 'Tidak Terverivikasi' GROUP BY j.kd_jual";
$hasil = mysqli_query($konek, $query);
 ?>
 <div class="container-fluid" id='container'>
   <br>
   <div class="row">
     <div class="col-md-10 col-md-offset-1">
       <div class="table-responsive">
         <table class="table table-bordered table-hover">
           <tr>
             <th width='3%'>No</th>
             <th>No Penjualan</th>
             <th>Id Pembeli</th>
             <th width='20%'>Nama Lomba</th>
             <th>Total Harga</th>
             <th>Tanggal Bayar</th>
             <th width='15%'>Status Lomba</th>
             <th width='10%'>Aksi</th>
           </tr>
           <tr>

             <?php
             $i = 1;
             while ($data = mysqli_fetch_assoc($hasil)) {
               echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>{$data['kd_jual']}</td>";
                echo "<td>{$data['id_peserta']}</td>";
                echo "<td>{$data['nama_lomba']}</td>";
                echo "<td>{$data['total_harga']}</td>";
                echo "<td>{$data['waktu']}</td>";
                echo "<td>{$data['status_lomba']}</td>";
                echo "<td><a href='verivikasi_bayar.php?id={$data['kd_jual']}'><button type='button' class='btn btn-success'>Verivikasi</button>";
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
