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
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>

  <div id="login-page">
    <div class="container">
      <form class="form-register" action="" method="post" enctype="multipart/form-data">
        <h2 class="form-register-heading">Registrasi</h2>
        <div class="login-wrap">
        	
          <input type="text" name="nama" class="form-control" placeholder="Your Name" autofocus>
          <br>
          <input type="email" name="email" class="form-control" placeholder="Your Email" >
          <br>
          <div class="row">
        		<div class="col-md-6">
        			<input type="text" name="username" class="form-control" placeholder="Username" >
        		</div>
        		<div class="col-md-6">
        		<input type="password" name="password" class="form-control" placeholder="Username" >
        		</div>
        	</div><br>
        	<input type="number" name="nope" class="form-control" placeholder="Your Number Phone" >
        		<br>
          <button class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> REGISTRASI</button>
          <hr>

          <div class="login-social-link centered">
            <p>Do you have account!</p>
    
            <button class="btn btn-info" name="login" type="submit"> Log In Now</button>
      			
          </div>
        </div>
       </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->

 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>

<?php
include "connection.php";



if (isset($_POST['submit'])) {

$nama = mysqli_real_escape_string($server, $_POST['nama']);
$nm = ucwords($nama);
$email = mysqli_real_escape_string($server, $_POST['email']);
$username = mysqli_real_escape_string($server, $_POST["username"]);  
$password = mysqli_real_escape_string($server, $_POST["password"]);  
$password = md5($password); 
$nope = mysqli_real_escape_string($server, $_POST['nope']);

$query = mysqli_query($server, "INSERT INTO admin (nama_admin, email, telpon, username, password) VALUES ('$nm','$email','$nope','$username','$password')") or die (mysqli_error($server));

  if($query){
    header("location:login.php");
  }else{
  	echo "<script>alert('Gagal Registrasi');history.go(-1);</script>";
  }


}else if (isset($_POST['login'])) {

	header("location:login.php");

}     
?>
       


