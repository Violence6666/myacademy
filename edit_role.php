<?php
	/*  edit_role.php 
		программа редактирования роли пользователей (таблица users)
		вызывается из index.php 
	*/
	//-- подключаемся к базе
	$conn = new mysqli("localhost", "root", "", "myacademy");
	if($conn->connect_error){
		die("Ошибка: " . $conn->connect_error);
	}
	//-- формируем номер страницы
    if (isset($_GET['page_num'])) {
    	$page_num = $_GET['page_num'];
    } else {
    	$page_num = 1;
    }
    //-- вывести реакцию на возможные изменения
    if (isset($_GET['act'])) {
    	$act = $_GET['act'];
    	$rec_id = $_GET['rec_id'];
    	
    	if( $act == 'delete'){  //--отработать удаление
    		$sql = "DELETE  FROM Users  WHERE  id = $rec_id";
    		$result = $conn->query($sql);
    	}elseif( $act == 'update'){  //--отработать изменение роли
    		$new_role = $_GET['new_role'];
    		$sql = "UPDATE  Users  SET role = '".$new_role."' WHERE  id = '".$rec_id."'";
    		$result = $conn->query($sql);
    		//echo "<br> result =  $result";
    	}
    } 
    //-- задаем размер страницы
    $page_len = 6;
    $sql = "SELECT COUNT(*) FROM Users";
    if($result = $conn->query($sql)){
    	//-- вычисляем число страниц 
		$res =  mysqli_fetch_array($result);
		$rows_count =$res[0];
        $pages_count = ceil($rows_count / $page_len);

    	//-- исправляем возможный выход за границы 
        if($page_num < 1)
    		$page_num = 1;
    	if($page_num > $pages_count)
    		$page_num = $pages_count;

    	//-- извлекаем все записи страницы 
        $offset = ($page_num-1) * $page_len;
        $sql = "SELECT * FROM  Users  LIMIT $page_len OFFSET $offset";
		$result = $conn->query($sql);

	} else{
		echo "Ошибка: " . $conn->error;
	}
	$conn->close();
?>		
		
<!DOCTYPE html>
<html>
<head>
<title>Пользователи</title>
	<meta charset="utf-8" />
	<link href="styles/table.css" rel="stylesheet" type="text/css" />
	<link href="styles/pages.css" rel="stylesheet" type="text/css" />
	<script>
		//-- обработчик кнопки записать
		function fn_write( page_num, rec_id){
			role_id = "role"+rec_id;
			el = document.getElementById(role_id);
			new_role = el.value;
			link = "edit_role.php?page_num="+page_num+"&rec_id="+rec_id+"&act=update&new_role="+new_role;
			//alert(link);
			location.href = link;
		};
		//-- обработчик изменения листбокса
		function fn_changerole(e){
			role_id = e.id.replace("sel_role", "role");
			//alert(role_id);
			el = document.getElementById(role_id);
			el.value = e.value;
		}
	</script>
</head>
<body>
	<h3 class="head-text">Редактор пользователей </h3>
	<?php 	
		//-- выводим записи на экран
		echo "<table class = view><tr><th>Id</th><th>Имя</th><th>Фамилия</th><th>Почта</th>
				<th>Логин</th><th>Пароль</th><th>Роль</th></tr>";
		while( $row = mysqli_fetch_assoc($result) ){
			echo "<tr>";
				$rec_id = $row["id"];
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["famil"] . "</td>";
				echo "<td>" . $row["mail"] . "</td>";
				echo "<td>" . $row["login"] . "</td>";
				echo "<td>" . $row["password"] . "</td>";
				echo "<td><input type = text id = role".$rec_id." size = 8 value = " . $row["role"] . "></td>";
				?>
				<td> <select id=sel_role<?php echo $rec_id;?> onchange="fn_changerole(this)"> 
  						<option value="stud">stud</option>
  						<option value="prepod">prepod</option>
  						<option value="admin">admin</option>
					</select>
				</td>
				<?php
				echo "<td> <input type = button value = 'записать' onclick ='fn_write(".$page_num.",  $rec_id )'></td>";
				$link = "edit_role.php?page_num=".$page_num."&rec_id=".$rec_id."&act=delete";
				echo "<td> <a href = $link> удалить  </a></td>";
			echo "</tr>";
		}
		echo "</table>";
		$result->free();
		//-- подключаем постраничный просмотр
		include 'pagination.php';
	?>
</body>
</html>