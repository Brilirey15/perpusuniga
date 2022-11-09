<?php 
if ($_POST) {
	$id_matkul=$_POST['id_matkul'];
	$nama_matkul=$_POST['nama_matkul'];
	if (empty($nama_matkul)) {
		echo "<script>alert('Nama Matakuliah tidak boleh kosong');location.href='edit_matkul.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($nama_matkul)) {
			$update=mysqli_query($koneksi, "update matakuliah set nama_matkul='".$nama_matkul."' where id_matkul='".$id_matkul."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert ('Sukses update data');location.href='datamatkul.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update data');location.href='edit_matkul.php?id_matkul=".$id_matkul."';</script>";
			}
		} else{
			$update=mysqli_query($koneksi, "update matakuliah set nama_matkul='".$nama_matkul."' where id_matkul= '".$id_matkul."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update data');location.href='datamatkul.php';</script>";	
			} else{
				echo "<script>alert('Gagal update data');location.href='edit_matkul.php?id_matkul=".$id_matkul."';</script>";
			}
		}
	}
}
?>