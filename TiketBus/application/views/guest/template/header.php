<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.jumbotron{
	background:url('<?= base_url("assets/bg.png") ?>')
}
.shadow{
	text-shadow: 2px 3px 4px #3c3c3c;
}	
</style>
<body  <?php if($this->uri->segment(1) === 'print'): ?>  onload="window.print()" <?php else: endif; ?>  >
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#"><b>E-BUS </b></a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url()?>"><b>Home </b><span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url('konfirmasi')?>"><b>Konfirmasi Pembayaran</b></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?= base_url('jadwal')?>"><b>Cek Jadwal Bus</b></a>
	      </li>
	    </ul>
	  </div>
	</nav>
