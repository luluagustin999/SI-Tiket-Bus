<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	
	<?php include'include/nav.php'; ?>

	<div class="container-fluid my-4">
		<div class="row">	
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-primary text-white text-center"><b>Daftar Terminal</b></div>
					<div class="card-body">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Lokasi Terminal </th>
									<th> </th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1; ?>
								<?php foreach ($terminal as $tr): ?>
								<tr>
									<td><?= $no++  ?></td>
									<td><?= $tr ->lokasi_terminal  ?></td>
									<td>
										<div class="btn-group btn-group-sn">
											<a class="btn btn-success text-white" href="<?= base_url('admin/dashboard/edit/'.$tr->id)  ?>">Edit</a>
											<a class="btn btn-danger text-white" href="<?= base_url('hapusTerminal/'.$tr->id)  ?>">Hapus</a>
										</div>

									</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header bg-primary text-white"><b>Menambahkan Terminal</b></div>
					</div>
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('tambahTerminal')  ?>" method="POST">
								<div class="form-group">
									<label>Lokasi Terminal</label>
									<input type="text" class="form-control" name="terminal" placeholder="Masukan Lokasi Terminal">
								</div>

								<button class="btn btn-block btn-success">Tambahkan</button>
							</form>
						</div>
					</div>
				</div>
		</div>
		
	</div>


	<script src='assets/js/bootstrap.min.js'></script>
</body>
</html>