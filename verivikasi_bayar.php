<?php
include 'koneksi.php';
$kode = $_GET['id'];
function insert_gantangan($konek,$kelas, $kode_jual){
  //echo $konek;
  echo $kelas.'<br>';
  echo $kode_jual.'<br>';
  $no_gantangan = rand(1,60);
  $query_cek_kelas  = "SELECT COUNT(no_gantangan) AS jml FROM detail_jual WHERE no_gantangan = $no_gantangan AND kd_kelas = $kelas";
  $hasil_cek_kelas = mysqli_query($konek,$query_cek_kelas);
  $data_cek_kelas = mysqli_fetch_assoc($hasil_cek_kelas);
   if ($data_cek_kelas['jml'] == 0) {
     $query_update_gantangan = "UPDATE detail_jual SET no_gantangan = $no_gantangan WHERE kd_kelas = $kelas AND kd_jual = '$kode_jual'";
     mysqli_query($konek,$query_update_gantangan);
     $query_update_stok = "UPDATE kelas SET stok_tiket = stok_tiket-1 WHERE kd_kelas = '$kelas'";
     mysqli_query($konek,$query_update_stok);
     echo "berhasil<br>";
   }
   else {
     insert_gantangan($konek,$kelas, $kode_jual);
     echo "tidak berhasil<br>";
   }
}

$query =  "SELECT * FROM detail_jual d_j WHERE d_j.`kd_jual` = '$kode'";
$hasil = mysqli_query($konek,$query);
//echo $query;
while ($data = mysqli_fetch_assoc($hasil)) {
  //$query_cek_jumlah = "SELECT COUNT(kd_jual) AS jml FROM detail_jual WHERE no_gantangan != 0 AND kd_kelas = {$data['kd_kelas']}";
  $query_cek_jumlah ="SELECT k.`stok_tiket` FROM kelas k WHERE k.`kd_kelas`= {$data['kd_kelas']}";
  $hasil_query_cek_jumlah = mysqli_query($konek,$query_cek_jumlah);
  $data_cek_jumlah = mysqli_fetch_assoc($hasil_query_cek_jumlah);
  if ($data_cek_jumlah['stok_tiket'] > 0) {
    insert_gantangan($konek, $data['kd_kelas'], $kode);
  }
  else {
    echo "kelas penuh";
  }
}
$query_update_status = "UPDATE konfirmasi_bayar SET STATUS = 'Terverivikasi' WHERE kd_jual = '$kode'";
$hasil_update = mysqli_query($konek, $query_update_status);
if ($hasil_update) {
  header("Location: /lomba_burung/daftar_konfirmasi.php");
  //header("Location: /proyek_server/home.html");
}
else {
  echo "gagal update status";
}
 ?>
