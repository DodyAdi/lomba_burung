<?php
include 'koneksi.php';
error_reporting(0);
if (isset($_POST['aksi']) || isset($_GET['aksi'])) {
  # code...

//digunakan untu mengedit data table burung
if ($_POST['aksi'] == "edit") {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $query = "update burung set nama_burung='$nama' where id_burung = $id";
  $hasil = mysqli_query($konek, $query);
  if (!$hasil) {
    echo mysqli_error($konek);
    echo "Gagal Mengedit Data <br>";
    echo "<input type='button' Value='KEMBALI' onClick='self.history.back()'>";
  }
  else {
    header("Location: form_data_burung.php");
  }
}

//digunakan untu menyimppan data ke tablle burung
elseif ($_POST['aksi'] == "simpan") {
  $nama = $_POST['nama'];
  $query = "INSERT INTO burung (nama_burung) VALUES ('$nama')";
  $hasil = mysqli_query($konek, $query);
  if (!$hasil) {
    echo "Gagal Memasukan Data <br>";
    echo "<input type='button' Value='KEMBALI' onClick='self.history.back()'>";
  }
  else {
    header("Location: form_data_burung.php");
  }
}

//digunakan untuk menghapus data burung
elseif ($_GET['aksi'] == "delete") {
  $id = $_GET['id'];
  echo "delete";
  $query = "delete from burung where id_burung=$id";
  $hasil = mysqli_query($konek, $query);
  if (!$hasil) {
    echo "Gagal Menghapus Data <br>";
    echo "<input type='button' Value='KEMBALI' onClick='self.history.back()'>";
  }
  else {
   header("Location: {$_SEVER['hostname']}/lomba_burung/form_data_burung.php");
  }
}
}
?>
