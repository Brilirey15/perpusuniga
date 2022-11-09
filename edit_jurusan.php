<html>
    <head>
        <title>edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
<?php
include "koneksi.php";

$qry_get_mahasiswa = mysqli_query($koneksi,"select * from jurusan where id_jurusan ='".$_GET['id_jurusan']."'");
$data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
?>

<h3>Ubah Jurusan</h3>
<form action="proses_edit_jurusan.php" method="post">
    <input type="hidden" name= "id_jurusan" value= "<?=$data_mahasiswa ['id_jurusan']?>">
    nama :
    <input type="text" name="nama_jurusan" value= "<?=$data_mahasiswa['nama_jurusan']?>"  class= "form-control"><br>
    <input type="submit" name="simpan" value= "simpan" class="btn btn-primary">
</form>
</form>
<body style="background-color:red;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>