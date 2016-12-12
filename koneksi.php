<?php 
$host = "localhost"; 
$user = "hero"; 
$pass = ""; 
$db = "aaa"; 
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); 
mysql_select_db($db); 
/*$sql = "SELECT * FROM `tabel`";
$query = mysql_query($sql);*/
?>
