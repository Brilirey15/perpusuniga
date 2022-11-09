<html>
    <head>
        <title>edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
<?php
include "koneksi.php";

$qry_get_jadwal = mysqli_query($koneksi,"select * from jadwalkuliah where id_jadwal ='".$_GET['id_jadwal']."'" );
$data_jadwal=mysqli_fetch_array($qry_get_jadwal);
?>

<h3>ubah Mahasiswa</h3>
<form action="proses_edit_jadwal.php" method="post">
    <input type="hidden" name= "id_jadwal" value= "<?=$data_jadwal ['id_jadwal']?>">
    hari :
    <input type="text" name="hari" value= "<?=$data_jadwal['hari']?>"  class= "form-control"><br>
    jam : 
    <input type="text" name="jam" value= "<?=$data_jadwal['jam']?>" class= "form-control"><br>
    matakuliah :
    <input type="text" name="matakuliah" value= "tidak diizinkan diubah" style="color: red;"  class= "form-control" disabled><br>
    dosen : 
    <input type="text" name="dosen" value= "tidak diizinkan diubah" style="color: red;" class= "form-control" disabled><br>
    <input type="submit" name="simpan" value= "simpan" class="btn btn-primary">

</form>
</form>
<body style="background-color:red;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>