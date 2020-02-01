
<?php
include "reload.php";
//pelatihan
$sql = mysql_query("SELECT * FROM pelatihan ") or die (mysql_error());
      while($row = mysql_fetch_array($sql)) { 
   
$sqlcontoh = mysql_query("SELECT * FROM data where id_d=$row[data_id] ") or die (mysql_error());
$rowcontoh = mysql_fetch_array($sqlcontoh);

$id_data = $row['data_id'];

$pm10 = $rowcontoh['pm10'];
$so2 = $rowcontoh['so2'];
$co = $rowcontoh['co'];
$o3 = $rowcontoh['o3'];
$no = $rowcontoh['no'];
$ispu = $rowcontoh['ispu'];

$maxpm10 = 275.21;
$minpm10 = 30.92;

$maxso2 = 2.5639;
$minso2 = 0.5241;

$maxco = 279.4;
$minco = 81.1;

$maxo3 = 34.8;
$mino3 = 6;

$maxno = 0.102;
$minno = 0;

$maxispu = 225.21;
$minispu = 30.92;

  $x1=(0.8*($pm10-$minpm10)/($maxpm10-$minpm10))+0.1;
  $x11=number_format($x1,6);

  $x2=(0.8*($so2-$minso2)/($maxso2-$minso2))+0.1;
  $x12=number_format($x2,6);

  $x3=(0.8*($co-$minco)/($maxco-$minco))+0.1;
  $x13=number_format($x3,6);

  $x4=(0.8*($o3-$mino3)/($maxo3-$mino3))+0.1;
  $x14=number_format($x4,6);

  $x5=(0.8*($no-$minno)/($maxno-$minno))+0.1;
  $x15=number_format($x5,6);

  $x6=(0.8*($ispu-$minispu)/($maxispu-$minispu))+0.1;
  $x16=number_format($x6,6);

  $x1 =$row['x1'];
  $x2 =$row['x2'];
  $x3 =$row['x3'];
  $x4 =$row['x4'];
  $x5 =$row['x5'];
  $x6 =$x16;

 mysql_query("insert into pelatihan_jst values ('','$id_data','$x11','$x12','$x13','$x14','$x15','$x16','$x1','$x2','$x3','$x4','$x5','$x6')") or die (mysql_error());

}
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=jst_tampil_pelatihan_tranfor'>";



   ?>

