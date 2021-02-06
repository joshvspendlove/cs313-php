<?php
	$page = ltrim($_SERVER['REQUEST_URI'], '/');
    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">';
    echo '<div class="navbar-nav">';
	switch($page)
	{
		case 'index.php':
			echo '<a href="../index.php" class="menuLink active">Home</a>';
			echo '<a href="../intro.php" class="menuLink">Intro</a>';
			echo '<a href="../assignments.php" class="menuLink">Assignments</a>';
			break;
		
		case 'intro.php':
			echo '<a href="../index.php" class="menuLink">Home</a>';
			echo '<a href="../intro.php" class="menuLink active">Intro</a>';
			echo '<a href="../assignments.php" class="menuLink">Assignments</a>';
			break;
			
		case 'assignments.php':
			echo '<a href="../index.php" class="menuLink">Home</a>';
			echo '<a href="../intro.php" class="menuLink">Intro</a>';
			echo '<a href="../assignments.php" class="menuLink active">Assignments</a>';
			break;
			
		default:
			echo '<a href="../index.php" class="menuLink">Home</a>';
			echo '<a href="../intro.php" class="menuLink">Intro</a>';
			echo '<a href="../assignments.php" class="menuLink">Assignments</a>';			
	}
    echo '</div>';
    echo '</nav>';

?>