<?php
include './ConnectDB.php';
include './SessionController.php';

if (isset($_POST['DATA']))
{
	$data = json_decode($_POST['DATA'], true);

	if ($data['systemid'] != null)
		$systemid = $data['systemid'];
	else
		$systemid = $_SESSION['systemid'];
	$request = $data['request'];
	echo $systemid;

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


function add_device()
{
	foreach ($new_devices as $device)
	{
		
	}
}

function update_device($device_data)
{
	$device = $device_data['device'];
	if ($device['devicetype'] == 'light')
		{
			$statement = dbConnect()->prepare('UPDATE lights SET lightlevel = :lightlevel WHERE deviceid = :deviceid AND systemid = :systemid;');
			$statement->bindValue(':lightlevel', $device['lightlevel'], PDO::PARAM_INT);
			$statement->bindValue(':deviceid', $device['deviceid'], PDO::PARAM_INT);
			$statement->bindValue(':systemid', $systemid, PDO::PARAM_INT);
			$statement->execute();
			
			if ($device['lightlevel'] > 0)
				echo 'On';
			else
				echo 'Off';
		}
		elseif ($device['devicetype'] == 'lock')
		{
			$statement = dbConnect()->prepare('UPDATE locks SET lockstate = :lockstate WHERE deviceid = :deviceid AND systemid = :systemid;');
			$statement->bindValue(':lockstate', $device['lockstate'], PDO::PARAM_INT);
			$statement->bindValue(':deviceid', $device['deviceid'], PDO::PARAM_INT);
			$statement->bindValue(':systemid', $systemid, PDO::PARAM_INT);
			$statement->execute();
			
			echo $device['lockstate'];
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

