<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand" href="#"><b>Admin E-BUS</b></a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

	    </ul>
	    <span class="navbar-text">
	        <a class="text-white btn btn-danger" href="<?= base_url('logout')?>" style="text-decoration: none"><b>Logout</b></a>
	      </span>
	    </div>
	</nav>


		<div class="container-fluid my-5">
			<div class="row">	
			<div class="col-md-3">
				<div class="card bg-primary ml-3" style="width: 15rem;">
				  <div class="card-body">
				    <h5 class="card-title text-white text-center"><b>Kelola Terminal</b></h5>
				    <br>
				    <br>
				    <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-success float-right text-white">Lihat Detail</a>
				  </div>
				</div>
			</div>


			<div class="col-md-3">
				<div class="card bg-primary ml-3" style="width: 15rem;">
				  <div class="card-body">
				    <h5 class="card-title text-white text-center"><b>Kelola Jadwal</b></h5>
				    <br>
				    <br>
				    <a href="<?= base_url('admin/dashboard/kelola-jadwal') ?>" class="btn btn-success float-right text-white">Lihat Detail</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card bg-primary ml-3" style="width: 15rem;">
				  <div class="card-body">
				    <h5 class="card-title text-white text-center"><b>Data User</b></h5>
				    <br>
				    <br>
				    <a href="<?= base_url('admin/dataPenumpang') ?>" class="btn btn-success float-right text-white">Lihat Detail</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card bg-primary ml-3" style="width: 15rem;">
				  <div class="card-body">
				    <h5 class="card-title text-white text-center"><b>Konfirmasi Pembayaran</b></h5>
				    <br>
				  
				    <a href="<?= base_url('admin/konfirmasi-pembayaran') ?>" class="btn btn-success float-right text-white">Lihat Detail</a>
				  </div>
				</div>
			</div>

			</div>
		</div>
 
</body>