<?php 
include 'koneksi.php';
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];

mysqli_query($konek, "insert into user values('','$nama','$alamat','$pekerjaan')");

header('location: localhost/testQR');


?>