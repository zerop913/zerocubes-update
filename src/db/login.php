<?php

require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    echo '<script>alert("Заполните все поля"); window.location.href = "../login.html";</script>';
} else {
    $sql = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['username'] = $row['login'];

            // Проверяем, заполнен ли профиль пользователя
            $check_profile_sql = "SELECT * FROM users_info WHERE login='$login'";
            $check_profile_result = $conn->query($check_profile_sql);
            if ($check_profile_result->num_rows > 0) {
                // Профиль уже заполнен - перенаправляем на index.html
                echo '<script>alert("Добро пожаловать, ' . $row['login'] . '!"); window.location.href = "../index.html";</script>';
            } else {
                // Профиль не заполнен - перенаправляем на filling_profile.html
                echo '<script>alert("Добро пожаловать, ' . $row['login'] . '!"); window.location.href = "../filling_profile.html";</script>';
            }
        }
    } else {
        echo '<script>alert("Нет такого пользователя"); window.location.href = "../login.html";</script>';
    }
}
?>
