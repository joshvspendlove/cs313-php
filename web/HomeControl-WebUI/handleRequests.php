<?php
require './ConnectDB.php';

if (htmlspecialchars($_POST['request']) != null)
{
	$request = htmlspecialchars($_POST['request']);

	switch($request)
	{
		case 'add_device':
			 $new_devices = htmlspecialchars($_POST['new_devices']);
		     break;

		case 'update_device':
			 $device_data = htmlspecialchars($_POST['device_data']);
		     break;

		case 'get_device_state':
			 get_device_state();
		     break;

	}
}

function add_device()
{
	$devices = json_decode($new_devices);
	echo 'add_device()';
}

function update_device()
{
	$updated_data = json_decode($device_data);
	echo 'update_device()';
}

function get_device_state()
{
	echo 'get_device_state()';
}
?>