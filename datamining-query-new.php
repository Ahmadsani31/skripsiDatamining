<?php
include "connection.php";
require_once "reload.php";

        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
        $newC1= count($tot);



        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
       } 
       $newC2= count($tot);
       

        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
       $newC3= count($tot);
       

        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
       $newC4= count($tot);
       


        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
        $nextC1= count($tot);
       
  
        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
       $nextC2= count($tot);
       
    
        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        } 
       $nextC3= count($tot);
       
    
        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row[7];     
        }
       $nextC4= count($tot);
       



if ($newC1 == $nextC1 & $newC2 == $nextC2 & $newC3 == $nextC3 & $newC4 == $nextC4) { 

echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=datamining_tampil'>";

}else{  

       $sql11 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  new_iterasi b where a.kelompok=b.kelompok and b.keterangan='C1'  order by id_new asc ");
$row11 = mysqli_fetch_array($sql11); 

      $sql12 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  new_iterasi b where a.kelompok=b.kelompok and b.keterangan='C2'  order by id_new asc ");
$row12 = mysqli_fetch_array($sql12); 

      $sql13 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  new_iterasi b where a.kelompok=b.kelompok and b.keterangan='C3'  order by id_new asc ");
$row13 = mysqli_fetch_array($sql13); 

      $sql14 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  new_iterasi b where a.kelompok=b.kelompok and b.keterangan='C4'  order by id_new asc ");
$row14 = mysqli_fetch_array($sql14); 

$sqlNo = mysqli_query($server, "SELECT * from new_iterasi"); 
        $rowNo = mysqli_fetch_array($sqlNo);

$number  = $rowNo['data'] + 1;

$var11  = number_format($row11['pm10'],6,".",".");
$var12  = number_format($row11['so2'],6,".",".");
$var13  = number_format($row11['co'],6,".",".");
$var14  = number_format($row11['o3'],6,".",".");
$var15  = number_format($row11['no'],6,".",".");
$var16  = number_format($row11['ispu'],6,".",".");

$var21  = number_format($row12['pm10'],6,".",".");
$var22  = number_format($row12['so2'],6,".",".");
$var23  = number_format($row12['co'],6,".",".");
$var24  = number_format($row12['o3'],6,".",".");
$var25  = number_format($row12['no'],6,".",".");
$var26  = number_format($row12['ispu'],6,".",".");

$var31  = number_format($row13['pm10'],6,".",".");
$var32  = number_format($row13['so2'],6,".",".");
$var33  = number_format($row13['co'],6,".",".");
$var34  = number_format($row13['o3'],6,".",".");
$var35  = number_format($row13['no'],6,".",".");
$var36  = number_format($row13['ispu'],6,".",".");

$var41  = number_format($row14['pm10'],6,".",".");
$var42  = number_format($row14['so2'],6,".",".");
$var43  = number_format($row14['co'],6,".",".");
$var44  = number_format($row14['o3'],6,".",".");
$var45  = number_format($row14['no'],6,".",".");
$var46  = number_format($row14['ispu'],6,".",".");




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

          mysqli_query($server, "DELETE FROM next_iterasi where kelompok='".$row['kelompok']."'") or die (mysqli_error($server));
          mysqli_query($server, "insert into next_iterasi (tanggal, kelompok, data, c1, c2, c3, c4, keterangan) values ('".$row['tanggal']."','".$row['kelompok']."','$number','$C1','$C2','$C3','$C4','$cluster')") or die (mysqli_error($server));
}
    echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=datamining_query_next'>";     
}
      

    

?>