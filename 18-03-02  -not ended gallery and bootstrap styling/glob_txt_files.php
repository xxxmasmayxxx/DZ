<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 02.03.2018
 * Time: 19:33
 */

$dir = 'files';
$pattern = '*.txt';
$fullDirPattern = $dir . DIRECTORY_SEPARATOR . $pattern;

$txtFiles = glob($fullDirPattern);
echo '<p>Got ' . $pattern . ' files from ' . $dir . '</p><pre>' .
    var_export($txtFiles, 1) . '</pre>';