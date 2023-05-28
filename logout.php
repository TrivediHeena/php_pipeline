<?php
	session_start();
	if(!empty($_SESSION['unm']) && isset($_SESSION['unm'])){
		unset($_SESSION['unm']);
	}
	session_destroy();
	header("location:login.php");
?>