<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $data_jurusan = $_POST['id_jurusan'];

    if (empty($nama)) {
        echo "<script>alert('nama mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } elseif (empty($nim)) {
        echo "<script>alert('nim mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>"; 

    }else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi, "insert into mahasiswa (nama,nim,alamat,id_jurusan)
        value ('".$nama."','".$nim."','".$alamat."','".$data_jurusan."')") or die (mysqli_error($koneksi));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data mahasiswa');location.href='proses_tambah_mhs.php'</script>";
        }
    }
}
?>
