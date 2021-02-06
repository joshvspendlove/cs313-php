<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require "./header.php"; ?>
    <title>Welcome</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require "./menu.php" ?>
    </div>
    <div class="content">
	  <div class="card">
	    <div class="jumbotron">
	      <h1>Welcome to my website!</h1>
	          <?php $today = "Today is " . date("l");
		  $month = date("m");
		  $month_word = "";
		  switch ($month) {
		    case 1:
		      $month_word = "January";
		      break;
		    case 2:
		      $month_word = "February";
		      break;
		    case 3: 
		      $month_word = "March";
		      break;
		    case 4:
		      $month_word = "April";
		      break;
		    case 5:
		      $month_word = "May";
		      break;
		    case 6: 
		      $month_word = "June";
		      break;
		    case 7:
		      $month_word = "July";
		      break;
		    case 8:
		      $month_word = "February";
		      break;
		    case 9: 
		      $month_word = "March";
		      break;
		    case 10:
		      $month_word = "April";
		      break;
		    case 11:
		      $month_word = "May";
		      break;
		    case 12: 
		      $month_word = "June";
		      break;
		    default:
		      $month_word = "Doomed";
		  }
		  
		  $today = $today . ", " . $month_word . " " . date("d, Y") . ".";
		  echo "<p>$today</p>";
		  ?>
	  	  <p>This page is currently under construction. Please view my "Intro" page by clicking the link above or by clicking <a href="../intro.php">here</a>.</p>
		</div>
    </div>
  </body>
</html>

