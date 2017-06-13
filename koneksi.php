<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="lomba_burung";
    $konek=mysqli_connect($host,$user,$pass,$db);
    if (!$konek) die(mysqli_connect_error());
?>
