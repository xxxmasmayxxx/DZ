<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 28.02.2018
 * Time: 21:57
 */
//include_once 'news.php';
//require_once '../includes/functions.php';

$sernews = file_get_contents('template/news.txt');
$news = unserialize($sernews);
$newstxt = fopen("template/news.txt", "a");
ftruncate($newstxt, 0);
fclose($newstxt);
if( isset($_REQUEST["full"])) {
    $var = $_REQUEST["full"];

    if ($var == 'all') {
        allnews();
    }
    foreach($news as $name => $val)
        if ($var == $name) {
            onenews($name);
        }

}
