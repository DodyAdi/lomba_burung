<?php
include 'header.php';
include 'koneksi.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
  $query = "SELECT * FROM panitia WHERE USER = 'admin' AND pass = md5('{$_POST['password']}')";
  $hasil = mysqli_query($konek, $query);
  $data = mysqli_fetch_assoc($hasil);
  if ($data['user'] == $_POST['username'] && $data['pass'] == md5($_POST['password'])) {
    $_SESSION['nama']= $data['user'];
    header("location: index.php");
  }
  else {
    $pesan = "USER ATAU Password Salah";
  }
}
?>
<link href="css/style.css" rel="stylesheet">
<div class = "col-md-4 col-md-offset-4">
  <div class = "container-fluid">
    <form action="login.php" method="post" name="Login_Form" class="form-signin"><br/><br/>
      <h2 class="text-primary" align="center"><b>LOGIN PANITIA</b></h3><br/><br/>
			<div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required/>
      </div>
      <div class="form-group">
        <label for=""><?php if (isset($pesan)): ?>

        <?php echo $pesan; endif; ?></label>
      </div>
      <button class="btn btn-sm btn-primary col-md-12"  name="Submit" value="Login" type="Submit">Login</button>
    </form>
  </div>
</div>
