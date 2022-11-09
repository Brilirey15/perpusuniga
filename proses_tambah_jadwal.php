<?php 
if ($_POST) {
	$hari=$_POST['hari'];
    $jam=$_POST['jam'];
    $data_matkul=$_POST['id_matkul'];
    $data_dosen=$_POST['id_dosen'];

	if (empty($hari)) {
		echo "<script>alert('Hari Tidak Boleh Kosong');location.href='tambah_jadwal.php';</script>";
    }elseif (empty($jam)) {
		echo "<script>alert('Jam Tidak Boleh Kosong');location.href='tambah_jadwal.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into jadwalkuliah (hari, jam, id_matkul, id_dosen) value ('".$hari."','".$jam."','".$data_matkul."','".$data_dosen."')")or die(mysqli_error($koneksi));
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datajadwal.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_jadwal.php';</script>";
		}
	}
}
?>