<?php 
     session_start();
     include 'koneksi/koneksi.php';
     if ($_SESSION['level']==NULL) {
         echo "<script>window.location='index.php'</script>";
     } 
     if (@$_SESSION['level']=='pengurus') {
         echo "<script>window.location='dashboard_pengurus.php'</script>";
     } 
     else if (@$_SESSION['level']=='superadmin') {
         include('header.php');
?>

<div class="main-content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data Arsip</h3>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="col-md-2"><a href="tambah_arsip.php" class="btn btn-primary">Tambah Arsip</a></div>
                            </div>
                        </div> 

                </div>
                    <div class="card-body">
                        <table id="managearsip" class="table table-bordered">
                            <thead>
                               <tr>
                                    <th width="5%">No</th>                                                    
                                    <th>Nama Arsip</th>
                                    <th>Kategori Arsip</th>
                                    <th>Tahun</th>
                                    <th class="nosort">Action</th>
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
                                    <td width="15%">
                                        <a href="detailarsip.php?id=<?php echo $ambil['arsip_id']; ?>" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                        <a href="proses_managearsip.php?tipe=delete&id=<?php echo $ambil['arsip_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
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