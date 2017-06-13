<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon"
type="image/jpg"
href="gbr/becak.jpg">
  
	<title>Tiket Onlie </title> 
	<meta charset="utf-8">
	<meta name="viewport"i content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet"href="css/bootstrap.css">
	<script src="js/jquery.js"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set black background color and 100% height */
    .sidenav {
      background-color: #2d2d30;
	  color: white;
      height: 100%;
	  font-color:white;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
	
	
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav" >
      <h4>PK2S Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#section1">Home</a></li>
		 <li><a href="daftarpeserta.php"> Data Peserta</a></li>
        <li><a href="dataKburung.php">Data Kelas Burung</a></li>
        <li><a href="#section4">Data Jenis Burung</a></li>
        <li><a href="#section5">Laporan</a></li>
		 <li><a href="#section6">Menu SMS</a></li>
		 <li><a href="#section7">Log Out</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-10">
      
      
      <h2>Daftar Peserta</h2>
      <hr>
      
      
      
    </div>
  </div>
</div>