<?php
    session_start();
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sql = "SELECT * FROM `news` WHERE id";
    $query = $connect->prepare($sql);
    $query->execute();
    $news = $query->fetchAll(PDO::FETCH_ASSOC);
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Proweb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ml-auto form-inline">
                    <?php if(!isset($_SESSION['login'])): ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Войти
                        </button>
                        <div class="dropdown-menu p-3 mt-3">
                            <form action="auth.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                                <div class="form-group my-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Войти</button>
                            </form>
                        </div>
                    </div>
                    <a href="register.php" class="btn btn-success ml-4">Зарегистрироватся</a>
                    <?php else: ?>
                    <b style="color: #fff">Привет, <?php echo $_SESSION['login'] ?></b>
                    <a href="./logout.php" class="btn btn-secondary ml-4">Выйти</a>
                    <?php endif; ?>
            </div>
     </div>
</nav>
<?php if(isset($_SESSION['login']) || isset($_SESSION['admin'])): ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-3">Все Задачи</h1>
            <?php if(isset($_SESSION['admin'])): ?>
            <a href="create.php" class="btn btn-success mb-3">Добавить</a>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach($news as $newsItem): ?>   
                    <tr>
                        <td><?= $newsItem['id']; ?></td>
                        <td><?= $newsItem['title']; ?></td>
                        <td>
                            <a href="show.php?id=<?=$newsItem['id'] ?>" class="btn btn-info">
                                Показать
                            </a>
                            <?php if(isset($_SESSION['admin'])): ?>
                            <a href="edit.php?id=<?=$newsItem['id'] ?>" class="btn btn-warning">
                                Редактировать
                            </a>
                            <a onclick="return confirm('Вы точно хотите удалить?')" href="delete.php?id=<?=$newsItem['id'];?>" class="btn btn-danger">Удалить</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>

    <?php if(isset($_SESSION['error'])): ?>
        <?php unset($_SESSION['error']); ?>
        <script>
            alert('Пароль или логин введен неправильно');
        </script>
        <?php endif; ?>
   
    <!-- js -->
    <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>