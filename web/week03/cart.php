<?php

	require './SessionController.php';
	
    foreach($items as $key => $value)
	{
		if(htmlspecialchars($_POST[$key.'-']) != null) 
		{ 
			unset($_SESSION['cart'][$key]);
        }		 
	  }
    ?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require '../header.php'; ?>
    <title>Your Cart</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require 'store_menu.php'; ?>
    </div>
    <div class="content">
      <form method="post">
		<?php
		if(!empty($_SESSION['cart']))
		{
			echo '<br><div class="card text-center">';
			echo '<a href="./checkout.php" class="page-link">Checkout</a>';
			echo '</div><br>';
			echo '<div class="card-deck text-center">';
			
			foreach($_SESSION['cart'] as $item => $amount)
			{
				if ($amount > 0)
				{
					echo '<div class="card">';
					echo '<div class="card-body">';
					echo '<img src="./images/'.$item.'.jpeg" class="card-img">';
					echo '</div>';
					echo '<input type="submit" name="' . $item . '-" value="Remove ' . $item . ' from cart"/>'; 
					echo '</div>';
				}
	      	}
			echo '</div>';
		}
		else
		{
			echo '<h1>Your Cart is Empty.</h1><br><h2><a href="./store.php" class="page-link text-center">Return to browsing</a></h2>';
		}

		?>
       </form>
    </div>
  </body>
</html>
