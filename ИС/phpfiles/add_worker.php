<?php
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
		
		
		if(($fio!="") && ($date!="") && ($series!="") && ($number!="") && ($tel!="") && ($email!="") && ($contract!="") && ($salary!="")){
		mysqli_query($link, "INSERT INTO `PISworkers` (`fio_worker`, `birth_date`, `passport_series`, `passport_number`, `tel`, `email`, `contract_number`, `salary`) VALUES ('$fio', '$date', '$series', '$number', '$tel', '$email', '$contract', '$salary')");
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);


?>