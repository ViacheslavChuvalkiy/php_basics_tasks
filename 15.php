<?php
$a = random_int( 0 , 1000);
$b = random_int(0 , 2);
$operator = array ( `+` . `-` . `*` .`/` . `%`);

if ($b==0) {
    echo 'На 0 нельзя умножить или делить';
}
elseif ($a==0) {
    echo 'На 0 нельзя умножить или делить';
}
echo '<br>';

echo ' + =>  ' . ($a + $b);
echo '<br>';
echo ' - =>  ' . ($a - $b);
echo '<br>';
echo ' / =  ' .$a / $b;
echo '<br>';
echo ' * =>  ' .$a * $b;
echo '<br>';
echo ' % =>  ' .$a % $b;
echo '<br>';

