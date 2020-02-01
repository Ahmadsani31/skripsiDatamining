 <h3><i class="fa fa-angle-right"></i> Diagram Charts</h3>
        <!-- page start-->
  <?php
include "connection.php";
        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c1'];     
        } 
        $c1= count($tot);

      $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c2'];     
        }
        $c2= count($tot);
         


        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c3'];     
        }
        $c3= count($tot);
        


        $sql = mysqli_query($server, "SELECT * from next_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c4'];   
        $data = $row['data'];  
        }
        $c4= count($tot);
       
        
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
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Chart Cluster Ke <?php echo $data;  ?></h4>
                <div class="panel-body">
                  <div id="chartdiv" style="width: 100%; height: 400px;"></div>
                </div>
              </div>
            </div>

 <?php

        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C1%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c1'];     
        }
        $c1= count($tot);
        


      $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C2%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c2'];     
        }
        $c2= count($tot);
         


        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C3%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c3'];     
        }
        $c3= count($tot);
        


        $sql = mysqli_query($server, "SELECT * from new_iterasi where keterangan LIKE '%C4%'"); 
        $tot = array();
        while($row = mysqli_fetch_array($sql)) {  
        $tot[] = $row['c4'];     
        $data = $row['data'];
        }
        $c4= count($tot);
       
        
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

            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Chart Cluster Ke <?php echo $data;  ?></h4>
                <div class="panel-body">
                  <div id="chart" style="width: 100%; height: 400px;"></div>
                </div>
              </div>
            </div>
          </div>
          
     