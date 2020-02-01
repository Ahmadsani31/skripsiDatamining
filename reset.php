
<?php
include "connection.php";
require_once "reload.php";
if (isset($_POST['kmeans'])) {


mysqli_query($server, "DELETE FROM new_iterasi") or die (mysqli_error($server));

mysqli_query($server, "DELETE FROM next_iterasi") or die (mysqli_error($server));

echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=datamining_tampil'>";
	
}



?>