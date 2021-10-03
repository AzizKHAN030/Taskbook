<?php
    session_start();
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sql = "UPDATE `news` SET `title`=:title, `content`=:content WHERE id=$id";
    $query = $connect->prepare($sql);
    $query->execute([
        'title'=>$title,
        'content'=>$content
    ]);
    header('Location: /')
?>