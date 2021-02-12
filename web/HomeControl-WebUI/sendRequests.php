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
				$_POST['DATA'] = array('device_data' => json_decode($data, true));
				update_device($data);
			}				
		}
	}

?>