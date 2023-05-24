<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($pass) || empty($repeatpass)) {
    echo '<script>alert("Заполните все поля"); window.location.href = "../registration.html";</script>';
} else {
    $check_sql = "SELECT * FROM users WHERE login='$login'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        echo '<script>alert("Этот логин уже занят. Попробуйте другой"); window.location.href = "../registration.html";</script>';
    } else {
        if ($pass != $repeatpass) {
            echo '<script>alert("Пароли не совпадают"); window.location.href = "../registration.html";</script>';
        } else {
            $sql = "INSERT INTO users (login, pass) VALUES ('$login', '$pass')";
            if ($conn->query($sql) === TRUE) {
                session_start();
                $_SESSION['username'] = $login;
                echo '<script>alert("Вы успешно зарегистрировались!"); window.location.href = "../login.html";</script>';
            } else {
                echo '<script>alert("Ошибка при регистрации, попробуйте еще раз"); window.location.href = "../registration.html";</script>';
            }
        }
    }
}
?>
