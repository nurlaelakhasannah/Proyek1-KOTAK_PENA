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
    <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Data Arsip</h3></div>
                                    <div class="card-body">
                                        <table id="managearsip" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No</th>                                                    
                                                    <th>Nama Arsip</th>
                                                    <th>Kategori Arsip</th>
                                                    <th>Tahun</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $get = mysqli_query($koneksi,"SELECT * FROM arsip");
                                                    for ($no=1;$ambil=mysqli_fetch_assoc($get);$no++) {                                                                                            
                                                ?>                                
                                                <tr>        
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $ambil['nama_arsip']; ?></td>                                                                                                
                                                    <td><?php echo $ambil['kategori_arsip'];?></td>
                                                    <td><?php echo $ambil['tahun']; ?></td>
                                                </tr>
                                                    <?php } ?>                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

    </div>
</div>
<?php
    include('footer.php');
}else{
    echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
}    
?>