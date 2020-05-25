<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Просмотр и редактирование заявки</title>
</head>
<body class="body">
				
	<?php
		$f=$_GET['F'];
		

		
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
	
		$query = "SELECT * FROM PISrequests WHERE id =".$f."";
		
		echo '<form class="add-form" method="POST" action="phpfiles/edit-request.php?F='.$f.'">';
			
		if ($result = $link->query($query)) {
			while ($row = $result->fetch_assoc()) {
				echo '<h1>Просмотр и редактирование заявки #'.$f.'</h1>';
		        echo '<div class="form-group">';
				echo '<label for="exampleFormControlSelect1">Имя клиента</label>';
				echo '<input type="text" class="form-control" id="materials" name="client" value="';
				echo  $row['name_client'];
				echo '">';
				echo '</div>';	
				
				echo '<div class="form-group">';
				echo '<label for="type">Тип сигнализаци</label>';
				echo '<input type="text" class="form-control" id="type" name="type" value="';
				echo  $row['type'];
				echo '">';
				echo '</div>';
				
				echo '<div class="form-group">';
				echo '<label for="materials">Материалы</label>';
				echo '<input required type="text" class="form-control" id="materials" name="material" value="';
				echo  $row['material'];
				echo '">';
				echo '</div>';
				
				echo '<div class="form-group">';
				echo '<label for="worker">Исполнитель</label>';
				echo '<input type="text" class="form-control" id="worker" name="worker" value="';
				echo  $row['worker'];
				echo '">';
				echo '</div>';
				
				echo '<div class="form-group">';
				echo '<label for="status">Статус</label>';
				echo '<input type="text" class="form-control" id="status" name="status" value="';
				echo  $row['status'];
				echo '">';
				echo '</div>';
			}
			$result->free();
		}
		
		echo '<a href="requests.php"><button type="button" class="btn btn-info">Назад</button></a>';
        echo '<button type="submit" class="btn btn-success">Сохранить</button>';
        echo '<a href="?del_id='.$f.'"><button type="button" class="btn btn-danger">Удалить</button></a>';
		
		if (isset($_GET['del_id'])) {
			$sql = mysqli_query($link, "DELETE FROM `PISrequests` WHERE `ID` = {$_GET['del_id']}");
			if ($sql) {
			  echo "<p style='padding-top:20px; font-size:20pt;'>Заказ удален</p>";
			} else {
			  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
			}
		}
		

	?>

      </form>
</body>
</html>