<?php
	ob_start();
	session_start();
	unset($_SESSION[$_COOKIE["email"]]);
	setcookie("email","",time()-1);
	header("location:login.php");
?>