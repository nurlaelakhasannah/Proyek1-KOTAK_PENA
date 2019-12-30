<?php
    session_start();
    include('koneksi/koneksi.php');
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
                    <div class="card">
                        <div class="card-body">
                            <table width="100%">
                            <?php 
                                $id = @$_GET['id'];
    
                                $get = mysqli_query($koneksi,"SELECT * FROM arsip JOIN tbuser ON arsip.user_id=tbuser.user_id where arsip_id='$id'");
                                $ambil = mysqli_fetch_assoc($get);
                                ?>
                                <tr>
                                    <th>Nama Pengupload</th>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td><?php echo $ambil['nama_lengkap']; ?></td>                             
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <th>Nama Arsip</th>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td><?php echo $ambil['nama_arsip']; ?></td>                          
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>  
                                <tr>
                                    <th>Kategori Arsip</th>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td><?php echo $ambil['kategori_arsip']; ?></td>
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>  
                                <tr>
                                    <th>Tahun</th>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td><?php echo $ambil['tahun']; ?></td>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr> 
                                <tr>
                                    <th>Download File</th>                                    
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                </tr>                                
                                <tr>
                                    <td><a href="pengajuan arsip/<?php echo $ambil['file']; ?>" class="btn btn-success" download>Klik Disini</a></td>                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>        
<?php 
include('footer.php');}
     else{
        echo "<script>window.alert('Anda Bukan Superadmin');window.location='index.php';</script>";        
    }    
?>                                              