<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 02.03.2018
 * Time: 19:13
 */

$test2 = 'files' . DIRECTORY_SEPARATOR . 'test1.txt';
if (file_exists($test2)) {
    $text1 = file_get_contents($test2);
    echo '<p>file ' . $test2 . ' content:</p><pre>' . var_export($text1, 1) . '</pre>';
} else {
    die('Error: file ' . $test2 . ' does not exists!');
}
