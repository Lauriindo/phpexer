<?php
require_once 'users.php';
require_once 'user.php';
require_once 'login.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['Email'])){
            $login = $login -> get('email');
            $pass = $pass -> get('password');

            foreach($users as $data) {
                if($email == $data['email'] && $pass == $data['password']){ 
                    $user = new user();
                    $user->setName($data['name']);
                    $user->setCpf($data['cpf']);
                    $user->setEmail($data['email']);
                    $user->setPassword($data['password']);
                }
            }
            
        }
    ?>
</body>
</html>
