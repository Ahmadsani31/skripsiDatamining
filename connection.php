<?php

date_default_timezone_set("Asia/Jakarta");
date("Y-m-d H:i:s", mktime(date("H")+1, date("i"), date("s"), date("m"), date("d"), date("Y")));
/* LOCAL DATABASE CONNECTION config */
// database constant
// change below setting according to your database configuration
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_datamining"; //nama database defautl
$server = mysqli_connect($dbhost,$dbuser,$dbpass);

if($server){
	$condb = mysqli_select_db($server, $dbname) or die('<blockquote><details><summary> Error Informations!</summary><p>Database <b>'.$dbname.'</b> tidak ditemukan</p><p><ol><li>Cek `database` pada <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a></li><li>Cek konfigurasi <b>$dbname</b> pada file <b>config.php</b></li><li>Import file.SQL database</li></ol></p><p></p><p></p><p>&nbsp;</p>
		</details><details><summary> Lihat PhpMyadmin</summary><object width="100%" height="600px" data="http://localhost/phpmyadmin/"></object></details></blockquote>');
	if (! $condb){
		echo "Database <b>$dbname</b> tidak ditemukan!";	
	}
}else{ echo "Server not Connected"; }

$Liconnect = $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($Liconnect->connect_error) {
	die("Connection error: " . $Liconnect->connect_error);
}

?>