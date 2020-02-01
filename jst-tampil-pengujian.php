
        <h3><i class="fa fa-angle-right"></i>Data Pengujian</h3>

          <!-- /col-lg-12 -->
      

        <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">      
              <div class="form-panel">
                <form action="" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                  <h4>Silahkan Pilih Data Pengujian</h4>
 
                <br>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th></th>
                      <th>NO</th>
                      <th>Kelompok</th>
                      <th>PM10</th>
                      <th>SO2</th>
                      <th>CO</th>
                      <th>O3</th>
                      <th>NO</th>
                      <th>ISPU</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
<?php
include "connection.php";
$sql = mysql_query("SELECT * from data order by id_d limit 30,61 "); 
$i=1;
while($row = mysql_fetch_array($sql)) { 
?>
                  <tbody>
                    <tr>
                      <td><div class="task-checkbox text-center">
                        <input type="checkbox" name="id[]" class="list-child" value="<?php echo $row['id_d']; ?>" />
                      </div></td>
                      <td><?php echo $i; ?></td>
                      <div class="task-title">
                      <td><span class="task-title-sp"><?php echo $row['kelompok']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['pm10']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['so2']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['co']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['o3']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['no']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['ispu']; ?></span></td>
                      <td><span class="task-title-sp"><?php echo $row['tanggal']; ?></span></td>
                    </div>
                    </tr>
<?php $i++; } ?>
                  </tbody>
                </table>   
                <div class="row mt" style="margin: auto;">
                  <div class="col-md-2" style="width: 212px">
                    <select class="form-control" name="x1" required="">
                    <option value="">-> Bencana alam <-</option>
                  <option value="0.9">ADA</option>
                  <option value="0.1">TIDAK ADA</option>
                </select></div>
                    <div class="col-md-2" style="width: 212px">
                      <select class="form-control" name="x2" required>
                    <option value="">-> Kebakaran Hutan <-</option>
                  <option value="0.9">ADA</option>
                  <option value="0.1">TIDAK ADA</option>
                </select></div>
                <div class="col-md-2" style="width: 212px">
                  <select class="form-control" name=x3 required>
                    <option value="">-> Kepadatan Lalulintas <-</option>
                  <option value="0.9">ADA</option>
                  <option value="0.1">TIDAK ADA</option>
                </select></div>
                    <div class="col-md-2" style="width: 212px">
                      <select class="form-control" name="x4" required>
                    <option value="">Kegiiatan Industri</option>
                  <option value="0.9">ADA</option>
                  <option value="0.1">TIDAK ADA</option>
                </select></div>
                <div class="col-md-2" style="width: 212px">
                  <select class="form-control" name="x5" required>
                    <option value="">kepadatan Penduduk</option>
                  <option value="0.9">ADA</option>
                  <option value="0.1">TIDAK ADA</option>
                </select></div>

              </div><br>        
            <div class="from ">
            <button name="submit" class="btn btn-theme03" >Proses Transfomasi data Pengujian</button>
             </div>
                </form>
              </div>

           
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
          <!-- /col-lg-12 -->
        </div>


   <?php

//$data = $_POST['data'];

   if (isset($_POST['submit'])){
 
 $id=$_POST['id'];
 $x1=$_POST['x1'];
 $x2=$_POST['x2'];
 $x3=$_POST['x3'];
 $x4=$_POST['x4'];
 $x5=$_POST['x5'];

 $countID = count($id);    


mysql_query("DELETE FROM pengujian")  or die (mysql_error());

for ($i=0; $i < $countID ; $i++) { 
   mysql_query("insert into pengujian values ('','$id[$i]','$x1','$x2','$x3','$x4','$x5')")  or die (mysql_error());
}

echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=jst_query_pengujian'>";



 
}

   ?>

