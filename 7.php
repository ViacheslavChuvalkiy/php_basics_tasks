<?php
$name= 'Вячеслав';
$age = 32;

if ( $age >= 18 && $age <= 59) {
    $message = "Вам еще работать и работать";

    echo $message; }

elseif ($age >=60) {
    $message = "Вам пора на пенсию";
    echo $message;
}

elseif ($age >= 0 &&$age <=17) {
    $message = "Вам еще рано работать";
    echo $message;
}