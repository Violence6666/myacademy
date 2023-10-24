<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "myacademy";
    $connect=mysqli_connect($host,$username,$password,"$dbname");
   
    if(!$connect)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
 mysqli_set_charset($connect, 'utf8');
?>