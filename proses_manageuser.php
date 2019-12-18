<?php
 include('koneksi/koneksi.php');
 $tipe = @$_GET['tipe'];
 $id = @$_GET['id']; 
 if ($tipe=='activate') {    
   $update = mysqli_query($koneksi,"UPDATE tbuser SET status='aktif' WHERE user_id='$id'");
   if ($update) {
      echo "<script>window.alert('Data User Status Aktif');window.location='manageuser.php'</script>";
   }
   else {
      echo "<script>window.alert('Gagal Update');window.location='manageuser.php'</script>";
   }
 }elseif ($tipe=='deactivate') {
   $update = mysqli_query($koneksi,"UPDATE tbuser SET status='tidak aktif' WHERE user_id='$id'");
   if ($update) {
      echo "<script>window.alert('Data User Status Tidak Aktif');window.location='manageuser.php'</script>";
   }
   else {
      echo "<script>window.alert('Gagal Update');window.location='manageuser.php'</script>";
   }
 }else{

 }
?>