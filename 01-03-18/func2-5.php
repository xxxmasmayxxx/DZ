<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:49
 */

$example = function ($arg) use ($message) {
    var_dump('arg: ' . $arg . '; message: ' . $message . '.');
};
$example("hello");
