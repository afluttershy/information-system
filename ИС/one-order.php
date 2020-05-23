<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Просмотр и редактирование заказа</title>
</head>
<body class="body">

	<?php
		$f=$_GET['F'];
		
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		$query = "SELECT * FROM PISorders WHERE id =".$f."";
		
		echo '<form class="add-form" method="POST" action="phpfiles/edit-order.php?F='.$f.'">';
		
		if ($result = $link->query($query)) {
			while ($row = $result->fetch_assoc()) {
		
			echo '<h1>Просмотр и редактирование заказа #'.$f.'</h1>';
			echo '<div class="form-group">
				<label for="exampleFormControlSelect1">ID заявки</label>
				<input type="text" value="';
			echo $row['id_request'];
			echo '" class="form-control" name="request">	
			</div>
			
			
			<div class="form-group">
				<label for="inputDate">Дата проведения работ</label>
				<input type="text" name="date" value="';
			echo $row['date'];
			echo '" class="form-control">
			</div>
			
			
			<div class="form-group">
				<label for="status">Статус</label>
				<input type="text" value="';
			echo $row['status'];
			echo '" class="form-control" name="status">
			
			</div>
			<div class="form-group">
				<label for="price">Сумма к оплате</label>
				<input type="text" class="form-control" id="price" name="price" value="';
			echo $row['amount_payment'];
			echo '">';
			
			
			echo '</div>
			<div class="form-group">
				<label for="status2">Статус оплаты</label>
				<input type="text" value="';
			echo $row['status_payment'];
			echo '" class="form-control" name="statuspayment">	
			</div>';
			
			}
			$result->free();
		}
			
			
		echo '<a href="orders.php"><button type="button" class="btn btn-info">Назад</button></a>';
        echo '<button type="submit" class="btn btn-success">Сохранить</button>';
        echo '<a href="?del_id='.$f.'"><button type="button" class="btn btn-danger">Удалить</button></a>';
		
		if (isset($_GET['del_id'])) {
			$sql = mysqli_query($link, "DELETE FROM `PISorders` WHERE `ID` = {$_GET['del_id']}");
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