<?php
setcookie("username", "admin" , time()+60*4,"/");


if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}

?>
<a href="delete.php">Delete</a>