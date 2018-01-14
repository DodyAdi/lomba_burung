<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lomba Burung</title>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
    </script>
  </head>
  <body>

      <nav class="navbar navbar-inverse">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#list-navbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
        <a href="index.php" class="navbar-brand">Lomba Burung</a>
      </div>
        <div class="collapse navbar-collapse" id="list-navbar">
          <ul class="nav navbar-nav">
            <?php if (!isset($_SESSION['nama'])): ?>
            <li class="active"><a href="index.php">Home</a> </li>
            <li><a href="form_penjualan.php">Pesan Tiket</a> </li>
            <li><a href="konfirmasi_bayar.php">Konfirmasi Bayar</a> </li>
            <li><a href="lihat_jadwal.php">Lihat Jadwal</a> </li>
            <li><a href="kontak.php">Kontak</a> </li>
          <?php endif; ?>
            <?php  if (isset($_SESSION['nama'])): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Kelola Data<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="form_data_burung.php">Kelola Data Burung</a></li>
                  <li><a href="data_lomba.php">Kelola Data Perlombaan</a></li>
                  <li><a href="daftar_konfirmasi.php">Kelola Data Konfirmasi Pembayaran</a></li>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Laporan<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="laporan_perkelas.php">Laporan Per Kelas</a></li>
                    <li><a href="laporan_penjualan.php">Laporan Penjualan</a></li>
                  </ul>
                </li>
            <?php endif; ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['nama'])): ?>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a> </li>
            <?php endif; ?>
            <?php if (!isset($_SESSION['nama'])): ?>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <?php endif; ?>
          </ul>
        </div>

    </nav>


    </div>
  </body>
</html>
