<?php 
     session_start();
     include 'koneksi/koneksi.php';
     if ($_SESSION['level']==NULL) {
         echo "<script>window.location='index.php'</script>";
     } 
     if (@$_SESSION['level']=='superadmin') {
         echo "<script>window.location='dashboard.php'</script>";
     } 
     else if (@$_SESSION['level']=='pengurus') {
         include('header_pengurus.php');
?>

    <div class="main-content">
        <div class="container-fluid">
            <br />
        <h2 align="center"><a href="#">Schedule Time Kotak Pena</a></h2>
            <br />
        <div id="calendarpengurus"></div>
        </div>
    </div>                 

<?php
    include('footer.php');
}else{
    echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
}    
?>