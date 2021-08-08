<?php
//print_r($_POST);
 include '../includes/timezone.php';
 include '../includes/conn.php';

    $add_nama               = $_POST['add_nama'];
    $add_jk                 = $_POST['add_jk'];
    $add_nisn               = $_POST['add_nisn'];
    $add_tempat             = $_POST['add_tempat'];
    $add_tanggal            = $_POST['add_tanggal'];
    $add_nik                = $_POST['add_nik'];
    $add_agama              = $_POST['add_agama'];

    $add_jalan               = $_POST['add_jalan'];
    $add_kel                 = $_POST['add_desa'];
    $add_kec                 = $_POST['add_kec'];
    $add_kab                 = $_POST['add_kab'];
    $add_prov                = $_POST['add_prov'];
    $add_kp                  = $_POST['add_kp'];

    $add_email               = $_POST['add_email'];
    $add_fb                  = $_POST['add_fb'];
    $add_note                = $_POST['add_note'];
    $add_sklh                = $_POST['add_sklh'];
    $add_tlulus              = $_POST['add_tlulus'];
    $add_jur                 = $_POST['add_jur'];

    $add_ayah               = $_POST['add_ayah'];
    $add_kerja_ayah         = $_POST['add_kerja_ayah'];
    $add_ibu                = $_POST['add_ibu'];
    $add_kerja_ibu          = $_POST['add_kerja_ibu'];
    $add_kk                 = $_POST['add_kk'];
    $add_noortu             = $_POST['add_noortu'];

    $today = date('Y-m-d h:i:sa');

    $sql = "INSERT INTO tb_pribadi 
                        (
                            Nama, JK, NISN, Tempat_Lahir, Tanggal_Lahir, NIK, Agama, Alamat, Kel, Kec, Kota_Kab, Kode_Pos, wu_pribadi
                        ) 
			        VALUES 
                        (
                            '$add_nama', '$add_jk', '$add_nisn', '$add_tempat', '$add_tanggal','$add_nik','$add_agama',
                            '$add_jalan', '$add_kel', '$add_kec', '$add_kab', '$add_kp', '$today'
                        )";	
					
            if($conn->query($sql) == 1)
            {
             $data = "OK";
             echo $data;               
			}
			else
			{
			 $data = "ERROR";
			 echo $data;
			}

            //PANGGIL ID SISWA    
            $sql_id="SELECT ID_Siswa From tb_pribadi WHERE Nama='$add_nama'";
	        $query = $conn->query($sql_id);
	        $hasil = $query->fetch_assoc();

            $idsiswa=$hasil['ID_Siswa'];
            $nodaf= "SMKN1KUWUS/PPDB/2021-".$idsiswa;

            $no_sql  = "UPDATE tb_pribadi SET no_daftar  = '$nodaf' WHERE ID_Siswa = '$idsiswa'";
	
			if (($conn->query($no_sql) == 1)) {
			}

            $sql1 = "INSERT INTO tb_kontak 
            (
                Tel_Rumah, No_HP, Email_Siswa, Facebook, wu_kontak, ID_Siswa
            ) 
            VALUES 
            (
                '$add_noortu', '$add_note', '$add_email', '$add_fb', '$today', '$idsiswa'
            )";	

            $sql2 = "INSERT INTO tb_registrasi
            (
                Asal_Sekolah, Tahun_Lulus, ID_Jurusan, wu_registrasi, ID_Siswa
            ) 
            VALUES 
            (
                '$add_sklh', '$add_tlulus', '$add_jur', '$today', '$idsiswa'
            )";	

$sql3 = "INSERT INTO tb_ayah
(
    Ayah, Pekerjaan, No_KK, wu_ayah, ID_SIswa
) 
VALUES 
(
    '$add_ayah', '$add_kerja_ayah', '$add_kk', '$today', '$idsiswa'
)";	

$sql4 = "INSERT INTO tb_ibu
(
    Ibu, Pekerjaan_Ibu, wu_ibu, ID_SIswa
) 
VALUES 
(
    '$add_ibu', '$add_kerja_ibu', '$today', '$idsiswa'
)";	
        
        if (($conn->query($sql1) == 1) && ($conn->query($sql2) == 1) && ($conn->query($sql3) == 1) && ($conn->query($sql4) == 1))
        {
            $data = "OK";
            echo $data;               
        }
        else
        {
            $data = "ERROR";
            echo $data; 
        }

?>