#1 вычислить x^n - функций и №4

<?php

$x = rand(1,20);
$n = rand(-10,10);

 //x^n = x^(n-1)*$x;
function degreeN($n){
     if ($n <= 1) {
         return 1;
     }

    return degreeN($n - 1) + $n;
 };
echo ($x) . ' в степени ' . ($n) . ' равно : ' . (degreeN($n)) ;
echo '<hr>';
?>

#2 вычислить p!

<?php

$p = rand(1,50);

function Factorial($p) {
    if($p <= 1) {
        return 1;
    } else return ($p * Factorial($p - 1));
}

echo 'Факториал числа ' . ($p) . ' = ' . (Factorial($p));

echo '<hr>';
?>

#3  найти среди чисел 1, 1+1/2, 1+1/2+1/3, ... первое число, которое больше чем X

<?php
/*
$x=rand(2,3);


$a = 1;
$n=0;
$b=1;
$c = $b/$n;



do {
    $n++;

    $sum = $a + $c;
    $sum += $c;

    echo '<hr>';
    echo ' $a = ' . ($a);
    echo '<br>';
    echo ' $c = ' . ($b/$n);
    echo '<br>';
    echo ' $x = ' . ($x);
    echo '<br>';
    echo  ($sum) . ' + ' . ($b/$n) . ' >= ' . ($x);
}


while($sum >=$x) ;



*/
echo '<hr>';
?>

c
#4  Попробовать опеределить функцию B внутри функции A.
Попробовать вызвать отдельно  А, отдельно В, сначала В потом А, сначала А потом В. Проанализировать результат

<?php

function A(){
    echo ' A + ';
      function B(){
          $funcB = 'B';
        echo ' B - ';
    }
  }


echo '<br>';
echo A();
echo '<br>';
echo B();
echo '<br>';
echo A(B());
echo '<br>';
echo ($funcB) . A();
echo '<br>';
echo B(A());
echo '<hr>';
?>

