<?php
	session_start();
	unset($_SESSION[error]);
	unset($_SESSION['usuario']);
	session_destroy();
	header("Location:../../html/login.html");
    exit();
?>
