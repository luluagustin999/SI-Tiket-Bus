<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="card my-5">
					<div class="card-header bg-primary text-white text-center"><b>Login Admin</b></div>
					<div class="card-body">

						<form action="<?= base_url('prosesLogin') ?>" method="POST">

							<div class="form-group">
								<label><b>Username</b></label>
								<input type="text" name="username" placeholder="masukan username anda" class="form-control">
							</div>

							<div class="form-group">
								<label><b>Password</b></label>
								<input type="password" name="password" placeholder="masukan password anda" class="form-control">
							</div>

							<button class="btn btn-primary float-right"><b>Login</b></button>
							
						</form>
						
					</div>
				</div> 
				
			</div>
			
		</div>
	</div>


	<script src='assets/js/bootstrap.min.js'></script>
</body>
</html>