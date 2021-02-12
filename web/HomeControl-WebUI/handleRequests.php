<?php
include './ConnectDB.php';
//var_dump($_POST);

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
			 
			 update_device($device_data);
		     break;

		case 'get_device_state':
			 get_device_state($systemid);
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

function update_device($device_data)
{
	echo 'update_device()';

	foreach ($device_data['device'] as $device)
	{
		echo $device['deviceid'] . '-' . $device['lightlevel'];
	}
}

function get_device_state($systemid)
{
	echo 'get_device_state()';
	$deviceData = array();
	
	$lights = array();
	foreach(dbConnect()->query("SELECT * FROM lights WHERE systemid = '$systemid';") as $light)
	{
		$lights[$light['deviceid']] = $light['lightlevel'];
	}
	
	$locks = array();
	foreach(dbConnect()->query("SELECT * FROM locks WHERE systemid = '$systemid';") as $lock)
	{
		$locks[$lock['deviceid']] = $lock['lockstate'];
	}
	
	$contacts = array();
	foreach(dbConnect()->query("SELECT * FROM contactsensors WHERE systemid = '$systemid';") as $contact)
	{
		$contacts[$contact['deviceid']] = $contact['contactstate'];
	}
	
	$deviceData['lights'] = $lights;
	$deviceData['locks'] = $locks;
	$deviceData['contacts'] = $contacts;
	
	$deviceData = json_encode($deviceData);
	echo $deviceData;
}
?>

