<?php
include "koneksi.php";
//error_reporting(0);
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];
$nama_lomba = $_POST['nama_lomba'];
$burung = $_POST['burung'];
$tanggal = $_POST['tanggal'];
$kelas = $_POST['nama_kelas'];
$kode = rand(1,99). date('my');
$jml_burung = count($_POST['burung']);
$foto = $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$size = $_FILES['foto']['size'];
$type_f = $_FILES['foto']['type'];
$dirFoto = "pict";
if (!is_dir($dirFoto))
mkdir($dirFoto);
$fileTujuanFoto = $dirFoto."/".$foto;

$query = "insert into lomba (kd_lomba, nama_lomba, tempat, tanggal, status_lomba,foto) values ($kode,'$nama_lomba','$alamat','$tanggal','Aktif','$foto')";
$hasil = mysqli_query($konek, $query);
if (!$hasil) {
  echo mysqli_error($konek);
  echo "Gagal Memasukan data Lomba Data <br>";
}
else {
  if (move_uploaded_file($tmpName, $fileTujuanFoto)){
		echo "berhasil upload gambar <br/>";
	}
	else{
		echo "gagal upload gambar <br/>";
	}
  echo "berhasil lomba";
}
  //echo $jml_burung.'<br>';
  // echo $burung[0][0].'<br>';
  // echo $burung[0][1].'<br>';
  for ($i=0; $i < $jml_burung; $i++) {
    $jml_burung_kelas = count($burung[$i]);
    for ($j=0; $j < $jml_burung_kelas ; $j++) {
      $query = "insert into kelas (kd_lomba, nama_kelas, id_burung, harga, Stok_tiket) values ($kode,'$kelas[$i]',{$burung[$i][$j]},$harga[$i],60)";
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
  //echo mysqli_insert_id($konek);
  header("Location: data_lomba.php");
?>
