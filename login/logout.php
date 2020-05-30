<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("one" ,"" ,time()-7200, "/");
	header("location:login.php");
?>