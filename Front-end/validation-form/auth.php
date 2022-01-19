<?php
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    $pass = md5($pass."qazwsxedc987123");

    $mysql = new mysqli('127.0.0.1','root','','register-bd');

    $result = $mysql->query("SELECT * FROM 'users' WHERE 'login' = '$login' AND  'pass' = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0)  {
        echo "Такой пользователь не найден";
        exit();
    }

    print_r()

    $mysql->close($user);
    exit();

    header('Location: /');


?>

