<?php
    $host		= "localhost"; 
    $user		= "root";   
    $password	= "";   
    $database	= "sms";  
    $connect	= mysqli_connect($host,$user,$password,$database); 
		if(!$connect) die(mysqli_connect_error());
?>
