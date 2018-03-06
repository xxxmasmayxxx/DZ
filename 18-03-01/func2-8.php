<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:28
 */

$a = [1, 0, -3, 74, 0.12, 46, 25];

echo '<p>Array: </p><pre>' . var_export($a, 1) . '</pre>';

$x = array_filter($a, function ($v) { return $v > 0; } );

echo '<p>Filtered positive values array: </p><pre>' . var_export($x, 1) . '</pre>';