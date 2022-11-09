<?php
$koneksi=mysqli_connect('localhost','root','','perpusuniga');
if (mysqli_connect_error()) {
	printf("Connected Failed;", mysqli_connect_error());
	exit();
}
?>