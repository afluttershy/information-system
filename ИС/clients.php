<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Список клиентов</title></head>
<body class="body">
    <div class="list-clients">
		<?php 
			$p=$_GET['P'];
					
			if ($p == 'dir') {
				echo '<a href="director-menu.php"><button type="button" class="btn btn-info">Назад</button></a>';
			} else if ($p == 'hr') {
				echo '<a href="hr-menu.php"><button type="button" class="btn btn-info">Назад</button></a>';
			} else if ($p == 'm') {
				echo '<a href="manager-menu.php"><button type="button" class="btn btn-info">Назад</button></a>';
			} else if ($p == 'acc') {
				echo '<a href="accountant-menu.php"><button type="button" class="btn btn-info">Назад</button></a>';
			} else if ($p == 'sup') {
				echo '<a href="supplier-menu.php"><button type="button" class="btn btn-info">Назад</button></a>';
			}
					
		
		?>
        <div class="list-group">
            <h1>Список клиентов</h1>
            <form class="form-inline">
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Поиск</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Имя клиента">
                </div>
              
                <button type="submit" class="btn btn-primary mb-2">Искать</button>
            </form>
            <a href="new-client.php"><button type="button" class="addnewbtn btn btn-outline-success">Добавить нового клиента</button></a>
           	<?php
				$host = 'std-mysql'; 
				$database = 'std_234'; 
				$user = 'std_234'; 
				$password = 'popygai18'; 
			
				$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
				
				$query = "SELECT * FROM PISclients";

				if ($result = $link->query($query)) {
					while ($row = $result->fetch_assoc()) {
						 echo '<a <a href="one-client.php?F='. $row['id'].'"><button type="button" class="list-group-item list-group-item-action">';
						 echo  $row['fio_client'];
						 echo '</button></a>';
					}
					$result->free();
				}
				
			?>
        </div>
    </div>
</body>
</html>