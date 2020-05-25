<?php
		$f=$_GET['F'];

		
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
		
		
		$sql = mysqli_query($link, 'UPDATE PISrequests
			SET name_client="'.$client.'", type="'.$type.'", material="'.$material.'", worker="'.$worker.'", status = "'.$status.'" 
			WHERE id ='.$f.'');
			

		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>