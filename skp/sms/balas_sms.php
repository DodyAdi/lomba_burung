<html>
<head>
  <title> BKPM Wilayah Klaten </title>
  <link rel="stylesheet" type="text/css" href="stlye.css">
  <style type="text/css">
       #pesan {
            font-family: Arial;
            font-size: 16;
            color:#17503c;
            font-style: bold;
            margin-top: 20px;
      }

     table{
            border: 1px solid black;            
            padding: 5px 5px;
            font-family: Arial;
            font-size: 14px;
      }

    input:read-only{
      background-color:#F2F3B4;
      cursor: not-allowed;
    }
    textarea:read-only{
      background-color:#F2F3B4;
      cursor: not-allowed;
    }
  </style>
</head>
<body>

<?php
  error_reporting(0);
  include ("config.php");

    $ID="";
    if (isset($_GET['ID']))
    $ID = $_GET['ID'];
  
    $query = "SELECT SenderNumber, TextDecoded FROM inbox WHERE ID = '$ID'";
    $hasil = mysqli_query($connect, $query);
    if (!$hasil) die ("Gagal Query");
    
  $data = mysqli_fetch_assoc($hasil);
  $ID           = $data['ID'];
  $SenderNumber = $data['SenderNumber'];
  $TextDecoded  = $data['TextDecoded'];
?>

<h3 style=text-align:center;> Balas SMS dari Pasien</h3> <br/>
<form action="simpan_balasan_sms.php" method="post" enctype="multipart/form-data">
<table width='30%' align='center'>

  <tr>
    <td> No Tujuan </td>
    <td> <input type="text" name="destination_number" size="18" value='<?php echo $SenderNumber; ?>' readonly /> </td>
  </tr>

  <tr>
    <td> Pesan </td>
    <td> <textarea cols="40" rows="5" readonly><?php echo $TextDecoded; ?></textarea></td>
  </tr>

  <tr>
    <td> Balasan </td>
    <td> <textarea name="text_decoded" cols="40"  rows="10" required></textarea></td>
  </tr>
  
  <tr>
    <td colspan="2" align="right"> <br/>
      <input style='cursor:pointer;'onclick='self.history.back()' type="submit" value="Batal"/>
      <input type="submit" value="Kirim Balasan"/>
    </td>

  </tr>

</table>
    <div id='pesan' align='center'>
        <?php
          if (isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>
    </div>
</form>
</body>
</hmtl>