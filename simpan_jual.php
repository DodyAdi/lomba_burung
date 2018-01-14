<?php
include "koneksi.php";
error_reporting(0);
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = '0'.$_POST['no_telp'];
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
$query = "SELECT j.* FROM `peserta` p
  LEFT JOIN `jual` j
  ON p.`id_peserta` = j.`id_peserta`
  LEFT JOIN `detail_jual` dj
  ON dj.`kd_jual`=j.`kd_jual`
  WHERE p.`no_idendtitas`= $id";
$hasil = mysqli_query($konek, $query);
$data = mysqli_fetch_assoc($hasil);
if (isset($data)) {
  echo "No Identitas $id Sudah Digunakan Untuk Perlombaan Ini <br>";
  echo "<button onClick='history.back()'>Kembali</button>";
  exit();
}

$query_peserta = "insert into peserta (no_identitas, nama, alamat, jenis_kelamin, no_telp) values ($id,'$nama','$alamat','$jk',$no_telp)";
echo $query_peserta."<br>";
$hasil_peserta = mysqli_query($konek, $query_peserta);
if (!$hasil_peserta) {
  echo mysqli_error($konek);
  echo "<br>Gagal Memasukan data Peserta <br>";
}
else {
  $id = mysqli_insert_id($konek);
  //header("Location: data_burung.php");
  echo "berhasil peserta<br><br>";
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
    $db_sms="gammu_sms";
    $konek_sms=mysqli_connect($host,$user,$pass,$db_sms);
    if (!$konek_sms) die(mysqli_connect_error());
    $pesan = "Pembelian dengan kode $kode berhasil dilakukan, mohon transfer Rp. $total_harga ke Rek:37498237497239 dalam waktu 1x24 jam";
    $query_sms = mysqli_query($konek_sms, "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) value ('$no_telp','$pesan', 'Gammu')");
    if ($query_sms) {
      header("location: konfirmasi_bayar.php");
    }
  }
}

//echo mysqli_insert_id($konek);
  //echo $jml_burung.'<br>';
  // echo $burung[0][0].'<br>';
  // echo $burung[0][1].'<br>';
?>
