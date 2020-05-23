<?php
		$f=$_GET['F'];

		$request = $_POST['request'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		$price = $_POST['price'];
		$statuspayment = $_POST['statuspayment'];


		$request = htmlspecialchars($request);
		$date = htmlspecialchars($date);
		$status = htmlspecialchars($status);
		$price = htmlspecialchars($price);
		$statuspayment = htmlspecialchars($statuspayment);
  
  
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		
		$sql = mysqli_query($link, 'UPDATE PISorders
			SET id_request="'.$request.'", date="'.$date.'", status="'.$status.'", amount_payment="'.$price.'", status_payment = "'.$statuspayment.'" 
			WHERE id ='.$f.'');
			

		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>