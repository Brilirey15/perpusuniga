<?php 
if ($_POST) {
	$id_jurusan=$_POST['id_jurusan'];
	$nama_jurusan=$_POST['nama_jurusan'];
	if (empty($nama_jurusan)) {
		echo "<script>alert('Nama Jurusan tidak boleh kosong');location.href='edit_jurusan.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($nama_jurusan)) {
			$update=mysqli_query($koneksi, "update jurusan set nama_jurusan='".$nama_jurusan."' where id_jurusan='".$id_jurusan."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert ('Sukses update data');location.href='datajurusan.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update data');location.href='edit_jurusan.php?id_jurusan=".$id_jurusan."';</script>";
			}
		} else{
			$update=mysqli_query($koneksi, "update jurusan set nama_jurusan='".$nama_jurusan."' where id_jurusan= '".$id_jurusan."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update data');location.href='datajurusan.php';</script>";	
			} else{
				echo "<script>alert('Gagal update data');location.href='edit_jurusan.php?id_jurusan=".$id_jurusan."';</script>";
			}
		}
	}
}
?>