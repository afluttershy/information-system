<?php
		$f=$_GET['F'];

		$fio = $_POST['fio'];
		$date = $_POST['date'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];

  
		$fio = htmlspecialchars($fio);
		$date = htmlspecialchars($date);
		$tel = htmlspecialchars($tel);
		$email = htmlspecialchars($email);

  
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		
		$sql = mysqli_query($link, 'UPDATE PISclients
			SET fio_client="'.$fio.'", birth_date="'.$date.'", tel="'.$tel.'", email="'.$email.'"
			WHERE id ='.$f.'');
			

		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>