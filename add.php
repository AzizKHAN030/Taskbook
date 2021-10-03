<?php
    session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sql = "INSERT INTO `news`(`title`, `content`) VALUES (:title, :content)";
    $query = $connect->prepare($sql);
    $query->execute([
        'title'=>$title,
        'content'=>$content
    ]);
    header('Location: /')
?>