<?php


session_start();
if ($_SESSION['username'] !== '') {
    echo 'Hello ' . $_SESSION['username'];
}
else {header('Location: index.php');
}
session_destroy();
