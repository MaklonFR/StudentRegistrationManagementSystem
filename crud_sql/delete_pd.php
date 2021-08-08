<?php
include '../includes/session_admin.php';
      $id   = $_POST['ids'];
		
	  $sql1 = "DELETE FROM tb_pribadi WHERE ID_Siswa = '$id'"; 
      $sql2 = "DELETE FROM tb_kontak WHERE ID_Siswa = '$id'";  
      $sql3 = "DELETE FROM tb_registrasi WHERE ID_Siswa = '$id'"; 
      $sql4 = "DELETE FROM tb_ayah WHERE ID_Siswa = '$id'"; 
      $sql5 = "DELETE FROM tb_ibu WHERE ID_Siswa = '$id'"; 

      if( ($conn->query($sql1)==1) && ($conn->query($sql2)==1) && ($conn->query($sql3)==1) && ($conn->query($sql4)==1) && ($conn->query($sql5)==1)  )
            {
             $data = "OK";
             echo $data;
		}
		else{
            $data = "ERROR";
            echo $data;
        }

?>