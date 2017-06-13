<?php
  include 'index.php';
 ?>

<script type="text/javascript">
var i=0;
function klik(data) {
  console.log(data);
  $('.row.kelas'+data).remove();
}

$( document ).ready(function() {
  $(".btn.btn-info").on('click',function(){
    //console.log('asdasd')
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: 'tambah_kelas.php',
      data:  {kelas : i},
      success: function(data){
    	   $(".tampil.data").append(data.kelas);
       }
     });
    i++;
  });

});
</script>
<div class="container-fluid" id='container'>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br>
      <form action="simpan_lomba.php" method='POST'>
        <div class="form-group">
          <label>Nama Lomba</label>
          <input type="text" class="form-control" placeholder="Nama Burung" name='nama_lomba'>
        </div>
        <div class="form-group">
          <label>Waktu Pelaksanaan</label>
          <input type="datetime-local"  format="dd/MM/yyyy" class="form-control" name='tanggal'>
        </div>
        <div class="form-group">
          <label>Tempat Perlombaan</label>
          <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
        </div>
          <button type="button" class="btn btn-info" >Tambah Kelas</button>
        <div class="form-group">
          <div class="tampil data">

          </div>

        </div><button type="" class="btn btn-primary" value="simpan" id="akelas['0']">Submit</button>
        <button type="submit" class="btn btn-primary" value="simpan" name='aksi'>Submit</button>
      </form>
    </div>
</div>
<br><br><br><br><br>
