<?php

$login_page = true;

//TODO: Redirect to a requested URL instead of base path on login_page
if (isset($_POST['username']) and isset($_POST['password'])) {
    $email_address = $_POST['username'];
    $password = $_POST['password'];

    $result = UserSession::authenticate($email_address, $password);
    $login_page = false;
}

if (!$login_page) {
    if ($result) {
        $should_redirect = Session::get('_redirect');
        $redirect_to = get_config('base_path');
        if (isset($should_redirect)) {
            $redirect_to = $should_redirect;
            Session::set('_redirect', false);
        }
        ?>
<script>
	window.location.href = "<?=$redirect_to?>"
</script>

<?php
    } else {
        ?>
<script>
	window.location.href = "/login.php?error=1"
</script>

<?php
    }
} else {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
</head>

<body>
	<div class="container  mt-5 ">
		<div class="row ">
			<div class="col-sm-4 mx-auto ">
				<?php
if (isset($_GET['error'])) {
    ?>
				<div class="alert alert-danger" role="alert">
					Invalid Credentials
				</div>
				<?php } ?>


				<div class="card">
					<div class="card-header bg-primary text-center">
						<h2 class="text-white ">Login </h2>

					</div>
					<div class="card-body">

						<!-- form -->

						<form class="" method="post">

							<div class="mb-3">
								<label for="name">Username</label>
								<input type="name" id="name" class="form-control" name="username"
									placeholder="username">
							</div>
							<div class="mb-3">
								<label for="name">Password</label>
								<input type="password" class="form-control" id="name" name="password"
									placeholder="password">
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="flexcheck">
								<label for="flexcheck" class="form-check-label">
									Remember me
								</label>
							</div>
							<div class="mb-3 text-center">
								<input type="submit" class="btn btn-primary btn-sm-auto w-80">
								<a href="signup.php" class="w-100 btn btn-link">Not registered? Signup</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


</html>


<?php
}
?>