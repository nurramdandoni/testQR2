<!DOCTYPE html>
<html>
<head>
	<title>Input Data Ke Database Tanpa Reload Dengan Ajax JQuery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<h1>Membuat Input Data Ke Database Tanpa Reload Dengan QRCODE Ajax JQuery</h1>

	

	
	<div class="wrap" style="display: inline-block;">


		

	<!-- 	<form method="post" class="form-user">		
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td><input type="text" name="pekerjaan"></td>
				</tr>
				<tr>
					<td></td>
					<td><a class="tombol-simpan">Simpan</a></td>
				</tr>
			</table>
		</form> -->


		<div class="tampildata"></div>

	</div>

	<?php 

	include "phpqrcode-master/qrlib.php";

	QRcode::png('aksi_qr.php?nama=doni&alamat=citundun&pekerjaan=penjahit', 'kode.png', 'L', 16, 1);

	?>
	<div style="display: inline-block; align-content: center;"><img src='kode.png' width="300" /></div>

	<script type="text/javascript">
		$(document).ready(function(){

			selesai();


			$(".tombol-simpan").click(function(){
				var data = $('.form-user').serialize();
				$.ajax({
					type: 'POST',
					url: "aksi.php",
					data: data,
					success: function() {
						$('.tampildata').load("tampil.php");
					}
				});
			});


			function selesai(){
				setTimeout(function(){
					update();
					selesai();
				}, 100);
			}

			function update(){

				$('.tampildata').load("tampil.php");

			}





		});
	</script>
</body>
</html>