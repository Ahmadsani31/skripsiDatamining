
        <h3><i class="fa fa-angle-right"></i> Manajamen Data</h3>
          <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">

              <form action="" class="form-horizontal style-form" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                  <label class="control-label col-md-2" style="margin-left:25px;"><strong>Import File</strong></label>
                  <div class="controls col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                      <input name="excelfile" type="file" class="default" />
                      </span>

                      <div class="pull-right">
                            <button name="import" class="btn btn-theme03">Submit</button>
                          </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
        </div>
          <!-- /col-lg-12 -->
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Table Data BMKG Cuaca</h4>
              <div class="form-panel">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
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
$sql = mysql_query("SELECT * from data order by id_d asc "); 
$i=1;
while($row = mysql_fetch_array($sql)) { 
?>
                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['kelompok']; ?></td>
                      <td><?php echo $row['pm10']; ?></td>
                      <td><?php echo $row['so2']; ?></td>
                      <td><?php echo $row['co']; ?></td>
                      <td><?php echo $row['o3']; ?></td>
                      <td><?php echo $row['no']; ?></td>
                      <td><?php echo $row['ispu']; ?></td>
                      <td><?php echo $row['tanggal']; ?></td>
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
        <!-- /row -->

  <?php
  if (isset($_POST['import'])) {

    require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
    require('spreadsheet-reader-master/SpreadsheetReader.php');

    //upload data excel kedalam folder uploads
    $target_dir = "uploads/".basename($_FILES['excelfile']['name']);
    
    move_uploaded_file($_FILES['excelfile']['tmp_name'],$target_dir);

    $Reader = new SpreadsheetReader($target_dir);

    foreach ($Reader as $Key => $Row)
    {
      // import data excel mulai baris ke-2 (karena ada header pada baris 1)
      if ($Key < 1) continue;     
      $query = mysql_query("INSERT INTO data (kelompok , pm10 , so2 , co , o3 , no , ispu , tanggal) VALUES ('".$Row[0]."', '".$Row[1]."','".$Row[2]."','".$Row[3]."','".$Row[4]."','".$Row[5]."','".$Row[6]."','".$Row[7]."')");
    }
    if ($query) {
        echo "Import data berhasil";
      }else{
        echo mysql_error();
      }
  }
  ?>