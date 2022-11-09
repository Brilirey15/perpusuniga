<html>
    <head>
        <title>edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
<?php
include "koneksi.php";

$qry_get_matkul = mysqli_query($koneksi,"select * from matakuliah where id_matkul ='".$_GET['id_matkul']."'");
$data_matkul=mysqli_fetch_array($qry_get_matkul);
?>

<h3>Ubah Jurusan</h3>
<form action="proses_edit_matkul.php" method="post">
    <input type="hidden" name= "id_matkul" value= "<?=$data_matkul ['id_matkul']?>">
    Nama Matakuliah:
    <input type="text" name="nama_matkul" value= "<?=$data_matkul['nama_matkul']?>"class= "form-control"><br>
    <input type="submit" name="simpan" value= "simpan" class="btn btn-primary">
</form>
</form>
<body style="background-color:red;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>