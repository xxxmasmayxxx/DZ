<?php

if ($_GET['name'] != '') {

    $name = $_GET['name'];

    echo "hello $name !";

} else {

    echo "you are noname?";
}
echo"<br><br><a href=\"#\" onclick=\"history.back();\">get back</a>";
//print_r($_GET);