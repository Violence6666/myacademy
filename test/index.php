<<<<<<< HEAD
<<<<<<<< HEAD:test/index.php
<!DOCTYPE html>
<html>
<head>
  <title>Ajax PHP MySQL Search Example | Tutsmake.com</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Search for users</h2>
                <input type="text" name="search" id="search" autocomplete="off" placeholder="search user name here....">
                <div id="output"></div>
</div>
</div>
</div>

<script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'ajax-db-search.php',
                        method: 'POST',
                        data: {query:query},
                        success: function(data){

                            $('#output').html(data);
                            $('#output').css('display', 'block');

                            $("#search").focusout(function(){
                                $('#output').css('display', 'none');
                            });
                            $("#search").focusin(function(){
                                $('#output').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#output').css('display', 'none');
                }
            });
        });
</script>
</body>





========
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
>>>>>>>> 1738817b5f902f0a16e063f9ca939032d68dc6e2:index.php
=======
<!DOCTYPE html>
<html>
<head>
  <title>Ajax PHP MySQL Search Example | Tutsmake.com</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Search for users</h2>
                <input type="text" name="search" id="search" autocomplete="off" placeholder="search user name here....">
                <div id="output"></div>
</div>
</div>
</div>

<script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'ajax-db-search.php',
                        method: 'POST',
                        data: {query:query},
                        success: function(data){

                            $('#output').html(data);
                            $('#output').css('display', 'block');

                            $("#search").focusout(function(){
                                $('#output').css('display', 'none');
                            });
                            $("#search").focusin(function(){
                                $('#output').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#output').css('display', 'none');
                }
            });
        });
</script>
</body>





>>>>>>> 1738817b5f902f0a16e063f9ca939032d68dc6e2
</html>