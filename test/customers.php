<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="page-header">
            <h2>Пользователи</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя и фамилия</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Логин</th>
                            <th scope="col">Пароль</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                      <?php
                      include 'dbconnect.php';
                      mysqli_query($connect, "SET NAMES UTF8");
                      $query = "select * from users limit 200";
                      $result = mysqli_query($connect, $query);
                      ?>
                      <?php if ($result->num_rows > 0) : ?>
                        <?php while ($array = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <th scope="row"><?php echo $array[0]; ?></th>
                                <td><?php echo $array[1]; ?></td>
                                <td><?php echo $array[2]; ?></td>
                                <td><?php echo $array[3]; ?></td>
                                <td><?php echo $array[4]; ?></td>
                                <td><?php echo $array[5]; ?></td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-primary view" data-id="<?php echo $array[0]; ?>">Удалить</a>
                        </tr>
                        <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" rowspan="1" headers="">No Data Found</td>
                        </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>
                        
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-4">
                <span id="fname"></span><br>
                <span id="lname"></span><br>
                <span id="email"></span><br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Search for users</h2>
                <input type="text" name="search" id="search" autocomplete="off" placeholder="search user name here....">
                <div id="output"></div>
    </div>
        </div>
            </div>

    <script>
                        
      $(document).ready(function($) {

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
</body>

</html>