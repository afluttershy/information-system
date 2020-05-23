<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Просмотр и редактирование материала</title>
</head>
<body class="body">
   <?php
		$f=$_GET['F'];
		
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		$query = "SELECT * FROM PISmaterials WHERE id =".$f."";
		
		echo '<form class="add-form" method="POST" action="phpfiles/edit-material.php?F='.$f.'">';
		
		if ($result = $link->query($query)) {
			while ($row = $result->fetch_assoc()) {
		
			echo '<h1>Просмотр и редактирование материала #'.$f.'</h1>';
			
			echo '<div class="form-group">
				<label for="name">Наименование</label>
				<input required type="text" class="form-control" id="name" name="name" value="';
			echo $row['name_material'];
			echo '">
			</div>
			<div class="row" style="margin-bottom: 20px;">
				<div class="col">
					<label>Количество на складе</label>
					<input required type="text" class="form-control" name="quantity_yes" value="';
			echo $row['quantity_yes'];
			echo '">
				</div>
				<div class="col">
					<label>Недостающее количество на складе</label>
					<input required type="text" class="form-control" name="quantity_need" value="';
			echo $row['quantity_need'];		
			echo '">
				</div>
			</div>';
				
			
				}
			$result->free();
		}
        		
		echo '<a href="store.php"><button type="button" class="btn btn-info">Назад</button></a>';
        echo '<button type="submit" class="btn btn-success">Сохранить</button>';
        echo '<a href="?del_id='.$f.'"><button type="button" class="btn btn-danger">Удалить</button></a>';
		
		if (isset($_GET['del_id'])) {
			$sql = mysqli_query($link, "DELETE FROM `PISmaterials` WHERE `ID` = {$_GET['del_id']}");
			if ($sql) {
			  echo "<p style='padding-top:20px; font-size:20pt;'>Материал удален</p>";
			} else {
			  echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
			}
		}
	?>

    </form>
</body>
</html>