<?php
include 'header.php';
include 'koneksi.php';
$query ="select * from burung";
$hasil= mysqli_query($konek,$query);
$i = 1;
?>
<script type="text/javascript">
  $( document ).ready(function() {
    $(".btn.btn-warning").on('click',function(){
      var id = this.id;
      var nama = this.value;
      $(".btn.btn-primary").val('edit');
      $("[name='nama']").val(nama);
      $("[name='id']").val(id);
      $('label').html('Edit Nama Jenis Burung')
      $("#cancel").html("<button type='button' class='btn btn-danger'>Cancel</button>");
    });
    $("#cancel").on('click',function(){
      $(".btn.btn-primary").val('simpan');
      $("[name='nama']").val('');
      $("[name='id']").val('');
      $('label').html('Nama Jenis Burung');
      $("#cancel").empty();
    });
  });

</script>
<div class="container-fluid" id='container'>
  <div class="row">
    <div class="col-md-4">
      <br>
      <form action="simpan_burung.php" method='POST'>
        <div class="form-group">
          <label>Nama Jenis Burung</label>
          <input type="text" class="form-control" placeholder="Nama Burung" name='nama'>
          <input type="hidden" name='id'>
        </div>
        <button type="submit" class="btn btn-primary" value="simpan" name='aksi'>Submit</button>
        <span id="cancel"></span>
      </form><br><br>
    </div>
    <div class="col-md-6 col-md-offset-1">
      <h3><b>Daftar Jenis Burung</b></h4>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr>
            <td style="width:10%;text-align:center;"><b>No</b></td>
            <td><b>Nama Burung</b></td>
            <td style="width:22%;"><b>Aksi</b></td>
          </tr>
          <tr>
          <?php    while ($data=mysqli_fetch_assoc($hasil)) {
              echo "<tr><td style='width:10%;text-align:center;'>$i</td>";
              echo "<td>{$data['nama_burung']}</td>";
              echo "<td>
                <button type='button' class='btn btn-warning' value='{$data['nama_burung']}' id='{$data['id_burung']}'>Edit</button>
                <a href='simpan_burung.php/?id={$data['id_burung']}&aksi=delete'><button type='button' class='btn btn-danger'>Hapus</button></a></td></tr>";
              $i++;
            } ?>
          </tr>
        </table>
      </div>
    </div>
</div>
