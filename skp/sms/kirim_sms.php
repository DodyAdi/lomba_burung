<html>
<head>
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

<?php
  error_reporting(0);
  include "connect.php"
?>
<div class="container text-center">  
<h3> Kirim SMS </h3> <br/>
<form class="form-horizontal" action="simpan_kirim_sms.php" method="post" enctype="multipart/form-data">
<div class="form-group">
                                <label class="control-label col-lg-4">No Tujuan</label>
                                <div class="col-lg-4">
                                    <input type="text" id="nama" name="nama" class="form-control" required autofocus/>
                                </div>
                            </div>
 
  <div class="form-group">
                                <label class="control-label col-lg-4">Isi Pesan</label>
                                <div class="col-xs-4">
								<textarea name="pesan" class="form-control"></textarea>
                			</div>
                            </div>
 
  <div class="control-label col-lg-8">

	 <input type="submit" class="btn btn-primary"  value="Kirim">&nbsp;&nbsp;
     <input type="submit" style='cursor:pointer;'onclick='self.history.back()'  class="btn btn-primary"  value="Batal">
 
</div><br>
    


</body>
</hmtl>