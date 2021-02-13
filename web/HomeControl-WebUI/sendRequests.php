<?php
	
	if (isset($_POST['DATA']))
	{
		if (htmlspecialchars($_POST['DATA']) == 'update_device')
		{
			$data = array('deviceid' => htmlspecialchars($_POST['deviceid']));
			if ($_POST['devicetype'] == 'light')
			{
				$data['devicetype'] = 'light';
				if ($_POST['state'] == 'On')
				{
					$data['lightlevel'] = '100';
				}
				else
				{
					$data['lightlevel'] = '0';
				}

				$_POST['DATA'] = json_encode(array("request" => 'update_device', "device_data" => array('device' => $data)));

				include './handleRequests.php';
				
			}
			else if ($_POST['devicetype'] == 'lock')
			{
				$data['devicetype'] = 'lock';
				if ($_POST['state'] == 'Locked')
				{
					$data['lockstate'] = 'Locked';
				}
				else
				{
					$data['lockstate'] = 'Unlocked';
				}
				$_POST['DATA'] = json_encode(array("request" => 'update_device', "device_data" => array('device' => $data)));
				include './handleRequests.php';
				
			}			
		}
	}

?>