<?php 
     session_start();
     include 'koneksi/koneksi.php';
     if ($_SESSION['level']==NULL) {
         echo "<script>window.location='index.php'</script>";
     } 
     if (@$_SESSION['level']=='pengurus') {
         echo "<script>window.location='header_pengurus.php'</script>";
     } 
     else if (@$_SESSION['level']=='superadmin') {
         include('header.php');
?>
   <div class="main-content">
         <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="proses_tambaharsip.php" method="POST" enctype="multipart/form-data">
                        <label for="namaarsip"><strong>Nama Arsip</strong></label>
                        <input type="text" class="form-control" name="namaarsip" autocomplete="off" placeholder="Masukan Nama Arsip" required>
                       
                        <label for="katarsip"><strong>Kategori Arsip</strong></label>
                        <select name="katarsip" id="katarsip" class="form-control" >
                            <option value="">[Pilih Kategori Arsip]</option>
                            <option value="proker">Arsip Proker</option>
                            <option value="dokumen">Arsip Dokumen</option>
                        </select>            

                        <label for="tahun"><strong>Tahun</strong></label>
                        <input type="text" class="form-control" name="tahun" autocomplete="off" placeholder="Masukan Tahun Pengajuan" required>
                       
                        <label for="file"><strong>File</strong></label>
                        <input type="file" class="form-control" name="file" required>
                        
                        <button class="btn btn-primary btn-block" name="submit">Tambah Arsip</button>
                    </form>
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