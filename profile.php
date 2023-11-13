<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body>

    <!-- Профиль -->
    
    <form class="profile-main">
        <div class="logo-profile">
            <img src="<?= $_SESSION['user']['avatar'] ?>" style="width:100px;" alt="">
        </div>
        <h2 style="margin: 10px 0; font-size: 16px;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>