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

    echo "hello " . $_SESSION['name'] . " !";
}


echo"<br><br><a href=\"index.php\">click here to get back</a>";
