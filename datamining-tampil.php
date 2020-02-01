<?php
       $sql11 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  next_iterasi b where a.kelompok=b.kelompok and b.keterangan='C1'  order by id_next asc ");
$row11 = mysqli_fetch_array($sql11); 

      $sql12 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  next_iterasi b where a.kelompok=b.kelompok and b.keterangan='C2'  order by id_next asc ");
$row12 = mysqli_fetch_array($sql12); 

      $sql13 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  next_iterasi b where a.kelompok=b.kelompok and b.keterangan='C3'  order by id_next asc ");
$row13 = mysqli_fetch_array($sql13); 

      $sql14 = mysqli_query($server, "SELECT avg(a.pm10) as pm10, avg(a.so2) as so2, avg(a.co) as co, avg(a.o3) as o3, avg(a.no) as no, avg(a.ispu) as ispu
       FROM data a,  next_iterasi b where a.kelompok=b.kelompok and b.keterangan='C4'  order by id_next asc ");
$row14 = mysqli_fetch_array($sql14); 

$sqlNew = mysqli_query($server, "SELECT * from new_iterasi "); 
        $rowNew = mysqli_fetch_array($sqlNew);
$sqlNext = mysqli_query($server, "SELECT * from next_iterasi "); 
        $rowNext = mysqli_fetch_array($sqlNext);

if ($rowNew['data'] > $rowNext['data']) {
  $data = $rowNew['data'];
}else {
  $data = $rowNext['data'];
}

$number =  1;

?>
      <h3><i class="fa fa-angle-right"></i> Proses K-Means DATAMINING</h3>  
      <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12 ">
            <section class="task-panel tasks-widget">
            <div class="content-panel">
            <div class="form-panel">
            <div class="row">
            <div class="col-md-10">
              <h4><i class="fa fa-angle-right"></i> Input Nilai Cluster</h4></div>
                <div class="col-md-2">
                   <form action="?p=reset" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                <div class="btn-from">
                  <button type="submit" name="kmeans" class="btn btn-from btn-danger">Reset Proses ITERASi</button>
                </div>
                </form> 
               </div>
            </div><br>
<?php if ($row11['pm10']>=1) { ?>
    <div class="alert alert-danger" role="alert">
      Data Iterasi Telah Di Temukan, Ada <?php echo $data; ?> ITERASI
    </div>
<?php }else{  ?>

<?php } ?>
              <form action="?p=datamining_query" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                <table class="table">
                  <tbody>
                    <tr>
                      <input type="hidden" name="number" class="form-control" value="<?php echo  $number ?>" >
  <?php if ($row11['pm10']) { ?>         
     
             <td class="col-md-1"><h4><strong>C1</strong></h4></td>
             <td><input type="text" name="x11" class="form-control" value="<?php echo  number_format($row11['pm10'],6,".",".")?>" ></td>
             <td><input type="text" name="x12" class="form-control" value="<?php echo  number_format($row11['so2'],6,".",".")?>" ></td>
             <td><input type="text" name="x13" class="form-control" value="<?php echo  number_format($row11['co'],6,".",".")?>" ></td>
             <td><input type="text" name="x14" class="form-control" value="<?php echo  number_format($row11['o3'],6,".",".")?>" ></td>
             <td><input type="text" name="x15" class="form-control" value="<?php echo  number_format($row11['no'],6,".",".")?>" ></td>
             <td><input type="text" name="x16" class="form-control" value="<?php echo  number_format($row11['ispu'],6,".",".")?>" ></td>
  <?php }else{ ?>
             <td class="col-md-1"><h4><strong>C1</strong></h4></td>
             <td><input type="text" name="x11" class="form-control"  ></td>
             <td><input type="text" name="x12" class="form-control"  ></td>
             <td><input type="text" name="x13" class="form-control"  ></td>
             <td><input type="text" name="x14" class="form-control"  ></td>
             <td><input type="text" name="x15" class="form-control"  ></td>
             <td><input type="text" name="x16" class="form-control"  ></td>
  <?php } ?>
             
                    </tr>
                    <tr> 

  <?php if ($row11['pm10']) { ?>     
             <td class="col-md-1"><h4><strong>C2</strong></h4></td>
             <td><input type="text" name="x21" class="form-control" value="<?php echo  number_format($row12['pm10'],6,".",".")?>" ></td>
             <td><input type="text" name="x22" class="form-control" value="<?php echo  number_format($row12['so2'],6,".",".")?>" ></td>
             <td><input type="text" name="x23" class="form-control" value="<?php echo  number_format($row12['co'],6,".",".")?>" ></td>
             <td><input type="text" name="x24" class="form-control" value="<?php echo  number_format($row12['o3'],6,".",".")?>" ></td>
             <td><input type="text" name="x25" class="form-control" value="<?php echo  number_format($row12['no'],6,".",".")?>" ></td>
             <td><input type="text" name="x26" class="form-control" value="<?php echo  number_format($row12['ispu'],6,".",".")?>" ></td>
  <?php }else{ ?>
             <td class="col-md-1"><h4><strong>C2</strong></h4></td>
             <td><input type="text" name="x21" class="form-control" ></td>
             <td><input type="text" name="x22" class="form-control" ></td>
             <td><input type="text" name="x23" class="form-control" ></td>
             <td><input type="text" name="x24" class="form-control" ></td>
             <td><input type="text" name="x25" class="form-control" ></td>
             <td><input type="text" name="x26" class="form-control" ></td>
  <?php } ?>           
     
                    </tr>
                    <tr>
  <?php if ($row11['pm10']) { ?>  
             <td class="col-md-1"><h4><strong>C3</strong></h4></td>
             <td><input type="text" name="x31" class="form-control" value="<?php echo  number_format($row13['pm10'],6,".",".")?>" ></td>
             <td><input type="text" name="x32" class="form-control" value="<?php echo  number_format($row13['so2'],6,".",".")?>" ></td>
             <td><input type="text" name="x33" class="form-control" value="<?php echo  number_format($row13['co'],6,".",".")?>" ></td>
             <td><input type="text" name="x34" class="form-control" value="<?php echo  number_format($row13['o3'],6,".",".")?>" ></td>
             <td><input type="text" name="x35" class="form-control" value="<?php echo  number_format($row13['no'],6,".",".")?>" ></td>
             <td><input type="text" name="x36" class="form-control" value="<?php echo  number_format($row13['ispu'],6,".",".")?>" ></td>
  <?php }else{ ?>
             <td class="col-md-1"><h4><strong>C3</strong></h4></td>
             <td><input type="text" name="x31" class="form-control" ></td>
             <td><input type="text" name="x32" class="form-control" ></td>
             <td><input type="text" name="x33" class="form-control" ></td>
             <td><input type="text" name="x34" class="form-control" ></td>
             <td><input type="text" name="x35" class="form-control" ></td>
             <td><input type="text" name="x36" class="form-control" ></td>
  <?php } ?> 
                    </tr>
                   <tr>
  <?php if ($row11['pm10']) { ?> 
             <td class="col-md-1"><h4><strong>C4</strong></h4></td>
             <td><input type="text" name="x41" class="form-control" value="<?php echo  number_format($row14['pm10'],6,".",".")?>" ></td>
             <td><input type="text" name="x42" class="form-control" value="<?php echo  number_format($row14['so2'],6,".",".")?>" ></td>
             <td><input type="text" name="x43" class="form-control" value="<?php echo  number_format($row14['co'],6,".",".")?>" ></td>
             <td><input type="text" name="x44" class="form-control" value="<?php echo  number_format($row14['o3'],6,".",".")?>" ></td>
             <td><input type="text" name="x45" class="form-control" value="<?php echo  number_format($row14['no'],6,".",".")?>" ></td>
             <td><input type="text" name="x46" class="form-control" value="<?php echo  number_format($row14['ispu'],6,".",".")?>" ></td>
  <?php }else{ ?> 
             <td class="col-md-1"><h4><strong>C4</strong></h4></td>
             <td><input type="text" name="x41" class="form-control" ></td>
             <td><input type="text" name="x42" class="form-control" ></td>
             <td><input type="text" name="x43" class="form-control" ></td>
             <td><input type="text" name="x44" class="form-control" ></td>
             <td><input type="text" name="x45" class="form-control" ></td>
             <td><input type="text" name="x46" class="form-control" ></td>
  <?php } ?>    
                    </tr>
                  </tbody>

                </table>
<?php if ($row11['pm10'] >= 1 ) { ?>
                <div class="btn btn-from">
                  <a href="" onclick="myFunction()" class="btn btn-large btn btn-theme03 ">SUBMIT PROSES ITERASI</a>
                </div>
<?php }else{  ?>
                <div class="btn btn-from">
                <button type="submit" name="submit" class="btn btn-large btn btn-theme03 ">SUBMIT PROSES ITERASI</button>
                </div>
<?php } ?>
              </form>
              </div>
          <!-- col-lg-12-->
       
            </div>
            <!-- /content-panel -->
          </section>
          </div>
          <!-- /col-lg-12 -->
        </div>

<script>
function myFunction() {
  alert("PROSES DI HENTIKAN!! DATA ITERASI TELAH DITEMUKAN, ADA 10 ITERASI");
}
</script>
        <!-- /row -->
<div class="row mt">
<div class="col-md-6">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Data Iterasi <strong><?php echo $rowNew['data']; ?></strong></h4>
              <div class="form-panel">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kelompok</th>
                      <th>C1</th>
                      <th>C2</th>
                      <th>C3</th>
                      <th>C4</th>
                    </tr>
                  </thead>
      <?php 
  
        $sql = mysqli_query($server, "SELECT * from new_iterasi order by id_new asc "); 
         $i=1;
        while($row = mysqli_fetch_array($sql)) {       
       ?>              
                  <tbody>
                    <tr>
    <td><?php echo $i;?>.</td>
    <td><?php echo $row['kelompok']; ?></td>
    <td <?php if ($row['keterangan']=='C1'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c1'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C2'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c2'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C3'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c3'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C4'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c4'],6,".","."); ?></td>           </tr>
                    
                  </tbody>
    <?php $i++; } ?>
  
                </table>
              </div>
            </div>
            <!-- /content-panel -->
          </div>
        <div class="col-md-6">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Data Iterasi Ke <strong><?php echo $rowNext['data']; ?></strong> </h4>
              <div class="form-panel">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kelompok</th>
                      <th>C1</th>
                      <th>C2</th>
                      <th>C3</th>
                      <th>C4</th>
                    </tr>
                  </thead>
      <?php 
  
        $sql = mysqli_query($server, "SELECT * from next_iterasi order by id_next asc "); 
         $i=1;
        while($row = mysqli_fetch_array($sql)) {       
       ?>              
                  <tbody>
                    <tr>
    <td><?php echo $i;?>.</td>
    <td><?php echo $row['kelompok']; ?></td>
    <td <?php if ($row['keterangan']=='C1'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c1'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C2'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c2'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C3'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c3'],6,".","."); ?></td>
    <td <?php if ($row['keterangan']=='C4'){?> style="color:#F00"  <?php } ?>><?php echo number_format($row['c4'],6,".","."); ?></td>           </tr>
                    
                  </tbody>
    <?php $i++; } ?>
  
                </table>
              </div>
            </div>
            <!-- /content-panel -->
          </div>
        </div>

<div class="row mt">
  <?php

        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c1'];     
       $c1= count($tot);
        } 


      $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c2'];     
        $c2= count($tot);
        } 


        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c3'];     
       $c3= count($tot);
        } 


        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c4'];     
       $c4= count($tot);
       
        } 
        $data = $row['data'];
 ?>
 <script>
            var chart;
            var legend;

            var chartData = [{
                cluster: "Cluster 1",
                litres: <?php echo $c1; ?>
            }, {
                cluster: "Cluster 2",
                litres: <?php echo $c2; ?>
            }, {
                cluster: "Cluster 3",
                litres: <?php echo $c3; ?>
            }, {
                cluster: "Cluster 4",
                litres: <?php echo $c4; ?>
            }];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "cluster";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 1;
                chart.outlineThickness = 2;

                 // LEGEND
                legend = new AmCharts.AmLegend();
                legend.align = "center";
                legend.markerType = "circle";
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b></span>";
                chart.addLegend(legend);

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    <div class="col-md-6">
      <div class="content-panel">
           <h4><i class="fa fa-angle-right"></i> Data Iterasi ke <?php echo $data;  ?> </h4>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
           </div>
        </div>


        <?php

        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c1'];     
       $c1= count($tot);
        } 


      $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c2'];     
        $c2= count($tot);
        } 


        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c3'];     
       $c3= count($tot);
        } 


        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c4'];     
       $c4= count($tot);
       $data = $row['data'];
        } 
 ?>
 <script>
            var chart;
            var legend;

            var chartData = [{
                cluster: "Cluster 1",
                litres: <?php echo $c1; ?>
            }, {
                cluster: "Cluster 2",
                litres: <?php echo $c2; ?>
            }, {
                cluster: "Cluster 3",
                litres: <?php echo $c3; ?>
            }, {
                cluster: "Cluster 4",
                litres: <?php echo $c4; ?>
            }];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "cluster";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 1;
                chart.outlineThickness = 2;

                 // LEGEND
                legend = new AmCharts.AmLegend();
                legend.align = "center";
                legend.markerType = "circle";
                chart.balloonText = "[[title]]<br><span style='font-size:18px'><b>[[value]]</b></span>";
                chart.addLegend(legend);

                // WRITE
                chart.write("chart");
            });
        </script>
        <div class="col-md-6">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Data Iterasi Ke <?php echo $data;?></h4>
              <div id="chart" style="width: 100%; height: 400px;"></div>
        </div>
</div>
</div>

