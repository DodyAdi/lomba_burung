<style type="text/css">

[value='Kembali']{
    border:1px solid black;
    background-color: lightgrey;
    font-size:14px;
    border-radius:5px; 
}
[type='button']:hover{
    background-color: lightyellow;
}
</style>

<?php
	$destination_number	= $_POST['destination_number'];
	$text_decoded		= $_POST['text_decoded'];
	

	$dataValid="YA";

	if ($dataValid == "TIDAK"){
		echo "Masih Ada Kesalahan, Silahkan Perbaiki!<br/>";
		echo "<input type='button' value='kembali' onClick='self.history.back()'>";
		exit;
	}
	include "config.php";
	$query = mysqli_query($connect, "INSERT INTO outbox (DestinationNumber, TextDecoded)
			values('$destination_number','$text_decoded')"); 
	
	if (!$query) die (mysqli_error());

	?>
		<script>
			document.location.href='balas_sms.php?msg=Balasan SMS Berhasil Dikirim !';
		</script>
	<?php
?>