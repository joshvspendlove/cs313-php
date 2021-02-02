<?php require 'ConnectDB.php'; ?>
<?php 
	$devices = array();
	foreach ($db->query("SELECT * FROM devices WHERE systemid = 1;") as $row)
	{
		$devices[$row['devicetype']] = array();
		$devices[$row['devicetype']]['dbDeviceID'] = $row['dbdeviceid'];
		$devices[$row['devicetype']]['deviceid'] = $row['deviceid'];
	}

?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require "./header.php"; ?>
    <title>Home Control WebUI</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require 'webui-menu.php'; ?>
    </div>
    <div class="content">
	  <div class="card-group">
        <div class="card">
          <div class="card-header">
            <h1>Lights</h1>
		  </div>
		  <div class="card-body">
			<?php
				foreach($devices['light'] as $light)
				{
					foreach ($db->query("SELECT * FROM lights WHERE dbdeviceid = '$light['dbdeviceid']';") as $row)
					{	
						echo $row['lightname'] . $row['lightlevel'];
					}
				}
			?>			
		  </div>
		</div>
	  </div>
      <br>
      <div class="card">
        <div class="card-header">
          <h1>Locks</h1>
        </div>
        <div class="card-body">
           
        </div>
      </div>
    </div>
  </body>
</html>