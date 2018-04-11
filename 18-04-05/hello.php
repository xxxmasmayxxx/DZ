<?php

session_start();
if ($_POST['name'] != '') {

    $_SESSION['name'] = $_POST['name'];

    echo "hello " . $_SESSION['name'] . " !";

} else {

    echo "you are noname?";
}

session_destroy();

echo"<br><br><a href=\"#\" onclick=\"history.back();\">get back</a>";
//print_r($_GET);