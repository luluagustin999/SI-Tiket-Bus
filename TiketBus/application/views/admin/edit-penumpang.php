<!DOCTYPE html>
<html>
<head>
	<title>Edit Penumpang</title>
	<link rel="icon" href="<?= base_url('assets/favicon.png') ?>" type="image/png">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php include 'include/nav.php'; ?>

	<div class="container-fluid my-4">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center bg-primary text-white">Edit User</div>
					<div class="card-body">
						<form action="<?= base_url('edit-penumpang') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_penumpang->id  ?>">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" required value="<?= $data_penumpang->nama ?>">
							</div>

							<div class="form-group">
								<label>No. Identitas</label>
								<input type="text" name="no_identitas" class="form-control" required value="<?= $data_penumpang->no_identitas ?>">
							</div>

							<button class="btn btn-block btn-success">Edit User</button>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>