<?php
    session_start();
    if ($_SESSION['level']==NULL) {
        echo "<script>window.location='index.php'</script>";
    } 
    if (@$_SESSION['level']=='pengurus') {
        echo "<script>window.location='dashboard_pengurus.php'</script>";
    }    
    else if (@$_SESSION['level']=='superadmin') {
        include('header.php');
?>
                <!-- Konten -->
                <div class="main-content">
                    <div class="container-fluid">
                    <br />
                    <h2 align="center"></h2>
                    <br />
                     <div id="calendaraja"></div>
                    </div>
                  </div>                    
 <?php 
include('footer.php');}
     else{
        echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
    }    
?>                                            