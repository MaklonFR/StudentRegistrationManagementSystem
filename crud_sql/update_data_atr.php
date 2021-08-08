<?php
//print_r($_POST);
 include '../includes/timezone.php';
 include '../includes/conn.php';

//$jj     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi'));
//$kk     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=1'));
$ll     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=2'));
//$mm     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=3'));
//$nn     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_registrasi WHERE ID_Jurusan=4'));
//$oo     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi WHERE JK="Laki-Laki"'));
//$pp     = mysqli_fetch_array(mysqli_query($conn,'SELECT COUNT(*) AS total FROM tb_pribadi WHERE JK="Perempuan"'));

$data=$ll['total'];
echo $data ;
?>