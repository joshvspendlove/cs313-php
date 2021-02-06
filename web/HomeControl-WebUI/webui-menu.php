



<?php

    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">';
    echo '<div class="navbar-nav mr-auto">';
    echo '<a href="../assignments.php" class="nav-link">Home</a>';
    echo '<a href="./devices.php" class="nav-link">Devices</a>';
	echo '<form class="form-inline my-2 my-lg-0" action="./login.php" method="post">';

    if($_SESSION['loggedin'] == False)
    {
		echo '<label>Username</label><input class="form-control mr-sm-2"  type="text" name="username"/>';
    	echo '<label>Password</label><input class="form-control mr-sm-2"  type="password" name="password"/>';
    	echo '<input class="btn btn-outline-success my-2 my-sm-0" type="Submit" value="Login"/>';
    }
    else
    {
	echo '<input type="Submit" value="Logout"/>';
    }
    echo '</form>';
    echo '</div>';
    echo '</nav>';

?>


