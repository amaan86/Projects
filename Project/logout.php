<?php
	session_start();
	session_destroy();
	unset($_SESSION['enroll']);
	header("Location: eform2.php");
?>