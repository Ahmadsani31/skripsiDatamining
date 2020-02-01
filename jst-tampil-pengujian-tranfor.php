
        <h3><i class="fa fa-angle-right"></i> Pemilihan Data JST</h3>

          <!-- /col-lg-12 -->
      

        <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">      
              <div class="form-panel">
                  <h4>Silahkan Pilih Data Pengujian</h4>
 
                <br>
                <table class="table table-bordered table-striped text-center">
                  <thead >
                    <tr >
                      <th class="text-center">NO</th>
                      <th class="text-center">PM10</th>
                      <th class="text-center">SO2</th>
                      <th class="text-center">CO</th>
                      <th class="text-center">O3</th>
                      <th class="text-center">NO</th>
                      <th class="text-center">ISPU</th>
                      <th class="text-center">X1</th>
                      <th class="text-center">X2</th>
                      <th class="text-center">X3</th>
                      <th class="text-center">X4</th>
                      <th class="text-center">X5</th>
                      <th class="text-center">X6</th>
                      <th class="text-center">aksi</th>
                    </tr>
                  </thead>
<?php
include "connection.php";
$sql = mysql_query("SELECT * from pengujian_jst"); 
$i=1;
while($row = mysql_fetch_array($sql)) {
?>
                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['pm10']; ?></td>
                      <td><?php echo $row['so2']; ?></td>
                      <td><?php echo $row['co']; ?></td>
                      <td><?php echo $row['o3']; ?></td>
                      <td><?php echo $row['no']; ?></td>
                      <td><?php echo $row['ispu']; ?></td>
                      <td><?php echo $row['x1']; ?></td>
                      <td><?php echo $row['x2']; ?></td>
                      <td><?php echo $row['x3']; ?></td>
                      <td><?php echo $row['x4']; ?></td>
                      <td><?php echo $row['x5']; ?></td>
                      <td><?php echo $row['x6']; ?></td>
                      <td><a href="?p=jst_hasil_pengujian&id_pengujian=<?php echo $row[id_pengujian]; ?>">
                        <button type="button" class="btn btn-theme03 btn-block btn-sm">lihat</button>
                      </a></td>
                      
                    </tr>
<?php $i++; } ?>
                  </tbody>
                </table>   
              </div>

           
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
          <!-- /col-lg-12 -->
        </div>


 
