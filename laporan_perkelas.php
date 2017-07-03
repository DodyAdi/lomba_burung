<?php
include 'header.php';
include 'koneksi.php';
 ?>
 <div class="row">
   <div class="col-md-3 col-md-offset-1 col-xs-6 col-xs-offset-3">
     <form action="laporan_perkelas.php" method="post">

     <div class="form-group">
       <label>Lomba</label>
       <select class="form-control" name="lomba">
         <option value="">Pilih Lomba</option>
         <?php
          $lomba = "SELECT * from lomba";
          $hasil = mysqli_query($konek, $lomba);
          while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <option value="<?php echo $data['kd_lomba']; ?>"><?php echo $data['nama_lomba']; ?></option>
          <?php
          }
          ?>
       </select>
     </div>
     <div class="form-group">
       <input type="submit" class="btn btn-primary" value="Lihat Laporan">
     </div>
   </form>
  </div>
 </div>
 <div class="row">
   <div class="col-md-6 col-md-offset-1">
     <div class="table-responsive">
       <table class="table table-bordered">
         <tr>
           <th style="text-align:center;">No</th>
           <th style="text-align:center;">Nama Kelas</th>
           <th style="text-align:center;">Jumlah Tiket Terjual</th>
           <th style="text-align:center;">Pendapatan PerKelas</th>
         </tr>
           <?php
           if (isset($_POST['lomba'])) {
             $query = "SELECT k.`nama_kelas`, COUNT(k.kd_kelas) AS jml, (COUNT(k.kd_kelas) * k.`harga`) AS pendapatan_perkelas FROM kelas k
                      JOIN detail_jual d_j ON	d_j.`kd_kelas`=k.`kd_kelas`
                      JOIN jual j ON j.`kd_jual`=d_j.`kd_jual`
                      JOIN `konfirmasi_bayar` k_b ON k_b.`kd_jual`=j.`kd_jual`
                      WHERE k.kd_lomba = '{$_POST['lomba']}' AND k_b.`status`='Terverivikasi' GROUP BY k.`nama_kelas`";
             $hasil = mysqli_query($konek,$query);
             $i = 1;
             $total_pendapatan = 0 ;
             while ($data = mysqli_fetch_assoc($hasil)) {
               $total_pendapatan += $data['pendapatan_perkelas'];
               ?>
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $data['nama_kelas']; ?></td>
                 <td style="text-align:center;"><?php echo $data['jml']; ?></td>
                 <td style="text-align:right;"><?php echo $data['pendapatan_perkelas']; ?></td>
               </tr>

               <?php $i++;
              }

           } ?>
           <tr>
             <th colspan="3">Total Pendapatan</th>
             <th style="text-align:right;"><?php if (isset($total_pendapatan))echo $total_pendapatan; ?></th>
           </tr>
       </table>
     </div>
     <div class="col-md-1 col-md-offset-11">
       <button type="button" class="btn btn-ghost" name="button" onclick="window.print()">Print</button>
     </div>
   </div>
 </div>

<script type="text/javascript">
  $("#lomba").on('change',function() {
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: 'tambah_kelas.php',
      data:  {kelas : i},
      success: function(data){
         $(".tampil.data").append(data.kelas);
       }
     });
  });
</script>
