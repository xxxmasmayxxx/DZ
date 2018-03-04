<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:51
 */


$example = function () use (&$message) {
    echo 'message: ' . var_dump($message, 1) . '<br>';
};

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
$example();

// Reset message
$message = 'hello';
$example();
