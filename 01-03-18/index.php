<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:15
 */

require_once 'includes' . DIRECTORY_SEPARATOR . 'functions.php';

$topNav = getTopNavigation();

ob_start();

$page = $_REQUEST['page'];

switch ($page)
{
    case 'about':
        $title = 'About us';
        $h1 = 'About us page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'about.php';
        break;
    case 'contact':
        $title = 'Contact us';
        $h1 = 'Contact us page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'contact.php';
        break;
    case 'news':
        $title = 'Our news';
        $h1 = 'News page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'news.php';
        break;
    case 'newsfull':
        $title = 'Our news';
        $h1 = 'News page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'newsfull.php';
        break;
    case 'home':
    default:
        $title = 'Home page';
        $h1 = 'Home page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'home.php';
        break;
}



$content = ob_get_contents();

ob_end_clean();

include_once 'template' . DIRECTORY_SEPARATOR . '_layout.php';
