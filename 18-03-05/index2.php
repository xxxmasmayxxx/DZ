<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 06.03.2018
 * Time: 17:51
 */

session_start();

if (isset($_REQUEST['username'])) {
    $_SESSION['username'] = $_REQUEST['username'];
    header('Location: index3.php');
}

