<?php
require_once "reload.php";
include "connection.php";

mysqli_query($server, "DELETE FROM prediksi_jst where prediksi like '%pengujian%'") or die (mysqli_error($server));

mysqli_query($server, "DELETE FROM hasil_prediksi_jst where prediksi like '%pengujian%'") or die (mysqli_error($server));

echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=jst_tampil_prediksi_pengujian'>";
	



?>