<?php
 include('koneksi/koneksi.php');
 $tipe = @$_GET['tipe'];
 $id = @$_GET['id']; 
 if ($tipe=='delete') {
    $delete = mysqli_query($koneksi,"DELETE FROM arsip WHERE arsip_id='$id'");
       echo "<script>window.alert('Data Arsip Telah Di Hapus ');window.location='managearsip.php'</script>";   
  }
 else{

 }
?>