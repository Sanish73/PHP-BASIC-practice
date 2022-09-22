<?php
    session_start();

    $_SESSION["username"] ="sanish";

    echo "<a href='protected.php'>proctcted</a>";
    echo "<br/>";
    echo "<a href='deleted.php'>Delete</a>";

?>

