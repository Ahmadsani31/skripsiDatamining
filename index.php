<?php
include "connection.php";
session_start();
  if(!empty($_SESSION["userAdm"]) && !empty($_SESSION["namaAdm"])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Kmeans Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/amcharts.js" type="text/javascript"></script>
  <script src="lib/pie.js" type="text/javascript"></script>

</head>

<body>
  <section id="container">
    <header class="header black-bg">
     
      <!--logo start-->
      <a href="?p=home" class="logo"><b>DATA<span> k-MEANS</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="?p=home"><img src="img/friends/fr-10.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['namaAdm'];  ?></h5>
          <li class="mt">
            <a class="active" href="?p=home">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Data K-Means</span>
              </a>
            <ul class="sub">
              <li><a href="?p=datamining_tampil"><i class="fa fa-dot-circle-o"></i>Proses Cluster</a></li>
              <li><a href="?p=cart"><i class="fa fa-dot-circle-o"></i></i>Diagram Chart Cluster</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Proses JST</span>
              </a>
            <ul class="sub">
              <li><a href="?p=jst_tampil_prediksi_pelatihan"><i class="fa fa-dot-circle-o"></i></i>Proses Pelatihan</a></li>
              <li><a href="?p=jst_tampil_prediksi_pengujian"><i class="fa fa-dot-circle-o"></i>Proses Pengujian</a></li>
    
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Implementasi JST</span>
              </a>
            <ul class="sub">
              <li><a href="?p=jst_tampil_pelatihan"><i class="fa fa-dot-circle-o"></i></i>Proses Prediksi Data</a></li>
              
    
            </ul>
          </li>
         
    
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">

       <?php
    if(isset($_GET['p'])){
      if ($_GET['p']== "login" || $_GET['p'] == ""){
        include "login.php";
      }
      else if($_GET['p'] == "home") {
        include "home.php";
      
      }else if($_GET['p'] == "input_cluster") {
        include "data-input-cluster.php";
      }

      else if($_GET['p'] == "datamining_tampil") {
        include "datamining-tampil.php";
      }else if($_GET['p'] == "datamining_query") {
        include "datamining-query.php";
      }else if($_GET['p'] == "datamining_query_new") {
        include "datamining-query-new.php";
      }else if($_GET['p'] == "datamining_query_next") {
        include "datamining-query-next.php";
      }


      else if($_GET['p'] == "jst_tampil_pelatihan") {
        include "jst-tampil-pelatihan.php";
      }else if($_GET['p'] == "jst_tampil_pelatihan_tranfor") {
        include "jst-tampil-pelatihan-tranfor.php";
      }else if($_GET['p'] == "jst_query_pelatihan") {
        include "jst-query-pelatihan.php";
      }


      else if($_GET['p'] == "jst_tampil_pengujian") {
        include "jst-tampil-pengujian.php";
      }else if($_GET['p'] == "jst_tampil_pengujian_tranfor") {
        include "jst-tampil-pengujian-tranfor.php";
      }else if($_GET['p'] == "jst_query_pengujian") {
        include "jst-query-pengujian.php";
      }

      else if($_GET['p'] == "jst_hasil_pelatihan") {
        include "jst-hasil-pelatihan-tranfor.php";
      }else if($_GET['p'] == "jst_hasil_pengujian") {
        include "jst-hasil-pengujian-tranfor.php";
      }

      else if($_GET['p'] == "jst_tampil_prediksi_pelatihan") {
        include "jst-tampil-prediksi-pelatihan.php";
      }else if($_GET['p'] == "jst_query_prediksi_pelatihan") {
        include "jst-query-prediksi-pelatihan.php";
      }

      else if($_GET['p'] == "jst_tampil_prediksi_pengujian") {
        include "jst-tampil-prediksi-pengujian.php";
      }else if($_GET['p'] == "jst_query_prediksi_pengujian") {
        include "jst-query-prediksi-pengujian.php";
      }

      else if($_GET['p'] == "jst_hasil_prediksi_pelatihan_tranfor") {
        include "jst-hasil-prediksi-pelatihan-tranfor.php";
      }else if($_GET['p'] == "jst_tampil_prediksi_pelatihan_tranfor") {
        include "jst-tampil-prediksi-pelatihan-tranfor.php";
      }else if($_GET['p'] == "jst_tampil_prediksi_pengujian_tranfor") {
        include "jst-tampil-prediksi-pengujian-tranfor.php";
      }

      else if($_GET['p'] == "jst_hasil_prediksi_pengujian_tranfor") {
        include "jst-hasil-prediksi-pengujian-tranfor.php";
      }

      else if($_GET['p'] == "jst_prediksi_pelatihan_akhir") {
        include "jst-prediksi-pelatihan-akhir.php";
      }else if($_GET['p'] == "jst_prediksi_pengujian_akhir") {
        include "jst-prediksi-pengujian-akhir.php";
      }

      else if($_GET['p'] == "cart") {
        include "datamining-cart.php";
      }

      else if($_GET['p'] == "registrasi") {
        include "registrasi.php";
      }else if($_GET['p'] == "contoh") {
        include "contoh.php";
      }

      else if($_GET['p'] == "login") {
        include "login.php";
      }else if($_GET['p'] == "logout") {
        include "logout.php";
      }

      else if($_GET['p'] == "reset") {
        include "reset.php";
      }else if($_GET['p'] == "reset_pelatihan") {
        include "resetPelatihan.php";
      }else if($_GET['p'] == "reset_pengujian") {
        include "resetPengujian.php";
      }

      else if($_GET['p'] == "reload") {
        include "reload.php";
      }


    }else{
      include "home.php";
    }
        ?>
        <!-- /row -->
      </section>
          <footer class="site-footer small">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Tn.NoboDy</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Costum with Tn.NoboDy template by <a href="https://templatemag.com/">TemplateDashio</a>
        </div>
        <a href="?p=home" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    </section>
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

 
  <script src="lib/raphael/raphael.min.js"></script>


</body>

</html>
<?php
  }else{
     include "login.php";
  }
?>