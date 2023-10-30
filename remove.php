<?php
include "dbconnect.php";

$id = 0;
if(isset($_POST['id'])){
  $id = mysqli_real_escape_string($connect,$_POST['id']);
}

if($id > 0){

  $checkRecord = mysqli_query($connect,"SELECT * FROM users WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    $query = "DELETE FROM users WHERE id=".$id;
    mysqli_query($connect,$query);
    echo 1;
    exit;
  }else{
    echo 0;
    exit;
  }
}
echo 0;
exit;
?>