<?php include 'db_conn.php' ?>

<!doctype html>
<html lang="it">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestionale 2DNica</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>


	<div class="container py-5 min-vh-100 d-flex flex-column justify-content-center">
		<div class="row">
			<div class="col-xl-10 mx-auto">
				<div class="card border-0 shadow">
					<div class="row no-gutters justify-content-center">
						<div class="col-sm-6 text-center py-5">
							<h3 class="font-weight-bold">Sign-in</h3>
							<div class="d-flex my-3 justify-content-center">

							</div>

							<form action="login.php" method="post">
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>



								<div class="form-group">
									<label for="inputEmailForm"  ></label>
									<div class="col-8 col-sm-12 col-md-10 mx-auto">
										<input type="text" class="form-control" id="inputEmailForm" placeholder="email" name="email" required="">
										<div class="invalid-feedback">Ops, l'email è obbligatoria</div>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPasswordForm"  ></label>
									<div class="col-8 col-sm-12 col-md-10 mx-auto">
										<input type="text" class="form-control" id="inputPasswordForm" name="password" placeholder="password" required="" 
										pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" autocomplete="no">
										<div class="valid-feedback">Bello sembra buono!</div>
										<div class="invalid-feedback">6 caratteri (1 superiore, 1 inferiore e numerico)</div>
									</div>
								</div>

								<div class="form-group">
									<div class="mx-auto pt-3">
										<a href="reset-password.php" class="small text-dark">Dimenticato la password?</a>
									</div>
								</div>

								<div class="form-group justify-content-center">
									<div class="pb-3 pt-3">
										<button type="submit" class="btn btn-danger rounded-pill">Entra</button>
									</div>
								</div>
							</form>
						</div>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
						<script src="index.js"> </script>
						
</body>

</html>