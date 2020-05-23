<?php
		$f=$_GET['F'];

		$name = $_POST['name'];
		$quantity_yes = $_POST['quantity_yes'];
		$quantity_need = $_POST['quantity_need'];
  
		$name = htmlspecialchars($name);
		$quantity_yes = htmlspecialchars($quantity_yes);
		$quantity_need = htmlspecialchars($quantity_need);
  
  
		$host = 'std-mysql'; 
		$database = 'std_234'; 
		$user = 'std_234'; 
		$password = 'popygai18'; 
		
		$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		
		
		$sql = mysqli_query($link, 'UPDATE PISmaterials
			SET name_material="'.$name.'", quantity_yes="'.$quantity_yes.'", quantity_need="'.$quantity_need.'"
			WHERE id ='.$f.'');
			

		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>