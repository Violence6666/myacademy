<?php

    $connect = mysqli_connect('localhost', 'root', '', 'myacademy');

    if (!$connect) {
        die('Error connect to DataBase');
    }