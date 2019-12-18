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
            <div class="card">
                <div class="card-body">
                    <form action="proses_ajukanproker.php" method="POST" enctype="multipart/form-data">
                        <label for="divisi"><strong>Asal Divisi</strong></label>
                        <select name="divisi" id="divisi" class="form-control" >
                            <option value="">[Pilih Divisi]</option>
                            <option value="PSDA">PSDA</option>
                            <option value="Humas">HUMAS</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Broadcasting">Broadcasting</option>
                            <option value="Pers">PERS</option>
                        </select>  

                        <label for="subdivisi"><strong>Asal Subdivisi</strong></label>
                        <select name="subdivisi" id="subdivisi" class="form-control" >
                            <option value="">[Pilih Subdivisi]</option>
                            <option value="Editing Image">Editing Image</option>
                            <option value="Editing video">Editing Video</option>
                            <option value="Photograpy">Photografer</option>
                            <option value="Videograpy">Videografer</option>
                            <option value="Penulis">Penulis</option>
                            <option value="Reporter">Reporter</option>
                        </select>            

                        <label for="judulproker"><strong>Judul Proker</strong></label>
                        <input type="text" class="form-control" name="judulproker" placeholder="Masukan Judul Proker">

                        <label for="deskripsi"><strong>Deskripsi Proker</strong></label>
                        <input type="textarea" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Proker . .">

                        <label for="tahun"><strong>Tahun</strong></label>
                        <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun Pengajuan">
                       
                        <label for="file"><strong>File</strong></label>
                        <input type="file" class="form-control" name="file">
                        
                        <button class="btn btn-primary btn-block" name="submit">Ajukan Proker</button>
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