<?php
require './ConnectDB.php';
var_dump($_POST);

if (isset($_POST['DATA']))
{
	$data = json_decode($_POST['DATA']);
	
	echo $data;
	$request = $data['request'];

	echo $request;
	
	switch($request)
	{
		case 'add_device':
			 $new_devices = htmlspecialchars($_POST['new_devices']);
			 add_device();
		     break;

		case 'update_device':
			 $device_data = htmlspecialchars($_POST['device_data']);
			 update_device();
		     break;

		case 'get_device_state':
			 get_device_state();
		     break;

	}
}
else
{
	echo 'Request Failed';
}

function add_device()
{
	$devices = json_encode($new_devices);
	echo 'add_device()';
}

function update_device()
{
	$updated_data = json_encode($device_data);
	echo 'update_device()';
}

function get_device_state()
{
	echo 'get_device_state()';
}
?>

