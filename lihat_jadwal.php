<?php
include 'header.php';
include 'koneksi.php';
$query = "SELECT *, DATE_FORMAT(tanggal, '%d %M %Y / Pukul %H:%I') AS waktu FROM Lomba WHERE status_lomba = 'Aktif' ORDER BY tanggal DESC ";
$hasil = mysqli_query($konek, $query);
$data = mysqli_fetch_assoc($hasil);
 ?>
 <style media="screen">
 fieldset {
   display: block;
   margin-left: 2px;
   margin-right: 2px;
   padding-top: 0.35em;
   padding-bottom: 0.625em;
   padding-left: 0.75em;
   padding-right: 0.75em;
   border: 2px groove (internal value);
 }
 </style>
 <div class="row">
   <div class="col-md-8 col-md-offset-2">
     <h2 class="text-center">Jadwal Lomba Rutin PK2S</h2>
     <table class="table table-bordered">
       <tr style='background-color:#E6E6FA'>
         <th class="text-center">No</th>
         <th class="text-center">Hari</th>
         <th class="text-center">Jam Mulai</th>
         <th class="text-center">Kelas</th>
       </tr>
       <tr>
         <th class="text-center">1</th>
         <th class="text-center">Kamis</th>
         <th class="text-center">15.00</th>
         <th class="text-center">Latber</th>
       </tr>
       <tr>
         <th class="text-center">2</th>
         <th class="text-center">Kamis (Pahing)</th>
         <th class="text-center">15.00</th>
         <th class="text-center">Latpres</th>
       </tr>
     </table>
   </div>
 </div>

   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <fieldset>
         <legend>Browsur Lomba</legend>
         <img class="col-md-12" src="pict/<?php echo $data['foto'] ?>" alt="">
       </fieldset>
     </div>
   </div>
<br><br>
 <div class="row">
   <div class="col-md-8 col-md-offset-2 col-xs-6 col-xs-offset-3">
     <hr>
     <form action="Lihat_jadwal.php" method="post">
     <div class="form-group">
       <legend>Cek No Gantangan</legend>
       <label>No Pembelian :</label>
       <input type="text" name="kode" value="" class="form-control" style="width:30%">
     </div>
     <div class="form-group">
       <input type="submit" class="btn btn-primary" value="Lihat No Gantangan">
     </div>
   </form>
  </div>
 </div>
 <?php if (isset($_POST['kode'])) { ?>
 <div class="row">
   <div class="col-md-6 col-md-offset-2">
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
