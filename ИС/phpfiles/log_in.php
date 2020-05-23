<?php
	$login=$_POST['login'];
	$password_log=$_POST['password'];
	$log_in=$_POST['log_in'];	
	
	$host = 'std-mysql'; 
	$database = 'std_234'; 
	$user = 'std_234'; 
	$password = 'popygai18'; 
	$access="";
		
	$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
		

	$query = "SELECT  * FROM PISauth WHERE login = '".$login."' AND password = ".$password_log."";

    if ($result = $link->query($query)) {
        while ($row = $result->fetch_assoc()) {
			$access=$row['access']; 
        }
        $result->free();
    }


	if ($access == 'director') {
		header('Location: ../director-menu.php');
        exit;
	} else if ($access == 'hr') {
		header('Location: ../hr-menu.php');
        exit;
	} else if ($access == 'manager') {
		header('Location: ../manager-menu.php');
        exit;
	} else if ($access == 'accountant') {
		header('Location: ../accountant-menu.php');
        exit;
	} else if ($access == 'supplier') {
		header('Location: ../supplier-menu.php');
        exit;
	} else if ($access == '') {
		header('Location: ../index.php');
        exit;
	}


	//if(isset($log_in)) { 
		//директор
		//if ($login == 'director' && $password == 'director') {
			//header('Location: ../director-menu.php');
            //exit;
		//hr
		//} else if ($login == 'hr' && $password == 'hr') {
			//header('Location: ../hr-menu.php');
            //exit;
		//менеджер
		//} else if ($login == 'manager' && $password == 'manager') {
			//header('Location: ../manager-menu.php');
            //exit;
		//бухгалтер
		//} else if ($login == 'accountant' && $password == 'accountant') {
			//header('Location: ../accountant-menu.php');
            //exit;
		//снабженец
		//} else if ($login == 'supplier' && $password == 'supplier') {
			//header('Location: ../supplier-menu.php');
            //exit;
		//} else {
			//header('Location: ../index.php');
            //exit;
		//}
	//}
	
?>