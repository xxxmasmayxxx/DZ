<?php

//Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя,
//запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
//

echo"<form action='hello.php'>

    <input type='text' name='name' placeholder='enter your name please'>
    <input type='submit' value='say hello'>

</form>
";