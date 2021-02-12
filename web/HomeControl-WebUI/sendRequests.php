<?php
	include './handleRequests.php';
	
	if (isset($_POST['command'])
	{
		if (htmlspecialchars($_POST['command']) == 'update_device')
		{
			$data = array('deviceid' => htmlspecialchars($_POST['deviceid']));
			if ($_POST['devicetype'] == 'light')
			{
				if ($_POST['state'] == 'true')
				{
					$data['lightlevel'] = 100;
				}
				else
				{
					$data['lightlevel'] = 0;
				}
				$data = json_decode($data, true);
				update_device($data);
			}				
		}

?>