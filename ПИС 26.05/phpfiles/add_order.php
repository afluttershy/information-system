<?php
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
		
		
		if(($request!="") && ($date!="") && ($status!="") && ($price!="") && ($statuspayment!="")){
		mysqli_query($link, "INSERT INTO `PISorders` (`id_request`, `date`, `status`, `amount_payment`, `status_payment`) VALUES ('$request', '$date', '$status', '$price', '$statuspayment')");
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);
?>