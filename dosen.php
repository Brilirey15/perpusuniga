<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>
<body>
     <h3>Data Mahasiswa</h3>
     <a href="tambah_mahasiswa.php" type="button" class="btn btn-success">Tambah Data</a>
     <table Class="table table-hover table-striped">
     	<Thead>
     		<tr>
     		<th>NO</tH>
     		<tH>Nama</tH>
     		<th>Alamat</th>
               <tH>Aksi</tH>
     	</tR>	
     	</Thead>
     	<tbody>
     		<?php
     		include "koneksi.php";
     		$qry_mahasiswa=mysqli_query($koneksi,"select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
     		$no=0;
     		while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
     			$no++;?>
     			<tr>
     				<td><?=$no?></td>
     				<td><?=$data_mahasiswa['nama']?></td>
     				<td><?=$data_mahasiswa['alamat']?></td>
     				<td><a href="edit_mhs.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" class="btn btn-success">Edit</a>

     					<a href="delete.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
     						onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a>
     					</td>
     			</tr>
     			<?php
     		}
     		?>
     	</tbody>
     </table>
</body>
</html>