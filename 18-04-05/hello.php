<?php

session_start();

if ($_POST){

 if($_POST['name'] != '') {

     $_SESSION['name'] = $_POST['name'];

     echo "hello " . $_SESSION['name'] . " !";
 }

 elseif($_POST['name'] == ''){

     echo "you are noname?";

    }
} else {

    echo 'please get back and write your name';
}

session_destroy();

echo"<br><br><a href=\"index.php\">click here to get back</a>";
