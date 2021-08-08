<?php
	include 'conn.php';
	if (!isset($_SESSION)) {
		session_start();	
	}
	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index');
	}

	$sql = "SELECT * FROM tb_admin WHERE ID_Admin = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();

	
?>