<?php 
if ($_POST) {
	$id_dosen=$_POST['id_dosen'];
	$nama_dosen=$_POST['nama_dosen'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	if (empty($nama_dosen)) {
		echo "<script>alert('Nama Dosen tidak boleh kosong');location.href='edit_dosen.php';</script>";
	}elseif (empty($alamat)) {
		echo "<script>alert('Alamat tidak boleh kosong');location.href='edit_dosen.php';</script>";	
	}elseif (empty($telepon)) {
		echo "<script>alert('Telepon tidak boleh kosong');location.href='edit_dosen.php';</script>";	
	}else{
		include "koneksi.php";
		if (empty($telepon)) {
			$update=mysqli_query($conn, "update dosen set nama_dosen='".$nama_dosen."',alamat='".$alamat."',telepon='".$telepon."' where id_dosen='".$id_dosen."'") or die(mysqli_error($conn));
			if ($update) {
				echo "<script>alert ('Sukses update data');location.href='datadosen.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update data');location.href='edit_dosen.php?id_dosen=".$id_dosen."';</script>";
			}
		} else{
			$update=mysqli_query($koneksi, "update dosen set nama_dosen='".$nama_dosen."',alamat='".$alamat."',telepon='".$telepon."' where id_dosen= '".$id_dosen."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update data');location.href='datadosen.php';</script>";	
			} else{
				echo "<script>alert('Gagal update data');location.href='edit_dosen.php?id_dosen=".$id_dosen."';</script>";
			}
		}
	}
}
?>