<?php
include "koneksi.php";
error_reporting();
echo  $_POST['tanggal'];
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];
$nama_lomba = $_POST['nama_lomba'];
$burung = $_POST['burung'];
$tanggal = $_POST['tanggal'];
$kelas = $_POST['nama_kelas'];
//$kode = rand(1,99). date('my');
$jml_burung = count($_POST['burung']);
$kode = $_POST['kode'];
$status = $_POST['status'];
// echo $tanggal.'<br>';
// echo $jam.'<br>';

$query = "UPDATE `lomba` SET `nama_lomba`='$nama_lomba',`tempat`='$alamat',`tanggal`='$tanggal',`status_lomba`='$status' WHERE kd_lomba = $kode";
echo $query."<br>";
$hasil = mysqli_query($konek, $query);
if (!$hasil) {
  echo mysqli_error($konek);
  echo "Gagal update data Lomba <br>";
}
else {
  //header("Location: data_burung.php");
  echo "berhasil lomba";
  $query = "DELETE FROM `kelas` WHERE kd_lomba = $kode";
  //echo $query."<br>";
  mysqli_query($konek, $query);
}
  //echo $jml_burung.'<br>';
  // echo $burung[0][0].'<br>';
  // echo $burung[0][1].'<br>';
  for ($i=0; $i < $jml_burung; $i++) {
    $jml_burung_kelas = count($burung[$i]);
    for ($j=0; $j < $jml_burung_kelas ; $j++) {

      $query = "insert into kelas (kd_lomba, nama_kelas, id_burung, harga, Stok_tiket) values ($kode,'$kelas[$i]',{$burung[$i][$j]},$harga[$i],60)";
      echo $query."<br>";
      $hasil = mysqli_query($konek, $query);
      if (!$hasil) {
        echo mysqli_error($konek);
        echo "Gagal Memasukan data Lomba Data <br>";
      }
      else {
        echo "berhasil kelas <br>";
      }
    }
  }
  echo mysqli_insert_id($konek);
?>
