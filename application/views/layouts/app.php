<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
	<meta name="generator" content="Jekyll v3.8.5" />
	<title><?= isset($title) ? $title : 'haykalshop' ?> - Halaman utama E-commerce</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/" />

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/libs/bootstrap/bootstrap-4.3.1-dist/css/bootstrap.min.css') ?> " rel="stylesheet" />

	<!-- Fontawesome Css -->
	<link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/css/all.min.css') ?> " />

	<!-- Custom styles for this template -->
	<link href="<?= base_url('assets/css/app.css') ?> " rel="stylesheet" />

	<!-- Link Css -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?> ">

	<!-- Link untuk font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

</head>

<style>
	body {
    font-family: 'Roboto', 'Open Sans', Arial, sans-serif;
}
h1 {
    font-family: 'Roboto', sans-serif;
}

</style>

<body>
	<!-- Navbar Menu -->
	<?php $this->load->view('layouts/_navbar'); ?>
	<!-- Navbar End -->

	<!-- Content -->
	<?php $this->load->view($page); ?>
	<!-- End Content -->

	<script src="<?= base_url('/assets/libs/jquery/jquery-3.6.3.min.js') ?>"></script>
	<script src="<?= base_url('assets/libs/bootstrap/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>
