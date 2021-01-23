<?php
	require "./SessionController.php";
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require '../header.php'; ?>
    <title>Our Store</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require 'store_menu.php'; ?>
    </div>
	<div class="content">
	<?php
	
	  foreach($items as $key => $value)
	  {
		 if(htmlspecialchars($_POST[$key.'+']) != null)
		 {
			$_SESSION['cart'][$key] = 1;
		 }
		if(htmlspecialchars($_POST[$key.'-']) != null) 
		{ 
			unset($_SESSION['cart'][$key]);
        }		 
	  } 
    ?>
	  
	<?php	
		if(!empty($_SESSION['cart']))
		{
			echo '<br><div class="card text-center">';
			echo '<a href="./cart.php" class="page-link">To Your Cart</a>';
			echo '</div><br>';
		}
		echo '<form method="post">';
		$count = 0;
		foreach($items as $key => $value)
		{
			if ($count >= 3)
			{
				echo '</div>';
				$count = 0;
			}
			
			if ($count == 0)
			{
				echo '<div class="card-deck text-center">';
			}
			
			echo '<div class="card">';
			echo '<div class="card-header">';
			echo '<h1>' . $value . '</h1>';
			echo '</div>';
			echo '<div class="card-body">';
			echo '<img class="card-img" src="./images/' . $key . '.jpeg"/>';
			echo '</div>';
			echo '<div class="card-footer">';
		    
			if ($_SESSION['cart'][$key] != 0)
			{
				echo '<input type="submit" name="' . $key . '-" value="Remove from Cart"/>';
			}
			else
			{
				echo '<input type="submit" name="' . $key . '+" value="Add to Cart"/>';
			}
			echo '</div>';
			echo '</div>';	
			$count = $count + 1;
		}
		?>
      </div>	
	</form>
  </body>
</html>