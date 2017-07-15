<?php
include 'header.php';
include 'koneksi.php';
 ?>
 <div class="row">
   <div class="col-md-6 col-md-offset-1">
     <div class="table-responsive">
       <table class="table table-bordered">
         <tr>
           <th style="text-align:center;">No</th>
           <th style="text-align:center;">Nama Kelas</th>
           <th style="text-align:center;">Jumlah Tiket Terjual</th>
           <th style="text-align:center;">Pendapatan PerLomba</th>
         </tr>
           <?php
             $query = "SELECT l.`nama_lomba` , COUNT(k.kd_kelas) AS jml, SUM(k.`harga`) AS pendapatan_perlomba FROM kelas k
		                  JOIN lomba l ON l.`kd_lomba`=k.`kd_lomba`
                      JOIN detail_jual d_j ON	d_j.`kd_kelas`=k.`kd_kelas`
                      JOIN jual j ON j.`kd_jual`=d_j.`kd_jual`
                      JOIN `konfirmasi_bayar` k_b ON k_b.`kd_jual`=j.`kd_jual`
                      GROUP BY l.`nama_lomba`";
             $hasil = mysqli_query($konek,$query);
             $i = 1;
             $total_pendapatan = 0 ;
             while ($data = mysqli_fetch_assoc($hasil)) {
               $total_pendapatan += $data['pendapatan_perlomba'];
               ?>
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $data['nama_lomba']; ?></td>
                 <td style="text-align:center;"><?php echo $data['jml']; ?></td>
                 <td style="text-align:right;"><?php echo $data['pendapatan_perlomba']; ?></td>
               </tr>

               <?php $i++;
              }

            ?>
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
