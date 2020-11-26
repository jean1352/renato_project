<?php
	session_start();
	if(!isset($_SESSION['user_id_'])){
		if(isset($is_page)){
			if($is_page){
				header('Location:login.php');
			}else{
				die('{"error":true,"error_info":"SESSION NOT FOUND","error_number":0}');
			}
		}else{
			die('{"error":true,"error_info":"SESSION NOT FOUND","error_number":0}');
		}
	}
	include 'db_config.php';
	$con = mysqli_connect($SERVER,$DB_USER,$PASS,$DB_NAME)or die('{"error":true,"error_info":"Imposible to connect with database","error_number":4}');
?>