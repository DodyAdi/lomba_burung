<?php
include ("config.php");

$action = $_GET['action'];

switch($action) {
	case "hapus_inbox" :
		$ID = $_GET['ID'];
		
		// hapus SMS dari kotak masuk
		$query  = "DELETE FROM inbox WHERE ID = '$ID' ";
		$result = mysqli_query($connect, $query);

		//  redirect ke halaman kotak masuk
		header("location:daftar_sms_masuk.php");
	break;
	
	case "hapus_sent_items" :
		$ID = $_GET['ID'];
		
		// hapus pesan sms terkirim
		$query  = "DELETE FROM sentitems WHERE ID='$ID'";
		$result = mysqli_query($connect, $query);
		
		// redirect ke halaman sms terkirim
		header("location:daftar_sms_keluar.php");
	break;
}
?>