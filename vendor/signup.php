<?php

    session_start();
    require_once 'scripts/dbconnect.php';

    $r_nameSurname = $_POST['r_nameSurname'];
    $r_login = $_POST['r_login'];
    $email = $_POST['email'];
    $r_password = $_POST['r_password'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../reg.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id_student`, `nameSurname`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$nameSurname', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }

?>
