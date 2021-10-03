<?php
    session_start();
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sql = "SELECT * FROM `users` WHERE name=:name AND pass=:pass";
    $query = $connect->prepare($sql);
    $query->execute([
        'name' => $name,
        'pass' => hash('sha512',$pass),
    ]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if($user){
        if($user['name']=='admin'){
            $_SESSION['admin'] = $name;
            $_SESSION['login'] = $name;
        }else{
            $_SESSION['login'] = $name;
        }
    }
    else{
        $_SESSION['error'] = 'Ошибка';
    }
    header ('Location: /');
?>