<?php 
if ($_POST) {
	$nama_jurusan=$_POST['nama_jurusan'];
	if (empty($nama_jurusan)) {
		echo "<script>alert('Nama Jurusan Tidak Boleh Kosong');location.href='tambah_jurusan.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into jurusan (nama_jurusan) value ('".$nama_jurusan."')");
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datajurusan.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_jurusan.php';</script>";
		}
	}
}
?>