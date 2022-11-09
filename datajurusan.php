<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Jurusan</title>
</head>
<body>
<body style="background-color:red;">
	<h3>Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMA JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi,"select *from jurusan");
			while($data_mahasiswa=mysqli_fetch_array ($qry_mahasiswa)){ ?>
			<tr>
                <td><?=$data_mahasiswa['id_jurusan']?></td>
				<td><?=$data_mahasiswa['nama_jurusan']?></td>               
            <td> <a href = "edit_jurusan.php?id_jurusan=<?=$data_mahasiswa['id_jurusan']?>"
            class= "btn btn-success">edit</a>
            <a href ="hapus_jurusan.php?id_jurusan=<?=$data_mahasiswa['id_jurusan']?>"
            onclick="return confirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">
            hapus</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<center>
<a href="tambah_jurusan.php" class="btn btn-primary">tambah jurusan</a>
</body>
</html>
<?php 
	include "footer.php"; 
?>
