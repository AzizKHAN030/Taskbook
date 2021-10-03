<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="libs/bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/Font/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-5">
				<h2 class="my-4">Регистрация</h2>
				<form action="./reg.php" method="post">
                    <div class="form-group my-3">
                        <input type="name" class="form-control" placeholder="Name" name="name">
                    </div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="form-group my-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Зарегистрироватся</button>
					<a href="/" class="btn btn-info">Отмена</a>
				</form>
			</div>
		</div>
	</div>
	<?php if($_SESSION['isvalid']===false): ?>
		<?php unset($_SESSION['isvalid']); ?>
        <script>
            alert('Такой пользователь существует!');
        </script>  
    <?php endif; ?>
	<!-- js -->
	<script src="libs/jquery/jquery-3.3.1.min.js"></script>
	<script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
	<script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>