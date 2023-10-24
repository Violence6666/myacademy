<!DOCTYPE html>
<html>
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title></title>	
		<link rel="stylesheet" href="loginstyle.css" type="text/css">
		<style type="text/css">
      <?php 
      include "styleNe.css" 
      ?>
  </style>
	</head>
	<body>		
<div id="wrapper">
<nav>
	<ul class="top-menu">	
	<li class="active"><a href="login.php">Авторизация</a></li>
	<li><a href="complex_form.php">Регистрация</a></li>		
	<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</nav>
<div id="heading">
	<h1>Вход</h1>
</div>
	<center>
	<form action="login.php" method="post" name="l_form" >
  <table>
   <tr>
    <td> Логин: </td>
    <td> <input type="text" name="l_login" required=" " /> </td>
   </tr>
	<tr>
    <td> Пароль: </td>
    <td> <input type="text" name="l_password" required=" " /> </td>
   </tr>

   <tr>
    <td colspan="2"> <input type="submit" name="l_send" value="Войти" /> </td>
   </tr>


  </table>
<?php
require_once("dbconnect.php");
if(isset($_POST["l_login"])){ $l_login = $_POST["l_login"]; }
if(isset($_POST["l_password"])){ $l_password = $_POST["l_password"]; }
if(isset($_POST["l_send"])){ $l_send = $_POST["l_send"]; }

if(isset($l_send)){
$result = mysqli_query($connect, "SELECT * FROM users WHERE login = '$l_login' AND password = '$l_password'") or die ( "Error : ".mysqli_error() ); 



if(mysqli_num_rows($result)<1)
{echo"Неправильный логин или пароль";}
else{
$_SESSION['login'] = $l_login;
$_SESSION['password'] = $l_password;
//$_SESSION['name'] = $l_name;
//echo "Авторизация прошла успешно! ";}

echo "Авторизация прошла успешно! Здравствуйте, ";}
//Печатаем содержимое таблицы
while ($a=mysqli_fetch_array($result))
{
$name=$a['name'];
echo $name;echo"<br>";echo"<form action='index.php' method='post'>
                        <input type='text' name='name' value='" . $a['name'] . "' />
						<a href='index.php?name=$name'>начать</a>
	
                   </form>";echo"<br>";
}

/*

//Печатаем шапку таблицы
echo ("<p align=center><font face=verdana><b>Найденные</b>
<table border=1 align=center width=90% cellpadding=5>
<tr bgcolor=#ffffcc>
<td>Имя</td>
<td>Пароль</td>
</tr>");

//Печатаем содержимое таблицы
while ($a=mysqli_fetch_array($result))
{
$name=$a['name'];
$password=$a['password'];
echo ("<tr>
<td>$name</td>
<td>$password</td>
</tr>");
}
echo ("</table>");*/
}

?>




</form>
</center>
</body>
</html>