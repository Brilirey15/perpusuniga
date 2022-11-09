<!DOCTYPE html>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <title>Perpustakaan</title>
</head>
<body>
     <h3>Tambah Data Mahasiswa</h3>
     <form action="proses_tambah_mhs.php" method="post">
          Nama :
          <input type="text" name="nama" value="" class="form-control">
          Nim  :
               <input type="text" name="nim" value="" class="form-control">
        MataKuliah :
       
       <select name="id_jurusan" class="form-select form-control" aria-label=".form-select-sm example">
        <option></option> 
        <?php
        include "koneksi.php";
        $qry_jurusan = mysqli_query($koneksi,"select * from jurusan ");
        while ($data_jurusan = mysqli_fetch_array($qry_jurusan)){
          echo '<option value="' .$data_jurusan['id_jurusan']. '">' .$data_jurusan['nama_jurusan']. '</option>';
        };
        ?>
</select>
          Username :
          <input type="text" name="username" value="" class="form-control">
          Password  :
               <input type="password" name="password" value="" class="form-control">
          <input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">

     </form>
</body>
</html>

