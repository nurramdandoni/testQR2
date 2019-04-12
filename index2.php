<?php 

include "phpqrcode-master/qrlib.php";

QRcode::png('aksi_qr.php?nama=doni&alamat=citundun&pekerjaan=penjahit', 'kode.png', 'L', 16, 1);

echo "<center><img src='kode.png' /></center>";

?>