<?php
	include './ConnectDB.php';
	include './SessionController.php';

	unset($_SESSION['systemid']);
	$_SESSION['loggedin'] = False;

	if (htmlspecialchars($_POST['username']) != null and htmlspecialchars($_POST['password']) != null)
	{
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
	
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