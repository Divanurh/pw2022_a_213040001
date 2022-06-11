<?php
session_start();

if(isset($_SESSION["login"]) ) {
    header("Location: students.php");
    exit;
}

require 'function.php';
$conn = mysqli_connect('localhost', 'root', '', 'tubes') or die ('koneksi gagal');

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result)=== 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;


            header("Location: index.html");
            exit;
        }
    }

    $error = true;

}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body class="img js-fullheight" style="background-image: url(img/bg3.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
				  <?php if(isset($error)) : ?>
				  <p style="color: red; font-style: italic">username / password salah</p>
				  <?php endif; ?>
		      	<form action="" method="post" class="signin-form">
		      		<div class="form-group">
						<label for="username">Username :</label>
						<input type="text" name="username" id="username"  class="form-control" placeholder="Username">
		      		</div>
	            <div class="form-group">
					<label for="password">Password :</label>
                	<input type="password" name="password" id="password" class="form-control" placeholder="Password">
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3 mt-2">Login</button>
					<a href="registration.php" class="form-control btn btn-primary submit px-3 mt-2">Registrasi</a>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

