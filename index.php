<!DOCTYPE html>
<html>
<head>
	<title>Testing Absensi QR Code</title>


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="jquery.min.js"></script>
	<!-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->
	<script src="instascan.min.js"></script>
	<!-- <script src="vue.min.js"></script> -->
	<script src="adapter.min.js"></script>

	<style type="text/css">
	.preview{
		width: 100%;
		height: 50%;
		align-content: center;

		/*transform: rotateX(180deg);
		-webkit-transform:rotateX(180deg);  Safari and Chrome 
		-moz-transform:rotateX(180deg); /* Firefox */*/
	}

	.container{

		transform:rotateY(180deg);

	}

</style>
</head>
<body>
	<div class="container">
		<center><video id="preview" class="preview"></video></center>
	</div>
	
	<script type="text/javascript">
		let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
		scanner.addListener('scan', function (content) {
			// alert(content);

			var data_scan = content;
			window.location.href = data_scan; // metode get
			// redirect(data_scan);

			// $.post("http://localhost/instascan-master-simple/index.php", {data_hasil_scan: data_scan}); // metode post
		});
		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				scanner.start(cameras[1] || cameras[0]);// kamera depan = 0, belakang = 1
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});
	</script>
	<?php 

	// $a = $_GET['name']; // metode get
	// $a = $_POST['data_hasil_scan']; // metode post

	?>
	<!-- <input type="text" name="" value="<?php echo $a.'/doni_nurramdan' ?>"> -->

</body>
</html>