<?php


setcookie("p4", "1", time() + 3600 * 24 * 7);

echo "congratulations it's 4 page<br><br>
you was at:<br>";

foreach ($_COOKIE as $key => $val) {
    if ($key == 'p1')
        echo "1 page<br>";
    if ($key == 'p2')
        echo "2 page<br>";
    if ($key == 'p3')
        echo "3 page<br>";
    if ($key == 'p4')
        echo "4 page<br>";
}

echo "<br><a href='1.php'>go start</a>";

//print_r($_COOKIE);
