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
  </body>
</html>