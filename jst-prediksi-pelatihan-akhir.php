
<?php
require_once "reload.php";
include "connection.php";

$id_hasil = $_GET['id_prediksi'];

$sqlPre = mysqli_query($server, "SELECT * from hasil_prediksi_jst where id_hasil = '$id_hasil' ") or die (mysqli_error($server));
$rowPre = mysqli_fetch_array($sqlPre);
$id_pre = $rowPre['id_pre'];
$id_d = $rowPre['id_data']; 

$sql = mysqli_query($server, "SELECT * from prediksi_jst where id_pre = '$id_pre' ") or die (mysqli_error($server));
$row = mysqli_fetch_array($sql);

$sqldata = mysqli_query($server, "SELECT * from data where id_d = '$id_d' ") or die (mysqli_error($server));
$rowdata = mysqli_fetch_array($sqldata);

$pm10 = $rowdata['pm10'];
$so2 = $rowdata['so2'];
$co = $rowdata['co'];
$o3 = $rowdata['o3'];
$no = $rowdata['no'];
$ispu = $rowdata['ispu'];

  $x1 = $row['x1']; 
  $x2 = $row['x2']; 
  $x3 = $row['x3']; 
  $x4 = $row['x4'];
  $x5 = $row['x5'];
  $x6 = $row['x6']; 
  $x7 = $row['x7']; 
  $x8 = $row['x8']; 
  $x9 = $row['x9']; 
  $x10 = $row['x10']; 
  $x11 = $row['x11']; 
  
  $xt = $row['target']; 

 $z1_1 = 4.6132;
 $z1_2 = -0.2972;
 $z1_3 = 4.4342;
 $z1_4 = -0.6185;
 $z1_5 = -3.409;
 $z1_6 = -4.3705;
 $z1_7 = 0.008;
 $z1_8 = 3.6695;
 $z1_9 = 0.0722;
 $z1_10 = 0.0722;
 $z1_11 = 0.008;

 $z2_1 = -2.7546;
 $z2_2 = -5.2292;
 $z2_3 = 2.0619;
 $z2_4 = 4.8512;
 $z2_5 = -3.4285;
 $z2_6 = 2.9875;
 $z2_7 = -0.0149;
 $z2_8 = 0.4179;
 $z2_9 = -0.1342;
 $z2_10 = -0.1342;
 $z2_11 = -0.0149;

 $z3_1 = 1.4563;
 $z3_2 = 3.2476;
 $z3_3 = -4.3967;
 $z3_4 = -5.0063;
 $z3_5 = -3.5689;
 $z3_6 = -0.482;
 $z3_7 = -0.0763;
 $z3_8 = -4.1633;
 $z3_9 = -0.687;
 $z3_10 = -0.687;
 $z3_11 = -0.0763;


 $z4_1 = -0.4601;
 $z4_2 = -0.0375;
 $z4_3 = -1.5376;
 $z4_4 = -2.1761;
 $z4_5 = 1.4909;
 $z4_6 = 7.691;
 $z4_7 = 0.0508;
 $z4_8 = 2.1397;
 $z4_9 = 0.4569;
 $z4_10 = 0.4569;
 $z4_11 = 0.0508;


 $z5_1 = 4.6847;
 $z5_2 = 1.3061;
 $z5_3 = 4.6568;
 $z5_4 = 3.9444;
 $z5_5 = -2.5856;
 $z5_6 = -0.2144;
 $z5_7 = 0.0007;
 $z5_8 = 3.8384;
 $z5_9 = 0.0061;
 $z5_10 = 0.0061;
 $z5_11 = 0.0007;


 $z6_1 = 2.4646;
 $z6_2 = 2.7085;
 $z6_3 = 3.8928;
 $z6_4 = -4.6595;
 $z6_5 = -3.069;
 $z6_6 = -0.8092;
 $z6_7 = -0.0217;
 $z6_8 = -4.7995;
 $z6_9 = -0.1952;
 $z6_10 = -0.1952;
 $z6_11 = -0.0217;


 $bz1 = -4.6915;
 $bz2 = 2.8177;
 $bz3 = 4.3117;
 $bz4 = -3.7312;
 $bz5 = -5.4597;
 $bz6 = 5.2248;

 $bo_y1 = 0.3131;
 $bo_y2 = 0.2762;
 $bo_y3 = 0.6496;
 $bo_y4 = 0.9375;
 $bo_y5 = 0.2224;
 $bo_y6 = 0.0068;

 $bias = -0.7215;


$znet1 = $bz1 + ($x1*$z1_1)+($x2*$z1_2)+($x3*$z1_3)+($x4*$z1_4)+($x5*$z1_5)+($x6*$z1_6)+($x7*$z1_7)+($x8*$z1_8)+($x9*$z1_9)+($x10*$z1_10)+($x11*$z1_11);
$hasilznet1  = number_format($znet1,6,".",".");

$znet2 = $bz2 + ($x1*$z2_1)+($x2*$z2_2)+($x3*$z2_3)+($x4*$z2_4)+($x5*$z2_5)+($x6*$z2_6)+($x7*$z2_7)+($x8*$z2_8)+($x9*$z2_9)+($x10*$z2_10)+($x11*$z2_11);
$hasilznet2  = number_format($znet2,6,".",".");

$znet3 = $bz3 + ($x1*$z3_1)+($x2*$z3_2)+($x3*$z3_3)+($x4*$z3_4)+($x5*$z3_5)+($x6*$z3_6)+($x7*$z3_7)+($x8*$z3_8)+($x9*$z3_9)+($x10*$z3_10)+($x11*$z3_11);
$hasilznet3  = number_format($znet3,6,".",".");

$znet4 = $bz4 + ($x1*$z4_1)+($x2*$z4_2)+($x3*$z4_3)+($x4*$z4_4)+($x5*$z4_5)+($x6*$z4_6)+($x7*$z4_7)+($x8*$z4_8)+($x9*$z4_9)+($x10*$z4_10)+($x11*$z4_11);
$hasilznet4  = number_format($znet4,6,".",".");

$znet5 = $bz5 + ($x1*$z5_1)+($x2*$z5_2)+($x3*$z5_3)+($x4*$z5_4)+($x5*$z5_5)+($x6*$z5_6)+($x7*$z5_7)+($x8*$z5_8)+($x9*$z5_9)+($x10*$z5_10)+($x11*$z5_11);
$hasilznet5  = number_format($znet5,6,".",".");

$znet6 = $bz6 + ($x1*$z6_1)+($x2*$z6_2)+($x3*$z6_3)+($x4*$z6_4)+($x5*$z6_5)+($x6*$z6_6)+($x7*$z6_7)+($x8*$z6_8)+($x9*$z6_9)+($x10*$z6_10)+($x11*$z6_11);
$hasilznet6  = number_format($znet6,6,".",".");

$zj1 = 1/(1+(EXP(-$znet1)));
$hasilzj1  = number_format($zj1,6,".",".");

$zj2 = 1/(1+(EXP(-$znet2)));
$hasilzj2  = number_format($zj2,6,".",".");

$zj3 = 1/(1+(EXP(-$znet3)));
$hasilzj3  = number_format($zj3,6,".",".");

$zj4 = 1/(1+(EXP(-$znet4)));
$hasilzj4  = number_format($zj4,6,".",".");

$zj5 = 1/(1+(EXP(-$znet5)));
$hasilzj5  = number_format($zj5,6,".",".");

$zj6 = 1/(1+(EXP(-$znet6)));
$hasilzj6  = number_format($zj6,6,".",".");

$yink = $bias + (($zj1*$bo_y1)+($zj2*$bo_y2)+($zj3*$bo_y3)+($zj4*$bo_y4)+($zj5*$bo_y5)+($zj6*$bo_y6)); 
$hasilyink  = number_format($yink,6,".",".");

$erro = $xt - $yink ; 
$hasilerro  = number_format($erro,6,".",".");

$yk=1/(1+(EXP(-$yink)));
$hasilyk  = number_format($yk,6,".",".");

$x_nilai = $hasilyink * (279.4-0);
$nilai = abs($x_nilai); 

  ?>

 <style type="text/css">
   
   #image { 
    height:80px; 
    width: 300px;
    background:url(img/rumus.jpg) no-repeat; 
    white-space:nowrap; 
    padding:0px; 
    margin : auto;
}
.tb-box {
  float: right;
}



 </style>

         <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">      
              <div class="form-panel">
                  <div class="col-md-3 pull-right">
                  <h4><?php echo date('l, d-m-Y');  ?></h4>
                  </div>
                <div class="box" style="margin: 50px 0px 80px 0px">
                  <h1 class="text-center">JARINGAN SYARAF TIRIUN</h1>
                  <h1 class="text-center"><u>BACKPROPOGATION</u></h1>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-9">
                  <h4 class=""><u>DATA PELATIHAN :</u></h4>
                  </div>
          
                  <table class="table table-bordered table-striped text-center mt" align="center" style="width: 800px">
                  <thead>
                    <tr>
                      <th class="text-center">PM10</th>
                      <th class="text-center">SO2</th>
                      <th class="text-center">CO</th>
                      <th class="text-center">O3</th>
                      <th class="text-center">NO</th>
                      <th class="text-center">ISPU</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $pm10; ?></td>
                      <td><?php echo $so2; ?></td>
                      <td><?php echo $co; ?></td>
                      <td><?php echo $o3; ?></td>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $ispu; ?></td>      
                    </tr>
                  </tbody>

<?php
if ($x7 == 0.1) {
  $bencana1 = "Ada";
}else {
  $bencana1 = "Tidak Ada";
}
if ($x8 == 0.1) {
  $bencana2 = "Ada";
}else {
  $bencana2 = "Tidak Ada";
}
if ($x9 == 0.1) {
  $bencana3 = "Ada";
}else {
  $bencana3 = "Tidak Ada";
}
if ($x10 == 0.1) {
  $bencana4 = "Ada";
}else {
  $bencana4 = "Tidak Ada";
}
if ($x11 == 0.1) {
  $bencana5 = "Ada";
}else {
  $bencana5 = "Tidak Ada";
}
?>

                  <thead>
                    <tr>
                      <th class="text-center">X1</th>
                      <th class="text-center">X2</th>
                      <th class="text-center">X3</th>
                      <th class="text-center">X4</th>
                      <th class="text-center">X5</th>
                      <th class="text-center">Target</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $bencana1; ?></td>
                      <td><?php echo $bencana2; ?></td>
                      <td><?php echo $bencana3; ?></td>
                      <td><?php echo $bencana4; ?></td>
                      <td><?php echo $bencana5; ?></td>
                      <td><?php echo $xt; ?></td>
                    </tr>
                  </tbody>
                </table>  
                </div>
          <strong><h3 align="center">HASIL NILAI</h3></strong>
                <table class="table table-bordered table-striped text-center mt">
                  <thead>
                    <tr>
                      <th class="text-center">Nilai Znet1</th>
                      <th class="text-center">Nilai Znet2</th>
                      <th class="text-center">Nilai Znet3</th>
                      <th class="text-center">Nilai Znet4</th>
                      <th class="text-center">Nilai Znet5</th>
                      <th class="text-center">Nilai Znet6</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $hasilznet1 ?></td>
                      <td><?php echo $hasilznet2 ?></td>
                      <td><?php echo $hasilznet3 ?></td>
                      <td><?php echo $hasilznet4 ?></td>
                      <td><?php echo $hasilznet5 ?></td>
                      <td><?php echo $hasilznet6 ?></td>      
                    </tr>
                  </tbody>
                   <thead>
                    <tr>
                      <th class="text-center">Nilai Zj1</th>
                      <th class="text-center">Nilai Zj2</th>
                      <th class="text-center">Nilai Zj3</th>
                      <th class="text-center">Nilai Zj4</th>
                      <th class="text-center">Nilai Zj5</th>
                      <th class="text-center">Nilai Zj6</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $hasilzj1 ?></td>
                      <td><?php echo $hasilzj2 ?></td>
                      <td><?php echo $hasilzj3 ?></td>
                      <td><?php echo $hasilzj4 ?></td>
                      <td><?php echo $hasilzj5 ?></td>
                      <td><?php echo $hasilzj6 ?></td>      
                    </tr>
                  </tbody>

                </table>   
                <div class="tb-box" style="width: 358px">
                <table class="table table-bordered table-striped text-center mt" >
                  <tbody >
                    <tr >
                      <th>Nilai Yink</th>
                      <td><span class="task-title-sp"><?php echo $hasilyink ?></span></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>                      
                      <th >Nilai Error</th>
                      <td><span class="task-title-sp"><?php echo $hasilerro ?></span></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <th >Nilai Yk</th>
                      <td><span class="task-title-sp"><?php echo $hasilyk ?></span></td> 
                    </tr>
                  </tbody>
                </table>         
              </div>
                 
            <div class="row box-fo">
              
              <div class="col-md-9">
                 <a href="?p=jst_tampil_prediksi_pelatihan_tranfor"><button type="button" class="btn btn-success">Kembali</button></a>
                <a href="printImplementasiPelatihan.php?id_prediksi=<?php echo $rowPre[id_pre]; ?>" target="_BLANK"><button type="button" class="btn btn-default">Print</button></a>
              </div>
              <div class="col-md-2 pull-right">
                <p>@CopyRights PutriMelati</p>
              </div>
            </div>
              </div>
            </div>

            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
          <!-- /col-lg-12 -->
        </div>