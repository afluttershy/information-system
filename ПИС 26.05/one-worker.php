<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Просмотр и редактирование сотрудника</title>
</head>
<body class="body">
   <?php
		$f=$_GET['F'];
		

		
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
	
		$query = "SELECT * FROM PISworkers WHERE id =".$f."";
		
		echo '<form class="add-form" method="POST" action="phpfiles/edit-worker.php?F='.$f.'">';
			
		if ($result = $link->query($query)) {
			while ($row = $result->fetch_assoc()) {
				
				
				
			echo '<h1>Просмотр и редактирование сотрудника #'.$f.'</h1>
			<div class="form-group">
				<label for="fio">ФИО</label>
				<input type="text" class="form-control" id="fio" name="fio" value="';
			echo  $row['fio_worker'];
			echo '">
			</div>
			<div class="form-group">
				<label for="inputDate">Дата рождения</label>
				<input type="date" class="form-control" name="date" value="';
			echo  $row['birth_date'];	
			echo '">
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<div class="col">
					<label>Серия паспорта</label>
					<input type="text" class="form-control" name="series" value="';
			echo  $row['passport_series'];		
			echo '">
				</div>
				<div class="col">
					<label>Номер паспорта</label>
					<input type="text" class="form-control" name="number" value="';
			echo  $row['passport_number'];
			echo '">
				</div>
			</div>
			<div class="form-group">
				<label for="number">Телефон</label>
				<input type="text" class="form-control" id="number" name="tel" value="';
			echo  $row['tel'];
			echo '">
			</div>
			<div class="form-group">
				<label for="email">Электронная почта</label>
				<input type="text" class="form-control" id="email" name="email" value="';
			echo  $row['email'];
			echo '">
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<div class="col">
					<label>Номер договора</label>
					<input type="text" class="form-control" name="contract" value="';
			echo  $row['contract_number'];
			echo '">
				</div>
				<div class="col">
					<label>Заработная плата (в рублях)</label>
					<input type="text" class="form-control" name="salary" value="';
			echo  $row['salary'];
			echo '">
				</div>
			</div>';
       }
			$result->free();
		}
		
		echo '<a href="workers.php"><button type="button" class="btn btn-info">Назад</button></a>';
        echo '<button type="submit" class="btn btn-success">Сохранить</button>';
        echo '<a href="?del_id='.$f.'"><button type="button" class="btn btn-danger">Удалить</button></a>';
		
		if (isset($_GET['del_id'])) {
			$sql = mysqli_query($link, "DELETE FROM `PISworkers` WHERE `ID` = {$_GET['del_id']}");
			if ($sql) {
			  echo "<p style='padding-top:20px; font-size:20pt;'>Сотрудник удален</p>";
			} else {
			  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
			}
		}
	?>
    </form>
</body>
</html>