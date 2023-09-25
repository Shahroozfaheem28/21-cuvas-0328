

<link rel="stylesheet" type="text/css" href="calc.css">

<?php

  echo "<h1>...Simple Calculator...<?h1>";
$n1 = '1100';
$n2 = '20';
$lower_limit = '15';
$upper_limit = '90';

$n ="2";

if( $n== '1'){
    echo "<h3>...Adding...<?h3>";
    $result = $n1 + $n2;
    echo "<h2>$n1 + $n2<br>=$result</h2>";
}
elseif($n == 2){
    echo "<h3>...Subtract...<?h3>";
    $result = $n1 - $n2;
    echo "<h2>$n1 - $n2<br>=$result</h2>";
}
elseif($n == 3){
    echo "<h3>...Multiply...<?h3>";
    $result = $n1 * $n2;
   echo "<h2>$n1 * $n2<br>=$result</h2>";
}
elseif($n == 4){
    echo "<h3>...Divide...<?h3>";
    $result = $n1 / $n2;
    echo "<h2>$n1 / $n2<br>= $result</h2>";
}
elseif($n == 5){
    echo "<h3>...%age...<?h3>";
    $result = ($n2 * 100)/$n1;
    echo "<h2>($n2 * 100)/$n1<br>=$result</h2>";
}
elseif($n == 6){
    echo "<h3>...Squareroot...<?h3>";
   $squreroot = sqrt($n2);
    echo "<h2>Squareroot of $n2<br>= $squreroot </h2>";
}
elseif($n == 7){
    echo "<h3>...Square...<?h3>";
   $squre = $n2 * $n2;
    echo "<h2>Squre of $n2<br>= $squre</h2> ";
}
elseif($n == 8){
    echo "<h3>...Doamin of number...<?h3>";
    $result=$n2 >= $lower_limit && $n2 <= $upper_limit;
    echo "<h2> Doamin Of $n2 is<br>= $result</h2> ";
}elseif($n == 9)
{
    echo "<h3>...Average of number...<?h3>";
    $result=($n1 + $n2)/2;
    echo "<h2> Average Of these $n1 or $n2 is<br>=  $result</h2> ";
}
else{
    echo "<h3>Please Enter the Number in code...<?h3>";
}

?>