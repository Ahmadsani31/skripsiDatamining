
          <h3><i class="fa fa-angle-right"></i>Data Pengujian</h3>

          <!-- /col-lg-12 -->
      

        <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">      
              <div class="form-panel">
                <form action="" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-10">
                     <h4>Data Prediksi</h4>
                    </div>
                  </div>
 
                <br>
                <table class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th class="text-center">NO</th>
                      <th class="text-center">PM10</th>
                      <th class="text-center">SO2</th>
                      <th class="text-center">CO</th>
                      <th class="text-center">O3</th>
                      <th class="text-center">NO</th>
                      <th class="text-center">ISPU</th>
                      <th class="text-center">Nilai Yink</th>
                      <th class="text-center">Nilai Error</th>
                      <th class="text-center">Nilai Yk</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
<?php

$sql = mysqli_query($server, "SELECT * from hasil_prediksi_jst where prediksi like '%pengujian%'"); 
$i=1;
while($row = mysqli_fetch_array($sql)) { 

$sqldata = mysqli_query($server, "SELECT * from data where id_d='$row[id_data]'"); 
$rowdata = mysqli_fetch_array($sqldata);

$sqlPre = mysqli_query($server, "SELECT * from prediksi_jst where id_pre='$row[id_pre]'"); 
$rowPre = mysqli_fetch_array($sqlPre);

          
?>
                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $rowdata['pm10'] ?></td>
                      <td><?php echo $rowdata['so2'] ?></td>
                      <td><?php echo $rowdata['co'] ?></td>
                      <td><?php echo $rowdata['o3'] ?></td>
                      <td><?php echo $rowdata['no'] ?></td>
                      <td><?php echo $rowdata['ispu'] ?></td>
                      <td><?php echo $row['yink']; ?></td>
                      <td><?php echo $row['yeror']; ?></td>
                      <td><?php echo $row['yk']; ?></td>
                      <td><a href="?p=jst_prediksi_pengujian_akhir&id_prediksi=<?php echo $row['id_pre']; ?>">
                        <button type="button" class="btn btn-theme03 btn-sm btn-block">lihat</button>
                      </a></td>
                    
                    </tr>

<?php $i++; } ?>
                  </tbody>
                </table>   
                </form>
                <div class="from ">
              <a href="?p=jst_tampil_prediksi_pengujian"><button type="button" class="btn btn-success">Back</button></a>

             </div>
              </div>

           
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
          <!-- /col-lg-12 -->
        </div>
