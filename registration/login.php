<?php
require "/xampp/htdocs/bootstrap/db.php";

$data = $_POST;
 if(isset($data['login-submit']))
 {  
     $errors = array();
     $user = R::findOne('users', 'login = ?', array($data['login'])); // пошук в базі пароля
     if($user)
     {
        if(password_verify($data['password'], $user->password)) // зрівнюєм паролі
        {
            $_SESSION['log_user'] = $user;
            echo '<div style="color:green;">Ви авторизовані <br>
            Ви можете зайти на <a href="/bootstrap/bootstrap/index.php">головну</a> сторінку</div><hr>';
            
        }else{
            $errors[] = 'Невірно введиний пароль!';
        }
     }else {
         $errors[] = 'Користувач з таким логіном не існує';
     }
     if(!empty($errors)){

        echo '<div style="color:red;">'. array_shift($errors) .'</div><hr>';
    }
}
 
?>