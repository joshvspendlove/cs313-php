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
				//$device = json_decode($data, true);
				$_POST['DATA'] = json_encode(array("request" => 'update_device', "device_data" => json_encode(array('device' => $data))));
				//$_POST['DATA'] = json_encode($_POST['DATA']);
				include './handleRequests.php';
				
			}				
		}
	}

?>