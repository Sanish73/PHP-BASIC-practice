<?php 
        session_start();


        session_destroy();

        echo "<a href='session.php'>session</a>";
?>
<a href="protected.php">protected</a>