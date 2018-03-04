<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 19:14
 *
 * Написать функцию, которая будет возвращать текст анонса.
 * Она должна принимать 2 аргумента: строку текста, и количество символов.
 * Если строка текста длиннее 2-го аргумента, то ее необходимо обрезать по границе
 * ближайшего слова и добавить ... иначе возвращать строку без изменений.
 */

function getAnnounce($str, $n)
{
    $len = mb_strlen($str);

    if ($len > $n) {
        $p = mb_strpos($str, ' ');
        if ($p !== false) {
            $words = explode(' ', $str);
            $res = $s = '';
            $m = 0;
            foreach ($words as $word) {
                $m += mb_strlen($s . $word);
                if ($m > $n) {
                    return $res . '...';
                } else {
                    $res .= $s . $word;
                    $s = ' ';
                }
            }
        }
    }

    return $str;
}

echo getAnnounce('Какая-то тестовая строка большой длины.', 19);
