<?php
include ('../koneksi/koneksi.php');
session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = mysqli_query($koneksi,"SELECT * FROM tbuser where username = '$username' AND password = '$password' AND status = 'aktif'");

        $cek = mysqli_num_rows($db);        
        if ($cek>0) {                           
            $ambil = mysqli_fetch_assoc($db);
            
            if ($ambil['level']=="superadmin") {
                $_SESSION['username']=$username;
                $_SESSION['level']=$ambil['level']; 
                $_SESSION['userid']=$ambil['user_id'];     
                $_SESSION['login']=true;                         
                // echo $_SESSION['level'];
                header("location:../dashboard.php");
            }
            else if ($ambil['level']=="pengurus") {
                $_SESSION['username']=$username;
                $_SESSION['level']=$ambil['level'];   
                $_SESSION['userid']=$ambil['user_id'];  
                $_SESSION['login']=true; 
                // echo $_SESSION['userid'];                                 
                // echo $_SESSION['level'];
                header("location:../dashboard_pengurus.php");
            }
            else{
            echo "<script>window.alert('username dan password tidak terdaftar');window.location='../index.php'</script>";
            }
    }else{
        echo "<script>window.alert('Akun Belum aktif');window.location='../index.php'</script>";    
    }
}