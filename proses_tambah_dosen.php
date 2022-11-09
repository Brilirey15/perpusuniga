<?php 
if ($_POST) {
	$nama=$_POST['nama_dosen'];
    $alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	if (empty($nama)) {
		echo "<script>alert('Nama Tidak Boleh Kosong');location.href='tambah_dosen.php';</script>";
    }elseif (empty($alamat)) {
		echo "<script>alert('Alamat Tidak Boleh Kosong');location.href='tambah_dosen.php';</script>";
    }elseif (empty($telepon)) {
    	echo "<script>alert('Telepon Tidak Boleh Kosong');location.href='tambah_dosen.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into dosen (nama_dosen, alamat, telepon) value ('".$nama."','".$alamat."','".$telepon."')");
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datadosen.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_dosen.php';</script>";
		}
	}
}
?>