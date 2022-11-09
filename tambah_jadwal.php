<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
    <h3>Tambah data jadwal</h3>
<form action="proses_tambah_jadwal.php" method="POST">
    hari		:
    <input type="text" name ="hari" class="form-control" placeholder="masukkan hari disini"><br>
    jam			:
    <input type="number" name="jam" class="form-control" placeholder="masukkan jam disini"> <br>
    matakuliah	:
	<select class="form-control">
		<option></option>
		<?php 
		include "koneksi.php";
		$qry_matkul=mysqli_query($koneksi,"select * from matakuliah");
		while ($data_matkul=mysqli_fetch_array($qry_matkul)) {
		echo '<option value="'.$data_matkul['nama_matkul'].'">'.$data_matkul['nama_matkul'].'</option>';
		}
		?>
	</select><br>
	dosen		:
    <select class="form-control">
		<option></option>
		<?php 
		include "koneksi.php";
		$qry_dosen=mysqli_query($koneksi,"select * from dosen");
		while ($data_dosen=mysqli_fetch_array($qry_dosen)) {
		echo '<option value="'.$data_dosen['nama_dosen'].'">'.$data_dosen['nama_dosen'].'</option>';
		}
		?>
	</select><br>
    <input type="submit" name="simpan" value="tambah jadwal" class="btn btn-primary">
</from>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>