<?php 
	if($_GET['id_jadwal']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi, "delete from jadwalkuliah where id_jadwal='".$_GET['id_jadwal']."'");
		if ($qry_hapus) {
			echo "<script>alert('Sukses Hapus Jurusan');location.href='datajadwal.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus Jurusan');location.href='datajadwal.php';</script>";
		}
	}
?>