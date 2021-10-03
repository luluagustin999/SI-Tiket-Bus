<!DOCTYPE html>
<html>
<head>
	<title>Data User - Admin</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php include'include/nav.php'; ?>

	<div class="container-fluid my-4">
		<div class="row justify-content-center">	
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-primary text-white text-center"><b>Data User</b></div> 
					<div class="card-body">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>No. Tiket</th>
									<th>Nama</th>
									<th>No. Identitas</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($penumpang as $pm): ?>
								<tr>
									<td><?= $no++  ?></td>
									<td><?= $pm->nomor_tiket  ?></td>
									<td><?= $pm->nama  ?></td>
									<td><?= $pm->no_identitas  ?></td>
									<td>
										<a class="btn btn-block btn-success text-white" href="<?= base_url('admin/HalEditPenumpang/'. $pm->id) ?>">Edit</a>
									</td>
								</tr>
								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
	</div>
</body>

