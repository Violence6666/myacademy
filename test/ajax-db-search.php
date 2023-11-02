<?php
require_once "dbconnect.php";
if (isset($_POST['query'])) {

    $query = "SELECT * FROM users WHERE nameSurname LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            echo $user['nameSurname']."<br/>";
        }
    } else {
        echo "<p style='color:red'>User not found...</p>";
    }
}
?>