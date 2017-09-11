<?php
	session_start();
	unset($_SESSION[error]);
	unset($_SESSION['usuario']);
	session_destroy();
	header("Location:../html/index.html");
?>