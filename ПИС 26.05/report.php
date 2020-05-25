<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Формирование отчетов</title>
</head>
<body class="body report">
    <main class="menu-manager">
    
        
        <?php
			$r=$_GET['R'];
			
			$host = 'std-mysql'; 
			$database = 'std_234'; 
			$user = 'std_234'; 
			$password = 'popygai18'; 
			$access="";
				
			$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
			
			
			if ($r == 'request') {
				$query = "SELECT  * FROM PISrequests";
				echo '<h1>Отчет по заявкам</h1>';
				if ($result = $link->query($query)) {
				while ($row = $result->fetch_assoc()) {
						
						echo '<div style="margin-top: 0px; margin-bottom: 10px;">';
						echo 'ID: ';
						echo  $row['id'];
						echo '. Имя клиента: ';
						echo  $row['name_client'];
						echo '. Тип сигнализации: ';
						echo  $row['type'];
						echo '. Материалы: ';
						echo  $row['material'];
						echo '. Сотрудник: ';
						echo  $row['worker'];
						echo '. Статус заявки: ';
						echo  $row['status'];
						echo '.</div>';
				}
				$result->free();
			}
			} else if ($r == 'order') {
				$query = "SELECT  * FROM PISorders";
				echo '<h1>Отчет по заказам</h1>';
				if ($result = $link->query($query)) {
				while ($row = $result->fetch_assoc()) {
						
						echo '<div style="margin-top: 0px; margin-bottom: 10px;">';
						echo 'ID: ';
						echo  $row['id'];
						echo '. ID завки: ';
						echo  $row['id_request'];
						echo '. Дата выполения работ: ';
						echo  $row['date'];
						echo '. Сумма к оплате: ';
						echo  $row['amount_payment'];
						echo '. Статус оплаты: ';
						echo  $row['status_payment'];
						echo '.</div>';
				}
				$result->free();
			}
			} else if ($r == 'client') {
				$query = "SELECT  * FROM PISclients";
				echo '<h1>Отчет по клиентам</h1>';
				if ($result = $link->query($query)) {
				while ($row = $result->fetch_assoc()) {
						
						echo '<div style="margin-top: 0px; margin-bottom: 10px;">';
						echo 'ID: ';
						echo  $row['id'];
						echo '. Имя клиента: ';
						echo  $row['fio_client'];
						echo '. Дата рождения: ';
						echo  $row['birth_date'];
						echo '. Телефон: ';
						echo  $row['tel'];
						echo '. Почта: ';
						echo  $row['email'];
						echo '.</div>';
				}
				$result->free();
			}
			} else if ($r == 'worker') {
				$query = "SELECT  * FROM PISworkers";
				echo '<h1>Отчет по сотрудникам</h1>';
				if ($result = $link->query($query)) {
				while ($row = $result->fetch_assoc()) {
						
						echo '<div style="margin-top: 0px; margin-bottom: 10px;">';
						echo 'ID: ';
						echo  $row['id'];
						echo '. Имя сотрудника: ';
						echo  $row['fio_worker'];
						echo '. Дата рождения: ';
						echo  $row['birth_date'];
						echo '. Серия паспорта: ';
						echo  $row['passport_series'];
						echo '. Номер паспорта: ';
						echo  $row['passport_number'];
						echo '. Телефон: ';
						echo  $row['tel'];
						echo '. Почта: ';
						echo  $row['email'];
						echo '. Номер договора: ';
						echo  $row['contract_number'];
						echo '. Зарплата: ';
						echo  $row['salary'];
						echo '.</div>';
				}
				$result->free();
			}
			} else if ($r == 'store') {
				$query = "SELECT  * FROM PISmaterials";
				echo '<h1>Отчет по материалам (склад)</h1>';
				if ($result = $link->query($query)) {
				while ($row = $result->fetch_assoc()) {
						
						echo '<div style="margin-top: 0px; margin-bottom: 10px;">';
						echo 'ID: ';
						echo  $row['id'];
						echo '. Название: ';
						echo  $row['name_material'];
						echo '. Количество на складе: ';
						echo  $row['quantity_yes'];
						echo '. Необходимое количество: ';
						echo  $row['quantity_need'];
						echo '.</div>';
				}
				$result->free();
			}
			}
			

			
		?>

    </main>
</body>
</html>