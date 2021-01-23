<?php
	require 'SessionController.php';
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require '../header.php'; ?>
	<link rel="stylesheet" type="text/css" href="week03.css">
    <title>Cart Checkout</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require 'store_menu.php'; ?>
    </div>
	<div class="content">
      
	<?php
		if(!empty($_SESSION['cart']))
		{	
			echo '<br><div class="card text-center">';
			echo '<a href="./cart.php" class="page-link">Back To Cart</a>';
			echo '</div><br>';
			
			echo '<div class="card text-center">';
			echo '<h3 class="card-header">Your Cart</h3>';
			
			foreach($_SESSION['cart'] as $item => $amount)
  		 	{	
				echo '<p>' . $amount . ' ' . $items[$item] . '</p>';
			}
			echo '</div><br>';
			echo '<form name="checkoutinfo" method="post" action="./confirmation.php" onsubmit="return validateForm()">';
			echo '<div class="address-form col-sm-3">';
			echo '<label>Full Name:</label><br>';
			echo '<input type="text" name="name" size="30"/><br><br>';
			echo '<label>Street Address:</label><br>';
			echo '<input type="text" name="street-address" size="30"/><br><br>';
			echo '<label>City:</label><br>';
			echo '<input type="text" name="city" size="30"/><br><br>';
			echo '<label>State:</label><br>';
			echo '<input type="text" name="state" size="30"/><br><br>';
			echo '<label>Zipcode:</label><br>';
			echo '<input type="text" name="zipcode" size="30"/><br><br>';
			echo '<input type="submit" value="Complete Purchase"/><br>';
			echo '</div>';
			echo '</form>';
		}
		else
		{
			echo '<h1>Your Cart is Empty, <a href="./store.php"><br>Return to browsing.</a></h1>';
		}
	?>
	
      </div>
	  <script src="./checkout.js"></script>
  </body>
</html>