<?php
	$conn = new mysqli('localhost', 'root', '', 'app_siswa');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

/*define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'juve2020');
define('DB_NAME','db_dispora_kupang');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
?>