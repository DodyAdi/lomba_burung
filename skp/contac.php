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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<br>
  <h2 align="center"><b>Kontak PK2S</b></h2><br>
  <div class="container"> 

            <div class="row">
              
                  <div class="col-sm-4 ">
                     <h3>Alamat</h3>
                     <address>
                        <p><img src="gbr/home.png" width="30" height="30"/></i> Jl. Semarang - Yogyakarta No.20A Tamanagung</p>
                        <p><img src="gbr/bumi.png" width="30" height="30"/></i> MUNTILAN - MAGELANG</p>
                       
                     </address>
                     <br /><h3>Sosmed</h3>
                     <p><img src="gbr/facebook.png" width="30" height="30"/></i> <a href="https://www.facebook.com/groups/1720552024830971/?fref=ts"> PK2S</a></p>
                     
                    </div> 
                  <div class="col-sm-4 ">
                     <h3>Nomer Telphone</h3>
                     <p><img src="gbr/tlp.png" width="30" height="30"/></i> 082242666164 </p>  
					 <p><img src="gbr/tlp.png" width="30" height="30"/></i> 089678954123</p>
         </div>
            </div>
         </div>
    </div>
  </div>
<hr>
<br>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
  <h5><b>&copy; Copyright Dika Andritama - STMIK AKAKOM YOGYAKARTA 
  <br/> Paguyuban Kicau Mania Kamis Sore</b></h5>
</footer>

</body>
</html>