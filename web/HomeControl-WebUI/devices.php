<?php 
	include './ConnectDB.php'; 
	include './SessionController.php';
	
	
	if (isset($_SESSION['systemid']))
	{
		$systemid = $_SESSION['systemid'];
	}
	else
	{
		$systemid = 0;
	}

	//$systemid = 1;
?>


<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require "../header.php"; ?>
    <title>Home Control WebUI</title>
	<link rel="stylesheet" type="text/css" href="./controldesign.css"/>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require './webui-menu.php'; ?>
    </div>
    <div class="content">
	  <?php	
	  if ($systemid != 0)
	  {
		  echo "<h1>";
		  foreach(dbConnect()->query("SELECT * FROM systems WHERE systemid = $systemid;") as $system)
		  {
			  echo $system['systemname'];
		  }	
		  echo "</h1>";
	  	  
	  }
	 
		  echo '<div class="card-group">';
		  echo '<div class="card">';
		  echo '<div class="card-header">';
		  echo '<h2>Lights</h2>';
		  echo '</div>';
		  echo '<div class="card-body">';
			
				
		  foreach(dbConnect()->query("SELECT * FROM lights WHERE systemid = '$systemid';") as $light)
		  {
			  echo $light['lightname'] . " - " . $light['lightlevel'] . '<label class="switch"><input type="checkbox" id="' . $light["deviceid"] .'" onchange="toggleSwitch(id);"><span class="slider"></span></label><hr>';
		  }
						
		  echo '</div></div></div>';
	  
	  ?>
      <br>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h2>Locks</h2>
          </div>
          <div class="card-body">
             <?php
				
				foreach(dbConnect()->query("SELECT * FROM locks WHERE systemid = '$systemid';") as $lock)
				{
					echo $lock['lockname'] . " - " . $lock['lockstate'] . '<hr>';
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
				foreach(dbConnect()->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<hr>';
				}
				
				echo '<br><br><h3>Windows</h3>';
				foreach(dbConnect()->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Window';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<hr>';
				}
				
				echo '<br><br><h3>Garage Doors</h3>';
				foreach(dbConnect()->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Garage Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<hr>';
				}
				
			  ?>	
          </div>
        </div>
	  </div>
    </div>
  </body>
</html>