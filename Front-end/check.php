<?php
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit ();
    }   else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit ();
    }   else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
        echo "Недопустимая длина пароля (от 2 до 8 символов)";
        exit ();
    }

    $mysql = new mysqli('DS','localhost','131331Dimka131331','register_bd');
    $mysql->query("INSERT INTO `users`(`login`, `pass`, `name`)
    VALUE('$login', '$pass, '$name')");

    $mysql->close();
?>