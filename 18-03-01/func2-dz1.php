<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:05
 *
 * Написать функцию, которая будет принимать в качестве аргумента не пустой массив,
 * будет находить минимальное и максимальнрое значения массива и будет возвращать
 * массив найденых ['min' => $min, 'max' => $max] значений.
 */

function getArrayMinMax(array $a)
{
    if (!empty($a)) {
        $min = min($a);
        $max = max($a);

        return [
            'min' => $min,
            'max' => $max,
        ];
    }
}

$a1 = [
    1999,
    999,
    -999,
];

echo '<p>Array: ' . var_export($a1, 1) . '</p>';

$res = getArrayMinMax($a1);

echo '<p>Array miniumum: ' . var_export($res['min'], 1) . '</p>';
echo '<p>Array maximum: ' . var_export($res['max'], 1) . '</p>';