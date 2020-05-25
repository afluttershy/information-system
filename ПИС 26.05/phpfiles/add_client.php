<?php
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
		
		
		if(($fio!="") && ($date!="") && ($tel!="") && ($email!="")){
		mysqli_query($link, "INSERT INTO `PISclients` (`fio_client`, `birth_date`, `tel`, `email`) VALUES ('$fio', '$date', '$tel', '$email')");
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>