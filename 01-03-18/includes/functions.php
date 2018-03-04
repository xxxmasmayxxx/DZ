<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:16
 */


function getTopNavigation()
{
    $navHtml = '';

    $pages = [
        ['href' => '?page=home', 'title' => 'Home page'],
        ['href' => '?page=about', 'title' => 'About us'],
        ['href' => '?page=contact', 'title' => 'Contact us'],
        ['href' => '?page=news', 'title' => 'Our news'],
    ];

    if (!empty($pages)) {
        $navHtml .= '<ul>';
        foreach ($pages as $i => $page) {
            $navHtml .= '<li><a href="'. $page['href'] .'">'. $page['title'] .'</a></li>';
        }
        $navHtml .= '</ul>';

        }
    return $navHtml;
    }



function newslist($news)
{
    echo '<strong>News list: </strong>' . '<br><br>';

      foreach ($news as $name => $val) {


        list($name, list('text' => $text, 'date' => $date)) = [$name, $val];

        echo '<strong>News title: </strong>' . $name . '<br>
            <strong> Date: </strong>' . $date . '<br>
            <strong> Announce: </strong>' . substr($text, 0, 100) . '...' .
            '&nbsp&nbsp&nbsp&nbsp
            <form action="?page=newsfull&full=' . $name . '" method="POST">
            <button type = "submit">See full ' . $name . ' news</button></form>'
            .  '<br><br>';

      }
    echo '<form action="?page=newsfull&full=all" method="POST">
          <button>See full all news</button></form>';
}

function onenews($namenews)
{
    global $news;
    foreach ($news as $name => $val) {

        if ($namenews == $name) {

            list($name, list('text' => $text, 'date' => $date, 'source' => $source)) = [$name, $val];

            echo '<hr><br><br><strong>One news</strong><br><br>
                    ' . $name . '<br>' . $text . '<br>' . $date . '<br>' . $source .  '<br><br>';
        }
    }
}

function allnews(){
    global $news;

    echo '<hr><br><br><strong>Allnews</strong><br><br>';

    foreach ($news as $name => $val) {

        list($name, list('text' => $text, 'date' => $date, 'source' => $source)) = [$name, $val];

        echo  $name . '<br>' . $text . '<br>' . $date . '<br>' . $source . '<br><br>';
    }
}