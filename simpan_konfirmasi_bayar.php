<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$foto = $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$size = $_FILES['foto']['size'];
$type_f = $_FILES['foto']['type'];
$maxsize = 1500000;
$typeYgBoleh = array("image/jpeg", "image/png", "image/pjpeg");
$dirFoto = "bukti_bayar";
if (!is_dir($dirFoto))
mkdir($dirFoto);
$fileTujuanFoto = $dirFoto."/".$foto;
$insert = '';
$insert_konfirmasi = "INSERT INTO konfirmasi_bayar (`kd_jual`,`bukti_bayar`) VALUE ('{$kode}','{$foto}')";
$hasil_insert_konfirmasi = mysqli_query($konek, $insert_konfirmasi);
if (!$hasil_insert_konfirmasi) {
  echo mysqli_error($konek);
  echo "Gagal Memasukan data konfirmasi bayar <br><br>";
  $insert = 'gagal';
}
else {
  echo "berhasil konfirmasi bayar<br><br>";
  $insert = 'berhasil';
}

if ($size > 0 && $insert == "berhasil"){
	if (move_uploaded_file($tmpName, $fileTujuanFoto)){
		echo "berhasil upload gambar <br/>";
	}
	else{
		exit();
	}
}
 ?>
