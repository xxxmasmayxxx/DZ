<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 02.03.2018
 * Time: 19:25
 */

$dir = 'files';

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            // if ($file === '.' || $file === '..') {
            if ($file === '.' or $file === '..') {
                continue; // Skip directory links
            }
            $fullFilePath = $dir . DIRECTORY_SEPARATOR . $file;
            echo '<p>File: ' . $fullFilePath . '; file type: ' .
                filetype($fullFilePath) . '</p>';
        }
        closedir($dh);
    }
} else {
    die('Error: directory ' . $dir . ' does not exists!');
}