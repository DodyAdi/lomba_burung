<!DOCTYPE html>
<html>
	<head>
		<title> SMS Gateway | Inbox </title>
	</head>
	
	<body>
		<h3> KOTAK MASUK </h3>
		
		<?php
		include ("config.php");
		
		/* menampilkan daftar SMS masuk */
		$query = "SELECT ID,ReceivingDateTime,SenderNumber,TextDecoded FROM inbox";
		$result = mysqli_query($connect, $query);
		$no = 1; // awalan membuat nomor urut
		?>	
		
		<table border=1>
			<tr>
				<th> No. </th>
				<th> Tgl. Masuk </th>
				<th> No. Pengirim </th>
				<th> Isi Pesan Yang Diterima</th>
				<th> Aksi </th>
			</tr>
			
		<?php while ($data = mysqli_fetch_assoc($result)) { ?>

			<tr>
				<td><?php echo $no ?> </td>
				<td><?php echo $data['ReceivingDateTime'] ?> </td>
				<td><?php echo $data['SenderNumber'] ?> </td>
				<td><?php echo $data['TextDecoded'] ?> </td>
				<td>
					<a href="proses_hapus.php?action=hapus_inbox&ID=<?php echo $data['ID'] ?>">Hapus</a>
					<a href="balas_sms.php?ID=<?php echo $data['ID']?>"> Balas SMS </a>  
        		</td>
			</tr>
			
		<?php $no++; ?>

		<?php } ?>
		</table>
	</body>
</html>