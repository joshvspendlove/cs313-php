<?php
	include './ConnectDB.php';
	include './SessionController.php';

	unset($_SESSION['systemid']);
	$_SESSION['loggedin'] = False;

	if (isset($_POST['username']) and isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		foreach($db->query("SELECT systemid FROM users WHERE username = '$username' AND userpass = '$password';") as $system)
		{
			$_SESSION['systemid'] = $system['systemid'];
			$_SESSION['loggedin'] = True;
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