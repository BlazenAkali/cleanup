<?php 
	session_start();
	
	if ($_SESSION['logged'] == true){
		session_destroy();
		
		header("location:login.php?nav=2");
	}else{
		header("location:login.php?nav=2");
	}
?>