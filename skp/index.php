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
		<li><a href="visimisi.php">Visi - Misi</a></li>
        <li><a href="contac.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="gbr/panitia.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Panitia PK2S</h3>
        </div>      
      </div>

      <div class="item">
        <img src="gbr/panitia1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Panitia PK2S</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<hr/>
  <div class="container"> 
    <div class="col-sm-12" >
      <div class="well">
       <H2 style=text-align:center><b>Paguyuban Kicau Mania Kamis Sore (PK2S)</b></H2>
	   <br>
	   <p>Di Kota Muntilan, Kabupaten Magelang Jawa Tengah terdapat salah satu komunitas burung yang bernama Paguyuban Kicau Mania Kamis Sore (PK2S).
	   Perkumpulan penggemar burung berkicau (PK2S) ini tergabung dalam komunitas yang sama-sama memiliki kegemaran atau hobi memelihara burung berkicau,
		dan juga saling berbagi informasi mengenai burung-burung berkicau yang mereka pelihara baik itu mengenai info tentang perawatan, pemeliharaan, 
	   dan pengobatan khususnya dalam starategi dalam meningkatkan kejernihan dan kemerduan suara burung agar burung-burung tersebut dapat di ikut seratakan dalam kontes lomba agar bisa memenangkan perlombaan. </p>
      </div>
      
    </div>
  
</div><br>


<footer class="container-fluid text-center">
  <h5><b>&copy; Copyright Dika Andritama - STMIK AKAKOM YOGYAKARTA 
  <br/> Paguyuban Kicau Mania Kamis Sore</b></h5>
</footer>
</body>

</html>