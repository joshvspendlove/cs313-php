<?php 
	include './ConnectDB.php'; 
	include './SessionController.php';
	
/*	
	if (isset($_SESSION['systemid']))
	{
		$systemid = $_SESSION['systemid'];
	}
	else
	{
		$systemid = 0;
	}
*/
	$systemid = 1;
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
	  <?php	
	  if ($systemid != 0)
	  {
		  $systemName = "<h1>";
		  foreach($db->query("SELECT * FROM systems WHERE systemid = $systemid;") as $system)
		  {
			  $systemName += "'" . $system['systemname'] . "'";
		  }	
		  $systemName += "</h1>";
		//  echo $systemName;
	  	  
	  }
	 
		  $cardData = '<div class="card-group">';
		  $cardData += '<div class="card">';
		  $cardData += '<div class="card-header">';
		  $cardData += '<h2>Lights</h2>';
		  $cardData += '</div>';
		  $cardData += '<div class="card-body">';
			
				
		  foreach($db->query("SELECT * FROM lights WHERE systemid = '$systemid';") as $light)
		  {
			  $cardData += $light['lightname'] . " - " . $light['lightlevel'] . '<hr>';
		  }
						
		  $cardData += '</div></div></div>';
	  
		  //echo $cardData;
	  
	  ?>
      <br>
	  <div class="card-group">
		<div class="card">
		  <div class="card-header">
			<h2>Locks</h2>
          </div>
          <div class="card-body">
             <?php
				
				foreach($db->query("SELECT * FROM locks WHERE systemid = '$systemid';") as $lock)
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
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Door';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<hr>';
				}
				
				echo '<br><br><h3>Windows</h3>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Window';") as $contact)
				{
					echo $contact['contactname'] . " - " . $contact['contactstate'] . '<hr>';
				}
				
				echo '<br><br><h3>Garage Doors</h3>';
				foreach($db->query("SELECT * FROM contactsensors WHERE systemid = '$systemid' AND contacttype = 'Garage Door';") as $contact)
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