<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Jadwal</title>
</head>
<body>
<body style="background-color:red;">
	<h3>Data Jadwal Kuliah</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>HARI</th>
				<th>JAM</th>
				<th>MATA KULIAH</th>
				<th>DOSEN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_jadwal=mysqli_query($koneksi,"select * from jadwalkuliah join matakuliah on matakuliah.id_matkul=matakuliah.id_matkul join dosen on dosen.id_dosen=dosen.id_dosen");
			$no=0;
			while($data_jadwal=mysqli_fetch_array ($qry_jadwal)){
				$no++;?>
			<tr>
                <td><?=$no?></td>
				<td><?=$data_jadwal['hari']?></td> 
				<td><?=$data_jadwal['jam']?></td> 
				<td><?=$data_jadwal['nama_matkul']?></td> 
				<td><?=$data_jadwal['nama_dosen']?></td>              
            <td><a href = "edit_jadwal.php?id_jadwal=<?=$data_jadwal['id_jadwal']?>"
            class= "btn btn-success">edit</a>
            <a href ="hapus_jadwal.php?id_jadwal=<?=$data_jadwal['id_jadwal']?>"
            onclick="return confirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">
            hapus</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<center>
	<a href="tambah_jadwal.php" class="btn btn-primary">tambah jadwal kuliah</a>
</body>
</html>
<?php 
	include "footer.php"; 
?>