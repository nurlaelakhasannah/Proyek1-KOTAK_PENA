<?php
 include('koneksi/koneksi.php');
 $tipe = @$_GET['tipe'];
 $id = @$_GET['id']; 
 if ($tipe=='acc') {    
   $update = mysqli_query($koneksi,"UPDATE proker SET status='di terima' WHERE proker_id='$id'");
   if ($update) {
      echo "<script>window.alert('Data Proker Status Di Terima');window.location='manageproker.php'</script>";
   }
   else {
      echo "<script>window.alert('Gagal Update');window.location='manageproker.php'</script>";
   }
 }elseif ($tipe=='nacc') {
   $update = mysqli_query($koneksi,"UPDATE proker SET status='tidak diterima' WHERE proker_id='$id'");
   if ($update) {
      echo "<script>window.alert('Data Proker Status Tidak di Terima ');window.location='manageproker.php'</script>";
   }
   else {
      echo "<script>window.alert('Gagal Update');window.location='manageproker.php'</script>";
   }
 }elseif ($tipe=='delete') {
    $pilih = mysqli_query($koneksi,"SELECT * FROM proker WHERE proker_id='$id'");
    $ambil = mysqli_fetch_assoc($pilih);
    $path ='pengajuan proker/';
    chmod($path.$ambil['file'],0777);
    if (file_exists($path.$ambil['file'])) {   
      unlink($path.$ambil['file']);
    }
    $update = mysqli_query($koneksi,"DELETE FROM proker WHERE proker_id='$id'");
   echo "<script>window.alert('Data Proker Telah Di Hapus ');window.location='manageproker.php'</script>";   
  }
 else{

 }
?>