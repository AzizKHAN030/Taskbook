<?php
    session_start();
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    include 'config.php';
    $sql = "UPDATE `news` SET `title`=:title, `content`=:content WHERE id=$id";
    $query = $connect->prepare($sql);
    $query->execute([
        'title'=>$title,
        'content'=>$content
    ]);
    header('Location: /')
?>