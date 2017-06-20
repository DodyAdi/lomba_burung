<?php
include 'koneksi.php';
$kode = $_GET['id'];
$query = "DELETE FROM `lomba` WHERE `kd_lomba` = '$kode'";
$hasil = mysqli_query($konek, $query);
if ($hasil) {
  header("location: data_lomba.php");
}
else {
  echo "gagal hapus lomba";
}
?>
