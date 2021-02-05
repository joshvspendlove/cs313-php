<?php

    echo '<nav class="navbar navbar-expand-sm bg-light navbar-light">';
    echo '<div class="navbar-nav">';
    echo '<a href="../assignments.php" class="menuLink">Home</a>';
    echo '<a href="./devices.php" class="menuLink">Devices</a>';
    echo '<form action="./login.php" method="get">';
    echo '<label>Username</label><input type="text" name='username'/>';
    echo '<label>Password</label><input type="text" name='password'/>';
    echo '</form>';
    echo '</div>';
    echo '</nav>';

?>