<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:31
 */

$funcRef = create_function(
    '$a, $b',
    'return $a + $b;'
);

$res = $funcRef(3, 5);

echo 'Runction result: ' . var_export($res, 1);
