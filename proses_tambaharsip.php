<?php 
	include 'koneksi/koneksi.php';
	session_start();
		if(isset($_POST['submit'])){
            $nama = $_POST['namaarsip'];
            $katarsip = $_POST['katarsip'];
            $tahun = $_POST['tahun'];
			$user_id = $_SESSION['userid'];

			$ekstensi_diperbolehkan	= array('doc','pdf','docx', 'jpg', 'jpeg', 'png');
			$file = $_FILES['file']['name'];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			// echo $ekstensi;
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'pengajuan arsip/'.$file);
					$query = mysqli_query($koneksi,"INSERT INTO arsip VALUES(NULL, '$user_id','$nama','$katarsip', '$tahun', '$file')");
					if($query){
						echo "<script>window.alert('file Berhasil di Upload');window.location='managearsip.php';</script>"; 
					}else{
						echo "<script>window.alert('file Gagal di Upload');window.location='tambah_arsip.php';</script>";
					}
				}else{
					echo "<script>window.alert('Ukuran file terlalu besar');window.location='tambah_arsip.php';</script>";
				}
			}else{
				echo "<script>window.alert('Extensi File tidak diperbolehkan');window.location='tambah_arsip.php';</script>";
			}
		}
		?>