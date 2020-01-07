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
                    <form action="proses_ajukanprokerSA.php" method="POST" enctype="multipart/form-data">
                        <label for="divisi"><strong>Asal Divisi</strong></label>
                        <select name="divisi" id="divisi" class="form-control" >
                            <option value="">[Pilih Divisi]</option>
                            <option value="psda">PSDA</option>
                            <option value="humas">HUMAS</option>
                            <option value="perusahaan">Perusahaan</option>
                            <option value="multimedia">Multimedia</option>
                            <option value="broadcasting">Broadcasting</option>
                            <option value="pers">PERS</option>
                        </select>  

                        <label for="subdivisi"><strong>Asal Subdivisi</strong></label>
                        <select name="subdivisi" id="subdivisi" class="form-control" >
                            <option value="">[Pilih Subdivisi]</option>
                            <option value="edimage">Editing Image</option>
                            <option value="edvideo">Editing Video</option>
                            <option value="photografi">Photografer</option>
                            <option value="videografi">Videografer</option>
                            <option value="penulis">Penulis</option>
                            <option value="reporter">Reporter</option>
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