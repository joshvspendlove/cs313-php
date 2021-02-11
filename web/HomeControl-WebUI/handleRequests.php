<?php
require './ConnectDB.php';
var_dump($_POST);

if (isset($_POST['DATA']))
{
	$data = json_decode($_POST['DATA'], true);
	$systemid = $data['systemid'];
	$request = $data['request'];
	
	switch($request)
	{
		case 'add_device':
			 $new_devices = $data['new_devices'];
			 add_device();
		     break;

		case 'update_device':
			 $device_data = $data['device_data'];
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
	echo 'add_device()';
	foreach ($new_devices as $device)
	{
		
	}
}

function update_device()
{
	echo 'update_device()';
	foreach ($device_data as $device)
	{
		
	}
}

function get_device_state()
{
	echo 'get_device_state()';
	foreach($db->query('SELECT * from lights WHERE systemid = $systemid;') as $row)
	{
		echo $row['lightlevel'];
	}
}
?>

