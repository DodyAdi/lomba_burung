<?php
  include 'header.php';
 ?>
</script>
<div class="container-fluid" id='container'>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br>
      <form action="simpan_konfirmasi_bayar.php" method='POST' enctype="multipart/form-data">
        <div class="form-group">
          <label>Kode Pembelian</label>
          <input type="text" class="form-control" placeholder="Nama Burung" name='kode'>
        </div>
        <div class="form-group">
          <label>Bukti beli</label>
          <input type="file" class="form-control" placeholder="Nama Burung" name='foto'>
        </div>
        <button type="submit" class="btn btn-primary" value="simpan" name='aksi'>Submit</button>
      </form>
    </div>
  </div>
</div>
<br><br><br><br><br>
