<?php
require_once "reload.php";

if (isset($_POST['submit'])) {
 
$number  = trim($_POST['number']);

$var11  = trim($_POST['x11']);
$var12  = trim($_POST['x12']);
$var13  = trim($_POST['x13']);
$var14  = trim($_POST['x14']);
$var15  = trim($_POST['x15']);
$var16  = trim($_POST['x16']);

$var21  = trim($_POST['x21']);
$var22  = trim($_POST['x22']);
$var23  = trim($_POST['x23']);
$var24  = trim($_POST['x24']);
$var25  = trim($_POST['x25']);
$var26  = trim($_POST['x26']);

$var31  = trim($_POST['x31']);
$var32  = trim($_POST['x32']);
$var33  = trim($_POST['x33']);
$var34  = trim($_POST['x34']);
$var35  = trim($_POST['x35']);
$var36  = trim($_POST['x36']);

$var41  = trim($_POST['x41']);
$var42  = trim($_POST['x42']);
$var43  = trim($_POST['x43']);
$var44  = trim($_POST['x44']);
$var45  = trim($_POST['x45']);
$var46  = trim($_POST['x46']);


     // mysql_query("DELETE FROM cluster ")  or die (mysql_error());
      $sql = mysqli_query($server, "SELECT * FROM data order by id_d asc ") or die (mysqli_error($server));
      while($row = mysqli_fetch_array($sql)) { 

          $pusat = ($row['pm10'] + $row['so2'] + $row['co'] + $row['no'] + $row['ispu'])/2;   
        
$C1=sqrt((($row['pm10']-$var11)*($row['pm10']-$var11)) + 
       (($row['so2']-$var12)*($row['so2']-$var12)) + 
       (($row['co']-$var13)*($row['co']-$var13))  +
       (($row['o3']-$var14)*($row['o3']-$var14))  +
       (($row['no']-$var15)*($row['no']-$var15)) +
       (($row['ispu']-$var16)*($row['ispu']-$var16)));

$C2=sqrt((($row['pm10']-$var21)*($row['pm10']-$var21)) + 
       (($row['so2']-$var22)*($row['so2']-$var22)) + 
       (($row['co']-$var23)*($row['co']-$var23))  +
       (($row['o3']-$var24)*($row['o3']-$var24))  +
       (($row['no']-$var25)*($row['no']-$var25)) +
       (($row['ispu']-$var26)*($row['ispu']-$var26)));

$C3=sqrt((($row['pm10']-$var31)*($row['pm10']-$var31)) + 
       (($row['so2']-$var32)*($row['so2']-$var32)) + 
       (($row['co']-$var33)*($row['co']-$var33))  +
       (($row['o3']-$var34)*($row['o3']-$var34))  +
       (($row['no']-$var35)*($row['no']-$var35)) +
       (($row['ispu']-$var36)*($row['ispu']-$var36)));

$C4=sqrt((($row['pm10']-$var41)*($row['pm10']-$var41)) + 
       (($row['so2']-$var42)*($row['so2']-$var42)) + 
       (($row['co']-$var43)*($row['co']-$var43))  +
       (($row['o3']-$var44)*($row['o3']-$var44))  +
       (($row['no']-$var45)*($row['no']-$var45)) +
       (($row['ispu']-$var46)*($row['ispu']-$var46)));
  
          
          $selisih1=abs($pusat - $C1);    
          $selisih2=abs($pusat - $C2);    
          $selisih3=abs($pusat - $C3);  
          $selisih4=abs($pusat - $C4);

        
        
          
          if($C1<$C2 and $C1<$C3 and $C1<$C4){
            $cluster="C1";            
          }elseif($C2<$C1 and $C2<$C3 and $C2<$C4){
            $cluster="C2";            
          }elseif($C3<$C1 and $C3<$C2 and $C3<$C4){
            $cluster="C3";            
          }elseif($C4<$C1 and $C4<$C2 and $C4<$C3){
            $cluster="C4";            
          }

          mysqli_query($server, "DELETE FROM new_iterasi where kelompok='".$row['kelompok']."'")  or die (mysqli_error($server));
          mysqli_query($server, "insert into new_iterasi (tanggal, kelompok, data, c1, c2, c3, c4, keterangan) values ('".$row['tanggal']."','".$row['kelompok']."','$number','$C1','$C2','$C3','$C4','$cluster')") or die (mysqli_error($server));
}
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=datamining_query_new'>";
   

}

?>