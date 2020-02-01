
<?php
include "reload.php";
//pelatihan
$sql = mysqli_query($server, "SELECT * FROM data limit 30,61") or die (mysql_error());
 while($row = mysqli_fetch_array($sql)) { 
   
$id_data = $row['id_d'];

$pm10 = $row['pm10'];
$so2 = $row['so2'];
$co = $row['co'];
$o3 = $row['o3'];
$no = $row['no'];
$ispu = $row['ispu'];

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

  $x7 =0.1;
  $x8 =0.9;
  $x9 =0.9;
  $x10 =0.9;
  $x111 =0.1;
  $target =$x16;

 mysqli_query($server, "insert into prediksi_jst (id_data, prediksi, x1, x2, x3, x4, x5, x6, x7, x8, x9, x10, x11, target) values ('$id_data','pengujian','$x11','$x12','$x13','$x14','$x15','$x16','$x7','$x8','$x9','$x10','$x111','$target')") or die (mysqli_error($server));

}
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=jst_tampil_prediksi_pengujian'>";



   ?>

