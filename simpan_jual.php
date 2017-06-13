<?php
include "koneksi.php";
error_reporting(0);
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$kelas = $_POST['nama_kelas'];
$harga = $_POST['harga'];
$burung = $_POST['burung'];

$kode = rand(1,99). date('ymd');
$jml_burung = count($_POST['burung']);
// echo $alamat;
// echo $tanggal.'<br>';
// echo $jam.'<br>';
$query_peserta = "insert into peserta (id_peserta, nama, alamat, jenis_kelamin, no_telp) values ($id,'$nama','$alamat','$jk',$no_telp)";
echo $query_peserta."<br>";
$hasil_peserta = mysqli_query($konek, $query_peserta);
if (!$hasil_peserta) {
  echo mysqli_error($konek);
  echo "Gagal Memasukan data Peserta <br><br>";
}
else {
  //header("Location: data_burung.php");
  echo "berhasil peserta<br><br>";
}

$query_jual = "insert into jual (kd_jual, id_peserta) values ($kode,$id)";
echo $query_jual."<br>";
$hasil_jual = mysqli_query($konek, $query_jual);
if (!$hasil_jual) {
  echo mysqli_error($konek);
  echo "Gagal Memasukan data jual <br><br>";
}
else {
  //header("Location: data_burung.php");
  echo "berhasil jual<br><br>";
}
  //echo $jml_burung.'<br>';
  // echo $burung[0][0].'<br>';
  // echo $burung[0][1].'<br>';
  $total_harga = 0 ;
  for ($i=0; $i < $jml_burung; $i++) {
    $jml_burung_kelas = count($burung[$i]);
    for ($j=0; $j < $jml_burung_kelas ; $j++) {
      $query = "select * from kelas where nama_kelas = '$kelas[$i]' and id_burung = {$burung[$i][$j]}";
      $hasil = mysqli_query($konek, $query);
      $data = mysqli_fetch_assoc($hasil);
      $total_harga += $data['harga'];

      $query_detail = "insert into detail_jual (kd_jual, kd_kelas) values ($kode,{$data['kd_kelas']})";
      echo $query_detail."<br>";
      $hasil_detail = mysqli_query($konek, $query_detail);

      if (!$hasil_detail) {
        echo mysqli_error($konek);
        echo "Gagal Memasukan data detail jual<br><br>";
        //$total_harga += $data['harga'];
      }
      else {
        echo "berhasil detail_jual<br><br>";
        //$total_harga += $harga[$i];
      }
    }
  }

  $query = "UPDATE jual SET total_harga =  $total_harga WHERE kd_jual = $kode";
  mysqli_query($konek, $query);
  //echo mysqli_insert_id($konek);
?>
