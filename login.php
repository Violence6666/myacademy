<?php
session_start();

// if ($_session['user']) {
    // header('location: profile.php');
// }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/loginstyle.css">
</head>
<body class="session-authentication">
<!-- Логотип -->

<div class="header-wrapper">
		<div class="header-logged pt-5 pb-4">
			<div class="cointainer-center">
			<a class="header-logo" href="index.html">
			<img class="logotype" src="img/logo.svg">
			</a>
			</div>
		</div>
	</div>


<div class="auth-form px-3">
<div class="auth-form-header p-0">
<h1>Войти в МоюАкадемию</h1>
</div>
<div class="auth-form-body mt-3">
    <!-- Форма авторизации -->
    <form action="vendor/signin.php" method="post">
        <label class="login-label">Логин</label>
        <input type="text" name="login" class="form-control input-block">
        <label class="password-label">Пароль</label>
        <input type="password" name="password" class="form-control form-control input-block js-password-field">
        <button type="submit" class="btn btn-primary btn-block js-sign-in-button">Войти</button>
		<div class="login-callout mt-3">
        <p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>!
        </p>
		</div>
        
    </form>
    
</div>
<?php
            if (isset ($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
</div>
</body>
</html>