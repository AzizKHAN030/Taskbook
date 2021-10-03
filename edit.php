<?php
    session_start();
    $id = $_GET['id'];
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sql = "SELECT * FROM `news` WHERE id=$id";
    $query = $connect->prepare($sql);
    $query->execute();
    $news = $query->fetch(PDO::FETCH_ASSOC);
?>
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
            <h1>Редактирование</h1>
            <form action="./update.php?id=<?=$id;?>" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?=$news['title'] ?>">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"><?=$news['content'] ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Редактировать</button>
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