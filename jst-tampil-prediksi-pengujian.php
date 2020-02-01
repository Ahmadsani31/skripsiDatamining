
        <h3><i class="fa fa-angle-right"></i>Data Pengujian</h3>

          <!-- /col-lg-12 -->
      

        <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">      
              <div class="form-panel">
                <form action="?p=jst_hasil_prediksi_pengujian_tranfor" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                  <div class="row">
<?php 
$sqlCek = mysqli_query($server, "SELECT * from prediksi_jst where prediksi like '%pengujian%'"); 
$rowCek = mysqli_fetch_array($sqlCek);

                    if ($rowCek['prediksi']){ ?>
                    
                      <div class="col-md-9">
                     <h4>Data Prediksi Pengujian</h4>
                    </div>
                    <div class="col-md-3">
                      <a href="?p=reset_pengujian" style="float: right;" ><button type="button" class="btn btn-danger">Reset</button></a>
                    </div>

                    <?php }else{ ?>

                    <div class="col-md-9">
                     <h4>Data Prediksi Pengujian</h4>
                    </div>
                    <div class="col-md-3">
                      <a href="?p=jst_query_prediksi_pengujian" style="float: right;" ><button type="button" class="btn btn-theme03">Proses Prediksi Pengujian</button></a>
                    </div>

                  <?php } ?>

                  </div>
 
                <br>
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th class="text-center">NO</th>
                      <th class="text-center">X1</th>
                      <th class="text-center">X2</th>
                      <th class="text-center">X3</th>
                      <th class="text-center">X4</th>
                      <th class="text-center">X5</th>
                      <th class="text-center">X6</th>
                      <th class="text-center">X7</th>
                      <th class="text-center">X8</th>
                      <th class="text-center">X9</th>
                      <th class="text-center">X10</th>
                      <th class="text-center">X11</th>
                      <th class="text-center">Target</th>
                    </tr>
                  </thead>
<?php
$sql = mysqli_query($server, "SELECT * from prediksi_jst where prediksi like '%pengujian%'"); 
$i=1;
while($row = mysqli_fetch_array($sql)) { 
?>
                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <div class="task-title">
                      <td><span class="task-title-sp"><?php echo $row['x1']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x2']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x3']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x4']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x5']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x6']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x7']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x8']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x9']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x10']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['x11']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['target']; ?></span></td>
                    </div>
                    </tr>

<?php $i++; } ?>
                  </tbody>


                </table>   
                       
            <div class="from ">
            
            <?php 
$sqlHasil = mysqli_query($server, "SELECT * from hasil_prediksi_jst where prediksi like '%pengujian%'"); 
$rowHasil = mysqli_fetch_array($sqlHasil);

            if ($rowHasil['prediksi']){ ?>

              <a href="?p=jst_tampil_prediksi_pengujian_tranfor"><button type="button" class="btn btn-success">Lihat Prediksi Pengujian</button></a>

              <?php }else if($rowCek['x1']){ ?>
                
            <button name="submit" class="btn btn-primary">Proses Data Prediksi Pengujian</button>

            <?php }else{ ?>

            <?php } ?>
             </div>
                </form>
              </div>

           
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
          <!-- /col-lg-12 -->
        </div>


