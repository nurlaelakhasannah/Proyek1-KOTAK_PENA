<?php 
	include 'koneksi/koneksi.php';
	session_start();
		if(isset($_POST['submit'])){
            $judul = $_POST['judulproker'];
            $divisi = $_POST['divisi'];
            $subdivisi = $_POST['subdivisi'];
            $tahun = $_POST['tahun'];
            $deskripsi = $_POST['deskripsi'];
			$user_id = $_SESSION['userid'];

			$ekstensi_diperbolehkan	= array('doc','pdf','docx');
			$file = $_FILES['file']['name'];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			// echo $ekstensi;
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'pengajuan proker/'.$file);
					$query = mysqli_query($koneksi,"INSERT INTO proker VALUES(NULL, '$user_id','$judul', '$divisi', '$subdivisi', '$deskripsi','$tahun','proses', '$file')");
					if($query){
						echo "<script>window.alert('Proker Berhasil Diajukan');window.location='manageproker.php';</script>"; 
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>