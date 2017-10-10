<?php

$a = '78';
$b = 78;

if ($a==$b) {
    echo '<pre>';
    var_dump($a, $b);
    echo '</pre>';
    echo '<br>';

    echo 'переменные равные по значению ';
} else {
    echo 'переменные разные по типу';
}
echo '<br>';

if ($a===$b) {

    echo '<pre>';
    var_dump($a, $b);
    echo '</pre>';
    echo '<br>';

    echo 'переменные равные по значению ';
} else {
    echo 'переменные разные по типу';
} ;

