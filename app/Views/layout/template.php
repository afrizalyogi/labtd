<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>Laboratorium Teknik Digital - Universitas Lampung</title>
		<meta content="" name="description" />
		<meta content="" name="keywords" />

		<!-- Favicons -->
		<link href="<?= base_url('./frontend/assets/img/favicon.png') ?>" rel="icon" />

		<!-- Google Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
			rel="stylesheet" />

		<!-- Vendor CSS Files -->
		<link href="<?= base_url('./frontend/assets/vendor/aos/aos.css') ?>" rel="stylesheet" />
		<link
			href="<?= base_url('./frontend/assets/vendor/bootstrap/css/bootstrap.min.css') ?>"
			rel="stylesheet" />
		<link
			href="<?= base_url('./frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>"
			rel="stylesheet" />
		<link href="./frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
		<link
			href="<?= base_url('./frontend/assets/vendor/glightbox/css/glightbox.min.css') ?>"
			rel="stylesheet" />
		<link href="./frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
		<link href="<?= base_url('./frontend/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet" />

		<!-- Template Main CSS File -->
		<link href="<?= base_url('./frontend/assets/css/style.css') ?>" rel="stylesheet" />
	</head>

	<body>
	<?= $this->include('layout/navbar'); ?>

	<?= $this->renderSection('content'); ?>

	<?= $this->include('layout/footer'); ?>

	<!-- Vendor JS Files -->
	<script src="./frontend/assets/vendor/aos/aos.js"></script>
		<script src="./frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="./frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="./frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>

		<!-- Template Main JS File -->
		<script src="./frontend/assets/js/main.js"></script>
	</body>
</html>
