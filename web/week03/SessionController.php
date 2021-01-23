<?php
	if (!isset($_COOKIE['sessionid']))
	{
		$sessionid = session_create_id();
		setcookie('sessionid', $sessionid, time() + (86400 * 30), "/week03");
	}
	
	session_id($_COOKIE['sessionid']);
	session_start();
	if (!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	
	$items = array('apple' => 'Apple', 'orange' => 'Orange', 'banana' => 'Banana', 'salt' => 'Salt', 'pepper' => 'Pepper');
	
?>