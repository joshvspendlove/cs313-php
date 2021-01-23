<?php
	require 'SessionController.php';
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <?php require '../header.php'; ?>
    <title>Order Confirmation</title>
  </head>
  <body class="container-fluid">
    <div class="menu">
      <?php require 'store_menu.php'; ?>
    </div>
    <div class="content">
    <?php
	if (!empty($_SESSION['cart']))
	{
		echo '<div class="card">';
		echo '<h3 class="card-header">Thank you for purchasing:</h3>';
		echo '<div class="card-body">';
		foreach($_SESSION['cart'] as $item => $amount)
		{
			echo '<p>' . $amount . ' ' . $items[$item] . '</p>';
			unset($_SESSION['cart'][$item]);
		}
		echo '</div><br>';
	
		echo '<div class="card">';
		echo '<h3 class="card-header">The items will be sent to:</h3>';
		echo '<address class="card-body">' . htmlspecialchars($_POST['name']) . '<br>';
		echo htmlspecialchars($_POST['street-address']) . '<br>';
		echo htmlspecialchars($_POST['city']) . ', ' . htmlspecialchars($_POST['state']) . ' ' . htmlspecialchars($_POST['zipcode']) . '</address>';
		echo '</div></div>';
	}
	
	
	echo '<br><div class="card text-center">';
			echo '<a href="./store.php" class="page-link">Back to Shopping</a>';
			echo '</div><br>';
    ?>
    </div>
  </body>
</html>
