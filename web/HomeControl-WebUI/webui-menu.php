<?php

    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">';
    echo '<div class="navbar-nav d-flex">';
    echo '<a class="mr-auto p-2" href="../assignments.php" class="menuLink">Home</a>';
    echo '<a class="mr-auto p-2" href="./devices.php" class="menuLink">Devices</a>';
    echo '<form class="p-2" action="./login.php" method="post">';

    if($_SESSION['loggedin'] == False)
    {
		echo '<label class="p-2">Username</label><input class="p-2" type="text" name="username"/>';
    	echo '<label class="p-2">Password</label><input class="p-2" type="password" name="password"/>';
    	echo '<input class="p-2" type="Submit" value="Login"/>';
    }
    else
    {
	echo '<input class="p-2" type="Submit" value="Logout"/>';
    }
    echo '</form>';
    echo '</div>';
    echo '</nav>';

?>
