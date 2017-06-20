<?php
  include 'header.php';
  include 'koneksi.php';
  $kd = $_GET['id'];
  $query_lomba = "select *,DATE_FORMAT(tanggal, '%Y-%m-%dT%H:%i') AS waktu from lomba where kd_lomba = $kd";
  $hasil_lomba = mysqli_query($konek, $query_lomba);
  $data_lomba = mysqli_fetch_assoc($hasil_lomba);
 ?>

<div class="container-fluid" id='container'>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br>
      <form action="edit_lomba.php" method='POST'>
        <div class="form-group">
          <label>Nama Lomba</label>
          <input type="hidden" name="kode" value="<?php echo $data_lomba['kd_lomba']; ?>">
          <input type="text" class="form-control" placeholder="Nama Lomba" name='nama_lomba' value="<?php echo $data_lomba['nama_lomba']; ?>">
        </div>
        <div class="form-group">
          <label>Waktu Pelaksanaan</label>
          <input type="datetime-local"  format="dd/MM/yyyy" class="form-control" name='tanggal' value="<?php echo $data_lomba['waktu']; ?>">
        </div>
        <div class="form-group">
          <label>Tempat Perlombaan</label>
          <textarea name="alamat" rows="8" cols="80" class="form-control"><?php echo $data_lomba['tempat']; ?></textarea>
        </div>
        <div class="radio">
          <b>Status</b><br>
          <label class="radio-inline">
            <input type="radio" name="status" value="Aktif" <?php if ($data_lomba['status_lomba'] == 'Aktif'){ echo "checked"; }?>>
            Aktif
          </label>
          <label class="radio-inline">
            <input type="radio" name="status" value="Tidak Aktif" <?php if ($data_lomba['status_lomba'] == 'Tidak Aktif'){ echo "checked"; }?>>
            Tidak Aktif
          </label>
        </div>
        <br>
      <!--  <button type="button" class="btn btn-info" >Tambah Kelas</button> -->
        <div class="form-group">
          <div class="tampil data">
              <?php
                $query_kelas = "select * from kelas where kd_lomba = $kd group by nama_kelas";
                $hasil_kelas = mysqli_query($konek, $query_kelas);
                $i=0;

                while ($data_kelas = mysqli_fetch_assoc($hasil_kelas)) {
                  $burung = '';
                  $arr_burung= array();
                  $no = 0;

                  $query_cari = "select * from burung join kelas on burung.id_burung = kelas.id_burung where nama_kelas = '{$data_kelas['nama_kelas']}' and kd_lomba = {$data_lomba['kd_lomba']}";
                  $hasil_cari = mysqli_query($konek, $query_cari);
                  while ($data_cari = mysqli_fetch_assoc($hasil_cari)) {
                    array_push($arr_burung,$data_cari['nama_burung']);
                  }

                  $query_burung = "select * from burung";
                  $hasil_burung = mysqli_query($konek, $query_burung);
                  while ($data_burung = mysqli_fetch_assoc($hasil_burung)) {
                    if (in_array($data_burung['nama_burung'], $arr_burung)) {
                        $burung .= "<div class='checkbox'><label><input class='form-group' type='checkbox' name='burung[$i][]' value='{$data_burung['id_burung']}' checked >{$data_burung['nama_burung']}</label></div>";
                    }
                    else {
                      $burung.= "<div class='checkbox'><label><input class='form-group' type='checkbox' name='burung[$i][]' value='{$data_burung['id_burung']}'>{$data_burung['nama_burung']}</label></div>";
                    }
                  }

                  echo "<div class='col-md-8' >
                            <div class='form-group'>
                              <label>Nama Kelas ".$data_kelas['nama_kelas']." </label>
                                <input type='text' class='form-control' name='nama_kelas[]' value='{$data_kelas['nama_kelas']}'>
                            </div>
                            <div class='form-group'>
                              <label>Harga Kelas ". $data_kelas['nama_kelas'] ."</label>
                                <input type='number' class='form-control' name='harga[]' value='{$data_kelas['harga']}'><br>
                            </div>
                          </div>
                          <div class='col-md-4'>$burung</div>";
                  $i++;
                }
               ?>
          </div>
        <button type="submit" class="btn btn-primary" value="simpan" name='aksi'>Submit</button>
      </form>
    </div>
</div>
<br><br><br><br><br>
