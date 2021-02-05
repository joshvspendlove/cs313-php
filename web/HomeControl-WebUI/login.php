<?php
	include './ConnectDB.php';
	include './SessionController.php';
	
	if (isset($_GET['username']) and isset($_GET['password']))
	{
		$username = $_GET['username'];
		$password = $_GET['password'];
		
		foreach($db->query("SELECT systemid FROM users WHERE username = '$username' AND userpass = '$password';") as $system)
		{
		echo '"' .$system['systemid'] .'"';
			$_SESSION['systemid'] = $system['systemid'];
			//header("Location: ./devices.php"); 
		}
echo '"' .$system['systemid'] .'"';
               // unset($_SESSION['systemid']);
               // header("Location: ./devices.php");
	}
	else 
	{
	echo 'here';
		unset($_SESSION['systemid']);
		//header("Location: ./devices.php"); 
	}
	
 
?>