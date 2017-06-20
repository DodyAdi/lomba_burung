<?php
include 'header.php';
include 'koneksi.php';
 ?>
 <div class="row">
   <div class="col-md-3 col-md-offset-1 col-xs-6 col-xs-offset-3">
     <form action="Lihat_jadwal.php" method="post">
     <div class="form-group">
       <label>No Pembelian</label>
       <input type="text" name="kode" value="" class="form-control">
     </div>
     <div class="form-group">
       <input type="submit" class="btn btn-primary" value="Lihat No Gantangan">
     </div>
   </form>
  </div>
 </div>
 <?php if (isset($_POST['kode'])) { ?>
 <div class="row">
   <div class="col-md-6 col-md-offset-1">
     <div class="table-responsive">
       <table class="table table-bordered">
         <tr>
           <th>No</th>
           <th>Nama Kelas</th>
           <th>Burung Perlombaan</th>
           <th>No Gantangan</th>
         </tr>
           <?php

             $query = "SELECT k.`nama_kelas`,b.`nama_burung`, d_j.no_gantangan FROM kelas k
                      JOIN detail_jual d_j ON	k.`kd_kelas`=d_j.`kd_kelas`
                      JOIN burung b ON b.`id_burung`=k.`id_burung`
                      WHERE d_j.`kd_jual` = '{$_POST['kode']}'";
             $hasil = mysqli_query($konek,$query);
             $i = 1;
             while ($data = mysqli_fetch_assoc($hasil)) { ?>
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $data['nama_kelas']; ?></td>
                 <td><?php echo $data['nama_burung']; ?></td>
                 <td><?php echo $data['no_gantangan'] ?></td>
               </tr>

               <?php $i++;
              }
              ?>
       </table>
     </div>
     <div class="col-md-1 col-md-offset-11">
       <button type="button" class="btn btn-ghost" name="button" onclick="window.print()">Print</button>
     </div>
   </div>
 </div>
<?php } ?>
