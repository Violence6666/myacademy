<<<<<<< HEAD
<?php

    $connect = mysqli_connect('localhost', 'root', '', 'myacademy');
	mysqli_set_charset($connect, 'utf8');
    if (!$connect) {
        die('Error connect to DataBase');
=======
<?php

    $connect = mysqli_connect('localhost', 'root', '', 'myacademy');
	mysqli_set_charset($connect, 'utf8');
    if (!$connect) {
        die('Error connect to DataBase');
>>>>>>> 1738817b5f902f0a16e063f9ca939032d68dc6e2
    }