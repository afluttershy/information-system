<?php
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
		
		
		if(($name!="") && ($quantity_yes!="") && ($quantity_need!="")){
		mysqli_query($link, "INSERT INTO `PISmaterials` (`name_material`, `quantity_yes`, `quantity_need`) VALUES ('$name', '$quantity_yes', '$quantity_need')");
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);

?>