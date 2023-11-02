<?php
    include "dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>How to Delete Record using Ajax in PHP?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
    <body class="bg-dark">
        <div class='container'>
            <div class="content mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Пользователи</h3>
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-hover table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                
                            </tr>

                                <?php 
                                    $query = "SELECT * FROM users";
                                    $result = mysqli_query($connect,$query);

                                    $count = 1;
                                    while($row = mysqli_fetch_array($result) ){
                                    $id = $row['id'];
                                ?>
                            <tr>
                                <td align='center'><?= $count; ?></td>
								
                                <td><?php echo $row['nameSurname'] ?></td>
                               
                                <td align='center'><span class='delete' data-id='<?= $id; ?>'><i class="fa fa-trash-o btn btn-danger" aria-hidden="true"></i></span></td>
                            </tr>
                                <?php
                                    $count++;
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
   <script>
       $(document).ready(function() {
           $('.delete').click(function() {
            let el = this;
            let deleteid = $(this).data('id');

            let confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {
                $.ajax({
                    url: 'remove.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){
                    if(response == 1){
                                $(el).closest('tr').css('background','tomato');
                                $(el).closest('tr').fadeOut(800,function(){
                                $(this).remove();
                        });
                    }else{
                        alert('Invalid ID.');
                    }
                    }
                });
            }
           });
       });
    </script>
</html>