<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['email'];
    $connect = new PDO('mysql: dbhost=localhost; dbname=php1930','root','root');
    $sqlChek = "SELECT * FROM `users` WHERE 1";
    $queryCheck = $connect->prepare($sqlChek);
    $queryCheck->execute();
    $users = $queryCheck->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($users as $user) {
        if($user['email']==$email){
            $_SESSION['isvalid']=false;
            header('Location: /register.php');
            break;
        }
        else{
            $_SESSION['isvalid']=true;
        }
    }
    if($_SESSION['isvalid']){   
        $sql = "INSERT INTO `users`(`name`, `email`,`pass`) VALUES (:name, :email, :pass)";
        $query = $connect->prepare($sql);
        $query->execute([
            'email'=>$email,    
            'name'=>$name,
            'pass'=>hash('sha512',$pass),
        ]);
        $_SESSION['isvalid']=true;
        header('Location: /');
    }
    

    
?>
