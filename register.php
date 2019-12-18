<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registrasi Kotak Pena</title>
  <!-- Bootstrap core CSS-->
    <!-- Bootstrap core CSS-->
    <link href="loginasset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="loginasset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="loginasset/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="proses/prosesdaftar.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Nama lengkap</label>
                <input class="form-control" name="namalengkap" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nama lengkap" maxlength="100">
              </div>
              <div class="col-md-6">
                <label for="exampleInputUserName">User Name</label>
                <input class="form-control" name="username" id="exampleInputUserName" type="text" aria-describedby="nameHelp" placeholder="Username" maxlength="10">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Email" maxlength="30">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input class="form-control" name="jabatan" id="exampleInputJabatan" type="text" aria-describedby="emailHelp" placeholder="Jabatan" maxlength="20">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Periode Jabatan</label>
            <input class="form-control" name="periode_jabatan" id="exampleInputJabatan" type="text" placeholder="Periode Jabatan" maxlength="20">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">No. Hp</label>
              <input type="text" name="nohp" id="" class="form-control" placeholder="No. Hp" maxlength="13">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password" maxlength="8">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm Password</label>
                <input class="form-control" name="confirmpassword" id="exampleConfirmPassword" type="password" placeholder="Confirm password" maxlength="8">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" name="submit">Daftar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Punya Akun ?</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
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
