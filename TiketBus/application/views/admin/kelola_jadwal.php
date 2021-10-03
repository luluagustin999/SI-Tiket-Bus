<!DOCTYPE html>
<html>
<head>
	<title>Kelola Jadwal - Admin</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php include'include/nav.php'; ?>

	<div class="container-fluid my-4">
		<div class="row">	
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-primary text-white text-center"><b>Data Jadwal</b></div>
					<div class="card-body">
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Bus</th>
									<th>Asal</th>
									<th>Tujuan</th>
									<th>Tanggal Berangkat</th>
									<th>Tanggal Sampai</th>
									<th>Kelas</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($jadwal as $jd): ?>
								<tr>
									<td><?= $no++  ?></td>
									<td><?= $jd->nama_bus  ?></td>
									<td><?= $jd->ASAL  ?></td>
									<td><?= $jd->TUJUAN  ?></td>
									<td><?= $jd->tgl_berangkat  ?></td>
									<td><?= $jd->tgl_sampai  ?></td>
									<td><?= $jd->kelas  ?></td>
									<td>
										<div class="btn-group btn-group-sn">
											<a class="btn btn-success text-white" href="<?= base_url('admin/dashboard/edit-jadwal/'.$jd->id) ?>">Edit</a>
											<a class="btn btn-danger text-white" href="<?= base_url('hapusJadwal/'.$jd->id) ?>">Hapus</a>
										</div>
									</td>

								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
					
				</div>
			</div>

				<div class="col-md-4">
					<div class="card">
						<div class="card-header bg-primary text-white"><b>Menambahkan Jadwal</b></div>
					</div>
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('tambahJadwal')  ?>" method="POST">

								<div class="form-group">
									<label>Nama Bus</label>
									<input type="text" name="nama_bus" placeholder="Masukan Nama Bus" class="form-control" required>
								</div>

								<div class="form-group">
									<label>Terminal Asal</label>
									<select name="asal" class="form-control" required>
										<?php foreach ($terminal as $tr): ?>
										<option value="<?= $tr->id ?>"><?= $tr->lokasi_terminal ?></option>
										<?php endforeach ?>
									</select>
								</div>

								<div class="form-group">
									<label>Terminal Tujuan</label>
									<select name="tujuan" class="form-control" required>
										<?php foreach ($terminal as $tr): ?>
										<option value="<?= $tr->id ?>"><?= $tr->lokasi_terminal ?></option>
										<?php endforeach ?>
									</select>
								</div>

								<div class="form-group">
									<label>Tanggal Berangkat</label>
										<input type="datetime-local" name="tgl_berangkat" class="form-control" min="<?= date('Y-m-d\TH:i') ?>" value='<?= date('Y-m-d\TH:i') ?>' required>  
								</div>

								<div class="form-group">
									<label>Tanggal Sampai</label>
										<input type="datetime-local" name="tgl_sampai" min="<?= date('Y-m-d\TH:i') ?>" class="form-control" value='<?= date('Y-m-d\TH:i') ?>' required> 
								</div>

								<div class="form-group">
									<label>Kelas</label>
									<select name="kelas" class="form-control" required>
										<option value="EKONOMI">EKONOMI</option>
										<option value="BISNIS">BISNIS</option>
										<option value="VIP">VIP</option>
									</select>
								</div>

								<div class="form-group">
									<label>Harga</label>
									<input type="number" name='harga' placeholder='Harga' class='form-control' required>
								</div>

								<button class="btn btn-block btn-success">Tambahkan Jadwal</button>
							</form>
						</div>
					</div>
				</div>
		</div>
		
	</div>


	<script src='assets/js/bootstrap.min.js'></script>
</body>
</html>