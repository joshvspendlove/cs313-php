<?php
	include './ConnectDB.php';
	include './SessionController.php';
	
	if (isset($_GET['username']) and isset($_GET['password']))
	{
		$username = $_GET['username'];
		$password = $_GET['password'];

		$system = $db->query("SELECT systemid FROM users WHERE username = '$username' AND userpass = '$password';");
		echo gettype($system);
		if (!empty($system))
		{
			$_SESSION['systemid'] = $system['systemid'];
		
		}
		else
		{
			$_SESSION['systemid'] = 0;
		}
		echo $_SESSION['systemid'];
//		header("Location: ./devices.php");
	}
	else 
	{
		unset($_SESSION['systemid']);
		header("Location: ./devices.php"); 
	}
	
 
?>