<?php
   $host="localhost";
   $user="root";
   $pass="";
   $db="lomba_burung";
   $kelas_no = $_POST['kelas'];
   $data = array( );
   $konek=mysqli_connect($host,$user,$pass,$db);
   if (!$konek) die(mysqli_connect_error());
   $query = "select * from burung";
   $hasil = mysqli_query($konek, $query);
   $data['kelas'] = "<div class='row kelas$kelas_no'><div class='col-md-8' ><div class='form-group'><label>Nama Kelas ke - ".($kelas_no +1)." </label>
                      <input type='text' class='form-control' name='nama_kelas[]'></div>
                     <div class='form-group'><label>Harga Kelas ke -". ($kelas_no +1) ."</label>
                     <input type='number' class='form-control' name='harga[]'><br>
                     <button type='button' class='btn btn-danger' value='$kelas_no' onClick='klik(this.value)'>Hapus Kelas ".($kelas_no +1)."</button>
                     </div></div><div class='col-md-4'>";

   while ($isi=mysqli_fetch_assoc($hasil)){
    $data['kelas'] .= "<div class='checkbox'><label><input class='form-group' type='checkbox' name='burung[$kelas_no][]' value='{$isi['id_burung']}'>{$isi['nama_burung']}</label></div>";
   }
   $data['kelas'] .= "</div></div>";
   echo json_encode($data);
?>
