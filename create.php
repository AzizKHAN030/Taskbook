<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- css -->
    <link rel="stylesheet" href="libs/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/Font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- ./css -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Добавление задачи</h1>
            <form action="./add.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>
  <!-- js -->
  <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>