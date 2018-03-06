<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 02.03.2018
 * Time: 19:36
 */

$file = 'files' . DIRECTORY_SEPARATOR . 'test2.txt';

if (file_exists($file)) {
    $lines = file($file);

    array_walk($lines, function($str){ return trim($str); });

    if (!empty($lines)) {
        echo '<p>Got file ' . $file . ' lines:</p><pre>' . print_r($lines, 1) . '</pre>';
    }
}