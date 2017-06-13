<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($user == "admin" and $pass == "admin") {
$_SESSION['akses']= "masuk gan";
 ?>
	<SCRIPT TYPE="text/javascript">
	document.location.href='index.php';
	</SCRIPT>
<?php

}
else { ?>
		<SCRIPT TYPE="text/javascript">
	document.location.href='admin.php?msg=User atau Password Salah';
	</SCRIPT>
<?php
}
?>