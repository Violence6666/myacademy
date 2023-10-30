<!DOCTYPE html>
<html>
	<head>
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Главная</title>
		<link rel="stylesheet" href="styleLog.css" type="text/css" />


<style type="text/css">
      <?php 
      include "styleNe.css" 
      ?>
  </style>
    <script type = "text/javascript">
        function validate() {
        var text;
           if( document.myForm.nameSurname.value == "" ) {
             text = "Введите ";
              document.getElementById("demo").innerHTML = text;
              document.myForm.nameSurname.focus() ;
              return false;
           }
           if( document.myForm.email.value == "" ) {
             text = "E-mail cannot be empty";
              document.getElementById("demo").innerHTML = text;
              document.myForm.email.focus() ;
              return false;
           }
      var emailID = document.myForm.email.value;
      atposn = emailID.indexOf("@");
      dotposn = emailID.lastIndexOf(".");
      if (atposn < 1 || ( dotposn - atposn < 2 )) {
      text = "Please enter valid email ID";
      document.getElementById("demo").innerHTML = text;
      document.myForm.email.focus() ;
      return false;
    }
           if( document.myForm.subject.value == "0" ) {
              text = "Please provide your area of expertise";
              document.getElementById("demo").innerHTML = text;
              return false;
           }
           return( true );
        }
     </script>
	</head>

	<body>



		
<div id="wrapper">

<nav>
			<ul class="top-menu">
			
			<li><a href="login.php">Авторизация</a></li>
	
			<li class="active"><a href="complex_form.php">Регистрация</a></li>


			</ul>
		</nav>

<div id="heading">
			<h1>Вход</h1>
		</div>


		<center>
		

				<form action="complex_form.php" method="post" name="myForm" onsubmit = "return(validate());">
				<h1 align="center">Регистрация</h1>
            <table align="center" cellspacing = "3" cellpadding = "3" border = "3">
<tr>
<td align = "right">Фамилия Имя </td>
<td> <input type="text" name="r_nameSurname"/> </td>
</tr>
 <tr>
              <td align = "right">E-mail</td>
              <td><input type = "text" name = "email"/></td>
           </tr>
           
<tr>
<td align = "right"> Логин: </td>
<td> <input type="text" name="r_login"/> </td>
</tr>
<tr>
<td align = "right"> Пароль: </td>
<td> <input type="password" name="r_password"/> </td>
</tr>
</table>
   <p id="demo" style="color:red; text-align:center"></p><div style="text-align:center"><input type="submit" name="r_send" value="Зарегистрироватся!" /></div>      
<?php
 require_once("dbconnect.php");
 

//оператор выполнения приложения if
			if(isset($_POST["r_nameSurname"])){ $r_nameSurname = $_POST["r_nameSurname"]; }
			if(isset($_POST["email"])){ $r_email = $_POST["email"]; }
			if(isset($_POST["r_login"])){ $r_login = $_POST["r_login"]; }			
			if(isset($_POST["r_password"])){ $r_password = $_POST["r_password"]; }		
			if(isset($_POST["r_send"])){ $r_send = $_POST["r_send"]; }	
			if(isset($r_send)){
mysqli_query($connect,"SET NAMES UTF8");
			$result = mysqli_query($connect,"INSERT INTO users (nameSurname, email, login, password) VALUES ('$r_nameSurname', '$r_email', '$r_login', '$r_password')") or die ("Error : " .mysqli_error() );


			if($result)	
				{
echo"Регистрация прошла успешно!";
exit();
				}
			}else{
			echo"нет данных для обработки";	
			}
			?>	




</form>
		</center>
	</body>
</html>