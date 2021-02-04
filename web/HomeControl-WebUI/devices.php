<?php 
	include './ConnectDB.php'; 
	include './SessionController.php';
?>


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
	  <h1>
	  <?php	
	 	foreach($db->query("SELECT * FROM systems WHERE systemid = '1';") as $system)
		{
			echo $system['systemname'];
		}		
	  ?>
	</h1>
	  <div class="card-group">
        <div class="card">
          <div class="card-header">
            <h2>Lights</h2>
		  </div>
		  <div class="card-body">
			<?php
				
				foreach($db->query("SELECT * FROM lights WHERE systemid = '1';") as $light)
				{
					echo $light['lightname'] . " - " . $light['lightlevel'] . '<br>';
				}
				
			?>			
		  </div>
		</div>
	  </div>
      <br>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h2>Locks</h2>
          </div>
          <div class="card-body">
             <?php
				
				foreach($db->query("SELECT * FROM locks WHERE systemid = '1';") as $lock)
				{
					echo $lock['lockname'] . " - " . $lock['lockstate'] . '<br>';
				}
				
			  ?>	
          </div>
        </div>
	  </div>
	  <br>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h2>Contact Sensors</h2>
          </div>
          <div class="card-body">
             <?php
				echo '<h3>Doors</h3>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '1' AND contacttype = 'Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<br>';
				}
				
				echo '<br><br><h3>Windows</h3>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '1' AND contacttype = 'Window';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<br>';
				}
				
				echo '<br><br><h3>Garage Doors</h3>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '1' AND contacttype = 'Garage Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<br>';
				}
				
			  ?>	
          </div>
        </div>
	  </div>
    </div>
  </body>
</html>