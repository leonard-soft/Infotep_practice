<?php 
	session_start();
	if (empty($_SESSION['id']))
	{
		header("location: ../views/login.php");
	}
 ?>