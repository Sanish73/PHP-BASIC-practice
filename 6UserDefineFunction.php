<?php 

function sum(int $x, int $y) {
  $n = $x + $y;
  return $n;
}

function sum2(int $x, int $y, int $z) {
    $m = $x + $y +$z;
    return $m;
  }

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 + 10= " . sum2(7, 13 , 10) . "<br>";
echo "2 + 4 = " . sum(2, 4);

?>