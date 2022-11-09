<?php 
	if($_GET['id_mahasiswa']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi, "delete from mahasiswa where id_mahasiswa='".$_GET['id_mahasiswa']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses Hapus Mahasiswa');location.href='datamahasiswa.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus Mahasiswa');location.href='datamahasiswa.php';</script>";
		}
	}
?>