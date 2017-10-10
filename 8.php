<?php
$name= 'Вячеслав';
$age = 'test';

if ( $age >= 18 && $age <= 59) {
    $message = "Вам еще работать и работать";

    echo $message; }

elseif ($age >=60) {
    $message = "Вам пора на пенсию";
    echo $message;
}

elseif ( is_integer($age) && $age >= 0 && $age <=17) {
    $message = "Вам еще рано работать";
    echo $message;
    }

elseif (!is_integer($age)){
    $message = "Неизвестный возраст";
    echo $message;
}

else {
    $message = "Неизвестный возраст";
    echo $message;
}