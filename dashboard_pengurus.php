<?php
    session_start();
    if ($_SESSION['level']==NULL) {
        echo "<script>window.location='index.php'</script>";
    } 
    if (@$_SESSION['level']=='superadmin') {
        echo "<script>window.location='dashboard.php'</script>";
        include('header.php');
    }    
    else if (@$_SESSION['level']=='pengurus') {
        include('header_pengurus.php');
?>
<!-- Konten -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body" style="background-color: #eb4034; color: white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Pengajuan Proker </h6>
                                <h2><?php include 'koneksi/koneksi.php';
                                    $hitung = mysqli_query($koneksi,"SELECT count(*) as proker_count FROM proker WHERE user_id ='".$_SESSION['userid']."'");
                                    $ambil = mysqli_fetch_assoc($hitung);
                                    echo $ambil['proker_count'];
                                  ?></h2>
                            </div>                                            
                            <div class="icon">
                                <i class="fa fa-file-upload" style="color: white;"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"><?php include 'koneksi/koneksi.php';
                                $naleng = mysqli_query($koneksi, "SELECT * FROM tbuser WHERE user_id='".$_SESSION['userid']."'");
                                $ambil2 = mysqli_fetch_assoc($naleng);
                                echo $ambil2['nama_lengkap'];
                                 ?></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body" style="background-color: #15AC00; color:white;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Schedule</h6>
                                <h2><?php include 'koneksi/koneksi.php';
                                    $hitung = mysqli_query($koneksi,"SELECT count(*) as schedule_count FROM schedule");
                                    $ambil = mysqli_fetch_assoc($hitung);
                                    echo $ambil['schedule_count'];
                                  ?></h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-calendar" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm" style="width: 50%; background-color: #4D7EF9;">
                    </div>
                </div>
            </div>
        </div>
        <br />
    <h2 align="center">Schedule Time Kotak Pena</h2>
        <br />
    <div id="calendarpengurus"></div>
    <br>
    <div class="container">
                <?php  include('orgchart.php'); ?>   
            </div> 
    </div>
</div>        
<?php 
include('footer.php');}
     else{
        echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
    }    
?>                                            