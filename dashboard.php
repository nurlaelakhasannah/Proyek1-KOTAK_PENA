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
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body" style="background-color: #FEBF0C; color:white;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Pengajuan Proker </h6>
                                <h2><?php include 'koneksi/koneksi.php';
                                $hitung = mysqli_query($koneksi,"SELECT count(*) as proker_count FROM proker");
                                $ambil = mysqli_fetch_assoc($hitung);
                                echo $ambil['proker_count'];
                                ?></h2>
                            </div>                                            
                        <div class="icon">
                            <i class="fa fa-file-upload" style="color: white;"></i>
                        </div>
                        </div>
                    </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body" style="background-color: #4D7EF9; color:white;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Arsip</h6>
                                <h2><?php include 'koneksi/koneksi.php';
                                    $hitung = mysqli_query($koneksi,"SELECT count(*) as arsip_count FROM arsip");
                                    $ambil = mysqli_fetch_assoc($hitung);
                                    echo $ambil['arsip_count'];
                                  ?></h2>
                            </div>                                            
                            <div class="icon">
                                <i class="fa fa-folder-open" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
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
                        <div  class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" ></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body" style="background-color: #EE1900  ; color: white;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>User</h6>
                                <h2><?php include 'koneksi/koneksi.php';
                                    $hitung = mysqli_query($koneksi,"SELECT count(*) as tbuser_count FROM tbuser");
                                    $ambil = mysqli_fetch_assoc($hitung);
                                    echo $ambil['tbuser_count'];
                                  ?></h2>
                            </div>
                            <div class="icon" style=" color: white;">
                                <i class="ik ik-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style=" width: 50%;"></div>
                    </div>
                </div>
            </div>  
            <div class="container">
                <?php  include('orgchart.php'); ?>   
            </div>          
                         
        </div>
    </div>
</div>        
<?php 
include('footer.php');}
     else{
        echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
    }    
?>                                            