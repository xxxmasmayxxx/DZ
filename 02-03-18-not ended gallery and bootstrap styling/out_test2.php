<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 02.03.2018
 * Time: 19:13
 */

$test2 = 'files' . DIRECTORY_SEPARATOR . 'test2.txt';
if (is_writable($test2)) {
    $text2 = date('r') . ' Added new line.' . PHP_EOL;
    file_put_contents($test2, $text2, FILE_APPEND | LOCK_EX);
    echo '<p>Written</p><pre>' . var_export($text2, 1) . '</pre> to file: ' . $test2 . '.</p>';
} else {
    die('Error: writing file ' . $test2 . ' access denied!');
}
