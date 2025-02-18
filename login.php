<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<link rel="icon" href="assets/icon.png" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<div class="container">
		<header>
			<nav>
				<div class="logo">
					<img src="assets/logo.png" alt="" />
				</div>
				<input type="checkbox" id="click" />
				<label for="click" class="menu-btn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php" class="btn_login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="center">
				<div class="form-login">
					<h3>Login</h3>
					<form action="">
						<input class="input" type="text" name="username" placeholder="Username" />
						<input class="input" type="password" name="password" placeholder="Password" />
						<button type="submit" class="btn_login" name="login" id="login"> Login
						</button>
					</form>
					<a href="#" class="link-register">
						Register Disini</a>
				</div>
			</div>
		</main>
		<footer>
			<h4>&copy; Muhammad Ridho 2024</h4>
		</footer>
	</div>
</body>

</html>