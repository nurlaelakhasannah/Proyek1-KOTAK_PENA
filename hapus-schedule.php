?php 
	include 'koneksi/koneksi.php';
	$id= $_POST['id'];
	mysqli_query($koneksi,"DELETE from schedule WHERE schedule_id='".$id."'");	

?>