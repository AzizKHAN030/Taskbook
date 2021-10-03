<?php
    session_start();
        $id=$_GET['id'];
        include 'config.php';
        $sql = "DELETE FROM `news` WHERE id=$id";
        $query = $connect->prepare($sql);
        $query->execute();
        header('Location: /');
?>