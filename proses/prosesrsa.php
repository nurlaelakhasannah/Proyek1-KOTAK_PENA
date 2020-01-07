<?php
    include ('../koneksi/koneksi.php');
    if(isset($_POST['submit'])){
        $name = $_POST['namalengkap'];
        $username = $_POST['username'];
        $jabatan = $_POST['jabatan'];
        $level = 'superadmin';
        $email= $_POST['email'];
        $password = $_POST['password'];
        $nohp = $_POST['nohp'];
        $prd_jbtn = $_POST['periode_jabatan'];
        $confirmpassword = $_POST['confirmpassword'];
            if ($password==$confirmpassword) {
                $insert=mysqli_query($koneksi,"INSERT INTO tbuser VALUES (
                    NULL,'$name','$jabatan','$email','$level','$password','$username','$nohp','aktif','$prd_jbtn')");
                if ($insert) {
                    echo "<script>window.alert('Daftar Sukses dong');window.location.href='../index.php'</script>";
                }else{
                    echo "<script>window.alert('Gagal Daftar sih');window.location='../register.php'</script>";
                }
            }else{
                echo "<script>window.alert('Password tidak sesuai gaes');window.location='../register.php'</script>";
            }
    }
?>
