<?php
    session_start();
        $id=$_GET['id'];
        $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
        $sql = "DELETE FROM `news` WHERE id=$id";
        $query = $connect->prepare($sql);
        $query->execute();
        header('Location: /');
?>