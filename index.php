<?php 
  session_start();
  if (@$_SESSION['login']=='true' && @$_SESSION['level']=='superadmin') {
    echo "<script>window.location='dashboard.php';</script>";
  }
  else if (@$_SESSION['login']=='true' && @$_SESSION['level']=='pengurus') {
    echo "<script>window.location='dashboard_pengurus.php';</script>";
  }else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Kotak Pena</title>
  <!-- Bootstrap core CSS-->
  <link href="loginasset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="loginasset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="loginasset/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="background-color:#17304f;" align="center">        
          <img src="img/logo kopen.png" alt="" width="10%">
      </div>
      <div class="card-body">
        <form action="proses/proseslogin.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" name="username" autocomplete="off" id="exampleInputUsername" type="text" aria-describedby="usernameHelp" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" autocomplete="off" id="exampleInputPassword1" type="password" placeholder="Password" required>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Daftar</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="loginasset/jquery/jquery.min.js"></script>
  <script src="loginasset/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="loginasset/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
<?php } ?>