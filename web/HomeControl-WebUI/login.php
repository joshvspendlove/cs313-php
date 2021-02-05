<?php
	include './ConnectDB.php';
	include './SessionController.php';

	unset($_SESSION['systemid']);
	
	if (isset($_GET['username']) and isset($_GET['password']))
	{
		$username = $_GET['username'];
		$password = $_GET['password'];
	
		foreach($db->query("SELECT systemid FROM users WHERE username = '$username' AND userpass = '$password';") as $system)
		{
			$_SESSION['systemid'] = $system['systemid'];
		}
		if(!isset($_SESSION['systemid']))
		{
			$_SESSION['systemid'] = 0;
		}
		
		header("Location: ./devices.php");
	}
	else 
	{
		header("Location: ./devices.php"); 
	}
	
 
?>