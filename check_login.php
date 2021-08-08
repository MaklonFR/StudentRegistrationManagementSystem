<?php
	//print_r($_POST);
	include 'includes/conn.php';
	if (!isset($_SESSION)) {

		session_start();
		
	}
	include 'includes/conn.php';
    	$email   	 = $_POST['user'];
		$password    = $_POST['pass'];

		$sql = "SELECT * FROM tb_admin WHERE (( Email = '$email') AND (Password='$password'))";
		$query = $conn->query($sql);

		    if($query->num_rows < 1){	
			$_SESSION['error'] = 'Cannot find account with the username';

		} 
		else
		{
				$row = $query->fetch_assoc();
				echo"OK";
				$_SESSION['admin'] = $row['ID_Admin'];
		
		}


	

?>