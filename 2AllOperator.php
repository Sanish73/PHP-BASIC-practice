<?php

$a = 30+(20*10)-20/3;
$b = 10+20+5*1+5/2;

echo "$a<br>";
echo "$b<br>";
if($a!=0 && $b!=0){
    echo "both are greater than zero";
    $a++;
    echo "<br>";
}else{
    echo "both are equls to zero";
}
echo "$a<br>";

if($a>$b){
    echo "<br>$a is Greater Than $b";
}
?>