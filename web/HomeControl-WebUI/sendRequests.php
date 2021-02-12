<?php
	include './handleRequests.php';
	
	if (isset($_POST['DATA']))
	{
		if (htmlspecialchars($_POST['DATA']) == 'update_device')
		{
			$data = array('deviceid' => htmlspecialchars($_POST['deviceid']));
			if ($_POST['devicetype'] == 'light')
			{
				if ($_POST['state'] == 'On')
				{
					$data['lightlevel'] = '100';
				}
				else
				{
					$data['lightlevel'] = '0';
				}
				//$device = json_decode($data, true);
				$_POST['DATA'] = array('device_data' => array('device' => $data));
				update_device($_POST['DATA']);
				
			}				
		}
	}

?>