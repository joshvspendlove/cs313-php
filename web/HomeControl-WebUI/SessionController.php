<?php
	if (!isset($_COOKIE['sessionid']))
	{
		$sessionid = session_create_id();
		setcookie('sessionid', $sessionid, time() + (86400 * 30), "/HomeControl-WebUI");
	}
	
	if (isset($_COOKIE['sessionid']))
	{
		session_id($_COOKIE['sessionid']);
		session_start();
	}
?>