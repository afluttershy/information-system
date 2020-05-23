<?php
		$client = $_POST['client'];
		$type = $_POST['type'];
		$material = $_POST['material'];
		$worker = $_POST['worker'];
		$status = $_POST['status'];
  
  
		$client = htmlspecialchars($client);
		$type = htmlspecialchars($type);
		$material = htmlspecialchars($material);
		$worker = htmlspecialchars($worker);
		$status = htmlspecialchars($status);
  
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		
		if(($client!="") && ($type!="") && ($material!="") && ($worker!="") && ($status!="")){
		mysqli_query($link, "INSERT INTO `PISrequests` (`name_client`, `type`, `material`, `worker`, `status`) VALUES ('$client', '$type', '$material', '$worker', '$status')");
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>