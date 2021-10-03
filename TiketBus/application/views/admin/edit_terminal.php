<!DOCTYPE html>
<html>
<head>
	<title>Edit Terminal - Admin</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php include'include/nav.php'; ?>

	<div class="container-fluid my-4">
		<div class="row justify-content-center">	
			<div class="col-md-4">
				<div class="card">
					<div class="card-header bg-primary text-white text-center"><b>Edit Terminal</b></div>
					<div class="card-body">
						
						<form action="<?=base_url('editTerminal')  ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_terminal->id  ?>">
							<div class="form-group">
								<label>Nama Terminal</label>
								<input type="text" class="form-control" name="lokasi_terminal" value="<?=$data_terminal->lokasi_terminal ?>">
							</div>

							<button class="btn btn-danger btn-block">Edit Data</button>
						</form>

					</div>
					
				</div>
			</div>

				
		</div>
		
	</div>


	<script src='assets/js/bootstrap.min.js'></script>
</body>
</html>