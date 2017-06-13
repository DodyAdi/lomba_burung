<?php
    $host		= "localhost"; 
    $user		= "root";   
    $password	= "";   
    $database	= "pk2s";  
    $koneksi	= mysqli_connect($host,$user,$password,$database); 
		if(!$connect) die(mysqli_connect_error());
?>
