<?php 
if ($_POST) {
	$id_mahasiswa=$_POST['id_mahasiswa'];
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	if (empty($nama)) {
		echo "<script>alert('Nama tidak boleh kosong');location.href='edit._mhs.php';</script>";	
}
		} else{
			$update=mysqli_query($koneksi, "update mahasiswa set nama='".$nama."',nim='".$nim."',alamat='".$alamat."'where id_mahasiswa= '".$id_mahasiswa."'") or die(mysqli_error($koneksi));
			if ($update) {
				echo "<script>alert('Sukses update data');location.href='datamahasiswa.php';</script>";	
			} else{
				echo "<script>alert('Gagal update data');location.href='edit._mhs.php?id_mhs=".$id_mahasiswa."';</script>";
			}
		}
	}
}
?>