<?php 
if ($_POST) {
	$nama_matkul=$_POST['nama_matkul'];
	if (empty($nama_matkul)) {
		echo "<script>alert('Nama Matakuliah Tidak Boleh Kosong');location.href='tambah_matkul.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into matakuliah (nama_matkul) value ('".$nama_matkul."')");
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datamatkul.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_matkul.php';</script>";
		}
	}
}
?>