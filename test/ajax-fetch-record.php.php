<<<<<<< HEAD
<?php
    include "mydbCon.php";
    $id = $_POST['id'];
    $query = "SELECT * from customers WHERE id = '" . $id . "'";
    $result = mysqli_query($conn, $query);
    $cust = mysqli_fetch_array($result);
    if ($cust) {
        echo json_encode($cust);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
    }
=======
<?php
    include "mydbCon.php";
    $id = $_POST['id'];
    $query = "SELECT * from customers WHERE id = '" . $id . "'";
    $result = mysqli_query($conn, $query);
    $cust = mysqli_fetch_array($result);
    if ($cust) {
        echo json_encode($cust);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
    }
>>>>>>> 1738817b5f902f0a16e063f9ca939032d68dc6e2
?>