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
                                    <div class="card-header"><h3>Data Users</h3></div>
                                    <div class="card-body">
                                        <table id="manageuser" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No</th>                                                    
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Jabatan</th>
                                                    <th>Periode Jabatan</th>
                                                    <th>Status</th>
                                                    <th class="nosort">Activate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $get = mysqli_query($koneksi,"SELECT * FROM tbuser ORDER BY status DESC");
                                                $no=1;
                                                    while ($ambil=mysqli_fetch_assoc($get)) {                                                                                            
                                                ?>                                
                                                <tr>        
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $ambil['nama_lengkap']; ?></td>                                                                                                
                                                    <td><?php echo $ambil['username']?></td>
                                                    <td><?php echo $ambil['email']; ?></td>
                                                    <td><?php echo $ambil['jabatan']; ?></td>
                                                    <td><?php echo $ambil['periode_jabatan']; ?></td>
                                                    <td><?php echo $ambil['status']; ?></td>
                                                    <td width="15%">
                                                    <a href="proses_manageuser.php?tipe=activate&id=<?php echo $ambil['user_id']; ?>"class="btn btn-success"><i class="fa fa-check"></i></a>
                                                    <a href="proses_manageuser.php?tipe=deactivate&id=<?php echo $ambil['user_id']; ?>"class="btn btn-danger"><i class="fa fa-times"></i></a>
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