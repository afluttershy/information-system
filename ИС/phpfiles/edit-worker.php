<?php
		$f=$_GET['F'];

		$fio = $_POST['fio'];
		$date = $_POST['date'];
		$series = $_POST['series'];
		$number = $_POST['number'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$contract = $_POST['contract'];
		$salary = $_POST['salary'];
  
  
		$fio = htmlspecialchars($fio);
		$date = htmlspecialchars($date);
		$series = htmlspecialchars($series);
		$number = htmlspecialchars($number);
		$tel = htmlspecialchars($tel);
		$email = htmlspecialchars($email);
		$contract = htmlspecialchars($contract);
		$salary = htmlspecialchars($salary);
  
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		
		$sql = mysqli_query($link, 'UPDATE PISworkers
			SET fio_worker="'.$fio.'", birth_date="'.$date.'", passport_series="'.$series.'", passport_number="'.$number.'", tel = "'.$tel.'", email="'.$email.'", contract_number="'.$contract.'", salary = "'.$salary.'" 
			WHERE id ='.$f.'');
			

	
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>