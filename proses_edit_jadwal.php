<?php 
if ($_POST) {
	$id_jadwal=$_POST['id_jadwal'];
	$hari=$_POST['hari'];
	$jam=$_POST['jam'];
	if (empty($hari)) {
		echo "<script>alert('data inputan tidak boleh kosong');location.href='edit_jadwal.php';</script>";
	}else{
		include "koneksi.php";
		if (empty($jam)) {
			$update=mysqli_query($koneksi, "update jadwalkuliah set hari='".$hari."', jam='".$jam."' where id_jadwal='".$id_jadwal."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert ('Sukses update data');location.href='datajadwal.php';</script>";
			} else{
				 echo "<script>alert ('Gagal update data');location.href='edit_jadwal.php?id_jadwal=".$id_jadwal."';</script>";
			}
		} else{
			$update=mysqli_query($koneksi, "update jadwalkuliah set hari='".$hari."', jam='".$jam."' where id_jadwal= '".$id_jadwal."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update data');location.href='datajadwal.php';</script>";	
			} else{
				echo "<script>alert('Gagal update data');location.href='edit_jadwal.php?id_jadwal=".$id_jadwal."';</script>";
			}
		}
	}
}
?>