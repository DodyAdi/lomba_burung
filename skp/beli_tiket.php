<!DOCTYPE html>
<html lang="en">
<head>
  <title>PK2S_Muntilan</title>

  <link rel="icon"type="image/jpg"href="gbr/logo.jpg">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="pendaftaran.php">Pendaftaran
        <span class="caret"></span></a>
        
		<ul class="dropdown-menu">
          <li><a href="beli_tiket.php">Beli Tiket</a></li>
          <li><a href="konfirmasibayar.php">Konfirmasi Bayar</a></li>  
		</ul>
        </li>
	  
        <li><a href="jadwallomba.php">Info Jadwal Lomba</a></li>
        <li><a href="contac.php">Contact</a></li>
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">    
<br>
<br>
  <h2 align="center"> <b>Form Pendaftaran  </b> </h2>
  <br>
  <br>
<form class="form-horizontal">
<div class="form-group">
                                <label class="control-label col-lg-4">Nama</label>
                                <div class="col-lg-4">
                                    <input type="text" id="nama" name="nama" class="form-control" required autofocus/>
                                </div>
                            </div>
<div class="form-group">
                                <label class="control-label col-lg-4">Alamat</label>
                                <div class="col-lg-4">
                                    <input type="text" id="alamat" name="alamat" class="form-control" required autofocus/>
                                </div>
                            </div>
<div class="form-group">
                                <label class="control-label col-lg-4">Jenis Kelamin </label>

                                <div class="col-lg-4">
                                   <td class="form-control">
                                    <input name="jkelamin" type="radio" value="Laki-laki" required autofocus/ >
                                    Laki-laki &nbsp; &nbsp;
                                    <input type="radio" name="jkelamin" value="Perempuan" required autofocus/>
                                    Perempuan </td>
                                </div>
                            </div>
 <div class="form-group">
                                <label class="control-label col-lg-4">No. Telepon</label>
                                <div class="col-lg-4">
                                    <input type="text" id="telepon" name="telepon" class="form-control" required autofocus/>
                                </div>
                            </div>

<div class="control-label col-lg-8">

	 <input type="submit" class="btn btn-primary"  value="Daftar">&nbsp;&nbsp;
     <input type="submit" style='cursor:pointer;'onclick='self.history.back()'  class="btn btn-primary"  value="Batal">
 
</div><br>
<br>
<br>
<footer class="container-fluid text-center">
  <h5><b>&copy; Copyright Dika Andritama - STMIK AKAKOM YOGYAKARTA 
  <br/> Paguyuban Kicau Mania Kamis Sore</b></h5>
</footer>
</div>
</body>
</html>