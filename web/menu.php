<?php
	$page = ltrim($_SERVER['REQUEST_URI'], '/');
    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">';
    echo '<ul class="navbar-nav">';
	switch($page)
	{
		case 'index.php':
			echo '<li class="nav-item"><a href="../index.php" class="nav-link active">Home</a>';
			echo '<li class="nav-item"><a href="../intro.php" class="nav-link">Intro</a>';
			echo '<li class="nav-item"><a href="../assignments.php" class="nav-link">Assignments</a>';
			break;
		
		case 'intro.php':
			echo '<li class="nav-item"><a href="../index.php" class="nav-link">Home</a>';
			echo '<li class="nav-item"><a href="../intro.php" class="nav-link active">Intro</a>';
			echo '<li class="nav-item"><a href="../assignments.php" class="nav-link">Assignments</a>';
			break;
			
		case 'assignments.php':
			echo '<li class="nav-item"><a href="../index.php" class="nav-link">Home</a>';
			echo '<li class="nav-item"><a href="../intro.php" class="nav-link">Intro</a>';
			echo '<li class="nav-item"><a href="../assignments.php" class="nav-link active">Assignments</a>';
			break;
			
		default:
			echo '<li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>';
			echo '<li class="nav-item"><a href="../intro.php" class="nav-link">Intro</a></li>';
			echo '<li class="nav-item"><a href="../assignments.php" class="nav-link">Assignments</a></li>';			
	}
    echo '</div>';
    echo '</nav>';

?>