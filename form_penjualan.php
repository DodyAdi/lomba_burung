<?php include 'header.php'; include 'koneksi.php';
$query = "SELECT *, DATE_FORMAT(tanggal, '%d %M %Y / Pukul %H:%I') AS waktu FROM Lomba WHERE status_lomba = 'Aktif' ORDER BY tanggal DESC ";
$hasil = mysqli_query($konek, $query);
$data = mysqli_fetch_assoc($hasil);
$kode = $data['kd_lomba'];
?>
<div class="container-fluid" id='container'>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 align = 'center'>Pendaftaran Tiket Lomba</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h4 align = 'center'><?php echo $data['nama_lomba'] ?></h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h4 align = 'center'><?php echo $data['waktu'] ?></h4>
        </div>
      </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br>
      <form action="simpan_jual.php" method='POST'>
        <div class="form-group">
          <label>No Identitas</label>
          <input type="number" class="form-control" placeholder="KTP, SIM, Passport" name='id'>
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" placeholder="Nama Peserta" name='nama'>
        </div>
        <label>No Telepon</label>
        <div class="input-group">
          <span class="input-group-addon">+62</span>
          <input type="number" class="form-control" id='x' name='no_telp' placeholder="812354365">
        </div><br>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label><br>
          <input class="radio-inline" type="radio" name="jk" value="L"> Laki - laki </input>
          <input class="radio-inline" type="radio" name="jk" value="P"> Perempuan </input>
        </div>
      <!--  <div class="form-group">
          <label>Pilih Lomba</label><br>
          <select class="form-control">
            <?php
              // $query = 'select *from lomba';
              // $hasil = mysqli_query($konek,$query);
              // while ($data=mysqli_fetch_assoc($hasil)) {
              //   echo "<option value='{$data['kd_lomba']}'>{$data['nama_lomba']}</option>";
              // }
             ?>
          </select>
        </div> -->
        <div class="form-group">
            <?php
            //echo $data['kd_lomba'];
              $query_kelas = "select * from kelas where kd_lomba = $kode group by nama_kelas";
              $hasil_kelas = mysqli_query($konek, $query_kelas);
              $i=0;

              while ($data_kelas = mysqli_fetch_assoc($hasil_kelas)) {
                $burung = '';
                $arr_burung= array();
                $no = 0;

                $query_burung = "select * from burung join kelas on burung.id_burung = kelas.id_burung where nama_kelas = '{$data_kelas['nama_kelas']}' and kd_lomba = $kode";
                $hasil_burung = mysqli_query($konek, $query_burung);
                while ($data_burung = mysqli_fetch_assoc($hasil_burung)) {
                    $burung.= "<div class='checkbox'><label><input class='form-group' type='checkbox' name='burung[$i][]' value='{$data_burung['id_burung']}'>{$data_burung['nama_burung']}</label></div>";
                }

                echo "<table class='table table-hover'>
                        <tr>
                          <td>
                        <div class='col-md-6' >
                          <div class='form-group'>
                            <label>Kelas ".$data_kelas['nama_kelas']." </label>
                              <input type='hidden' class='form-control' name='nama_kelas[]' value='{$data_kelas['nama_kelas']}'>
                          </div>
                          <div class='form-group'>
                            <label>Harga Tiket ". $data_kelas['harga'] ."</label>
                              <input type='hidden' class='form-control' name='harga[]' value='{$data_kelas['harga']}'><br>
                          </div>
                        </div>
                        <div class='col-md-6'>$burung</div>
                        </td>
                      </tr>
                    </table>";
                $i++;
              }
             ?>
        </div>
        <button type="submit" class="btn btn-primary" value="simpan" name='aksi'>Submit</button>
      </form>
    </div>
</div>
<br><br><br><br><br>
