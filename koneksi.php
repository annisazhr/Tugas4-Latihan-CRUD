<?php
$koneksi=mysqli_connect("localhost","root","","program_sederhana");
//Check connection
if(mysqli_connect_errno()){
	echo "Koneksi database gagal:".mysql_error();
}
?>