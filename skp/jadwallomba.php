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
 <style type="text/css">
table{
    text-align:center;
}
[id='button']{
    background-color: #F2F3AC;
    font-size:13.5px;
    font-family: Arial;
    font-weight: bold;
    width:225px;
    height:25px;
    border:1px solid black;
    border-radius: 3px;
    color: #d34204;
    text-decoration: none;
    text-align:center;
}
[type='button']:hover{
    background-color: #fffcd5;
    font-size:13.4px;
    color: #3b6a55;
}

h3 {
    margin-top:30px;
    margin-left:50px;
    margin-right:50px;
    text-align: center;
    font-family: Arial;
    font-size: 20px;
    color: #d34204;
}

    div.dataTables_container {
        width: 500px;
        margin: 0 auto;
    }
    .form-control {
      display: block;
      width: 100px;
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

<div class="container">
            <h2 class="text-center">Jadwal Lomba PK2S</h2>
			<br>
            <div class="box-body table-responsive">
              <form action='' method='post' enctype='multipart/form-data'>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr style='background-color:#E6E6FA'>
							<th class="text-center">No</th>
                            <th class="text-center">Hari</th>
                            <th class="text-center">Jam Mulai</th>
                            <th class="text-center">Kelas</th>
                           
                        </tr>
						<tr>
							<th class="text-center">1</th>
							<th class="text-center">Kamis</th>
							<th class="text-center">15.00</th>
							<th class="text-center">Latber</th>
						</tr>
						<tr>
							<th class="text-center">2</th>
							<th class="text-center">Kamis (Pahing)</th>
							<th class="text-center">15.00</th>
							<th class="text-center">Latpres</th>
						</tr>
                    </thead>
                    <tbody>

  



</body>

</html>