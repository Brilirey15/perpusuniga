<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Mata Kuliah</title>
</head>
<body>
<body style="background-color:red;">
	<h3>Data Mata Kuliah</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA MATA KULIAH</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_matkul=mysqli_query($koneksi,"select *from matakuliah");
			$no=0;
			while($data_matkul=mysqli_fetch_array ($qry_matkul)){
				$no++;?>
			<tr>
                <td><?=$no?></td>
				<td><?=$data_matkul['nama_matkul']?></td>              
            <td><a href = "edit_matkul.php?id_matkul=<?=$data_matkul['id_matkul']?>"
            class= "btn btn-success">edit</a>
            <a href ="hapus_matkul.php?id_matkul=<?=$data_matkul['id_matkul']?>"
            onclick="return confirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">
            hapus</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<center>
	<a href="tambah_matkul.php" class="btn btn-primary">tambah matakuliah</a>
</body>
</html>
<?php 
	include "footer.php"; 
?>