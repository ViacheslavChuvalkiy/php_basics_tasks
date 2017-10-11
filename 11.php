<?php

$day = random_int ( 1 , 7 );
echo $day;

switch ($day) {
    case 1: 
    case 2: 
    case 3: 
    case 4: 
    case 5: 
        echo ' Это рабочий день '; 
        break;
    case 6:
    case 7: 
        echo ' Это выходной день '; 
        break;
}
