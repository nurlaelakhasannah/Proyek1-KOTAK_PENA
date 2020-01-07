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
                    <div><h3>Data Proker</h3></div>                                            
                    <div class="row">
                        <div class="col-md-12">
                                <div class="col-md-2"><a href="ajukan_prokerSA.php" class="btn btn-primary">Ajukan Proker</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="col-md-2"><a href="template/Template Mini Proposal Kotak Pena.docx" class="btn btn-success"  style=" padding-bottom: 10px;" download>Download Template</a></div>
                        </div>
                    </div>                                                                        
                </div>
                    <div class="card-body">
                        <table id="manageproker" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>                                                    
                                    <th>Judul Proker</th>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>Subdivisi</th>
                                    <th>Deskripsi</th>
                                    <th>Tahun</th>
                                    <th>Status</th>
                                    <th class="nosort">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php $get = mysqli_query($koneksi,"SELECT *,proker.status as statusprok FROM proker JOIN tbuser ON proker.user_id=tbuser.user_id");
                                        $no=1;
                                        while ($ambil=mysqli_fetch_assoc($get)) {                                                                                            
                                    ?>                                
                                       <tr>        
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $ambil['judul_proker']; ?></td>                                                                                                
                                            <td><?php echo $ambil['nama_lengkap']?></td>
                                            <td><?php echo $ambil['asal_divisi']; ?></td>
                                            <td><?php echo $ambil['asal_subdivisi']; ?></td>
                                            <td><?php                                                     
                                                $cut_text = substr($ambil['deskripsi'], 0, 30);
                                                if ($ambil['deskripsi']{30 - 1} != ' ') { // jika huruf ke 50 (50 - 1 karena index dimulai dari 0) buka  spasi
                                                    $new_pos = strrpos($cut_text, ' '); // cari posisi spasi, pencarian dari huruf terakhir
                                                    $cut_text = substr($ambil['deskripsi'], 0, $new_pos);
                                                    }                                            
                                                    echo $cut_text . '...';
                                                 ?></td>
                                            <td><?php echo $ambil['tahun']; ?></td>
                                            <td><?php echo $ambil['statusprok']; ?></td>
                                            <td width="25%">
                                                <a href="detailproker.php?id=<?php echo $ambil['proker_id']; ?>" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                                <a href="proses_manageproker.php?tipe=delete&id=<?php echo $ambil['proker_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="proses_manageproker.php?tipe=acc&id=<?php echo $ambil['proker_id']; ?>"class="btn btn-success"><i class="fa fa-check"></i></a>
                                                <a href="proses_manageproker.php?tipe=nacc&id=<?php echo $ambil['proker_id']; ?>"class="btn btn-danger"><i class="fa fa-times"></i></a>
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