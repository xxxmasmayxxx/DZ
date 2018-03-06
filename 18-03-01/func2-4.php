<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:35
 */

$good1 = [
    'price' => 9.99,
    'title' => 'Some book',
];

$good2 = [
    'price' => 599.34,
    'title' => 'Coffee making machine',
];

function getTotal($amt, $good)
{
    echo 'Called ' . __FUNCTION__ . ' good: ' . var_export($good, 1) . '; amount: ' . var_export($amt, 1) . '<br>';

    $cnt = 0;

    return function ( $good ) use ( $amt, &$cnt ) {
        $cnt += $good['price'];
        print " summ: {$cnt} <br>";

        if ($cnt > $amt) {
            echo 'Sold goods on summ: ' . $cnt . '<br>';
        }
    };
}

call_user_func('getTotal', 120, $good1);
call_user_func('getTotal', 254, $good2);