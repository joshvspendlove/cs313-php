<?php include './ConnectDB.php'; ?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require "../header.php"; ?>
    <title>Home Control WebUI</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require './webui-menu.php'; ?>
    </div>
    <div class="content">
	  <div class="card-group">
        <div class="card">
          <div class="card-header">
            <h1>Lights</h1>
		  </div>
		  <div class="card-body">
			<?php
				
				foreach($db->query("SELECT * FROM lights WHERE systemid = '1';") as $light)
				{
					echo $light['lightname'] . " - " . $light['lightlevel'];
				}
				
			?>			
		  </div>
		</div>
	  </div>
      <br>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h1>Locks</h1>
          </div>
          <div class="card-body">
             <?php
				
				foreach($db->query("SELECT * FROM locks WHERE systemid = '1';") as $lock)
				{
					echo $lock['lockname'] . " - " . $lock['lockstate'];
				}
				
			  ?>	
          </div>
        </div>
	  </div>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h1>Contact Sensors</h1>
          </div>
          <div class="card-body">
             <?php
				echo '<h2>Doors</h2>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '1' AND contacttype = 'Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'];
				}
				
				echo '<br><h2>Windows</h2>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '1' AND contacttype = 'Window';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'];
				}
				
			  ?>	
          </div>
        </div>
	  </div>
    </div>
  </body>
</html>