
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
      <form class="form-login" action="" method="post" enctype="multipart/form-data">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <br>
          <button class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="login-social-link centered">
            <p>Don't have an account yet?</p>
            <button class="btn btn-facebook" name="register" type="submit"> Create an account</button>
      
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
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


$username = mysqli_real_escape_string($server, $_POST['username']);
$password = mysqli_real_escape_string($server, $_POST['password']);
$password = md5($password);

  $query = mysqli_query($server, "SELECT * FROM admin WHERE username= '$username' AND password= '$password'") or die (mysqli_error($server));

  $row = mysqli_num_rows($query);
  $radm = mysqli_fetch_array($query);
  if($row > 0){
    session_start();
    $_SESSION["userAdm"]=$radm["username"];
    $_SESSION["namaAdm"]=$radm["nama_admin"];
    header("location:index.php");
  }else{
    echo "<script type='text/javascript'>alert('Username And Password Salah!')</script>";

  }


}else if (isset($_POST['register'])) {
 header("location:registrasi.php");
}      
?>