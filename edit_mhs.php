<?php
include "koneksi.php";
include "css.php";
$qry_get_mahasiswa=mysqli_query($koneksi,"select * from mahasiswa where id_mahasiswa = '".$_GET['id_mahasiswa']."'");
$data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
?>
<body>
<body style="background-color:red;">
	<h3>Ubah Data Mahasiswa</h3>
	<form action="proses_edit.php" method="post">
		<input type="hidden" name="id_mahasiswa" value= "<?=$data_mahasiswa['id_mahasiswa']?>">
		Nama:
		<input type="text" name="nama" value= "<?=$data_mahasiswa['nama']?>" class="form-control">
		Nim:
		<input type="text" name="nim" value= "<?=$data_mahasiswa['nim']?>" class="form-control">
		Alamat :
		    <input type="text" name="alamat" value= "<?=$data_mahasiswa['alamat']?>" class="form-control">
        	<form action="datamahasiswa.php" method="post">
       Jurusan :
       
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
		<input type="text" name="username" value= "<?=$data_mahasiswa['username']?>" class="form-control">
		Password  :
			<input type="password" name="password" value= "<?=$data_mahasiswa['password']?>" class="form-control">

<input type="submit" name="simpan" value="Ubah Data Mahasiswa" class="btn btn-primary">

	</form>
	</form>
	</body>
	