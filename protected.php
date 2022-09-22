<?php

    session_start();
    if(isset($_SESSION["username"])){
        echo "whelcom";
    }else{
        echo "hey somethins is wrong";
    }
    echo "<a href='session.php'>session</a>";
    echo "<br/>"

?>
<a href="deleted.php">delete</a>